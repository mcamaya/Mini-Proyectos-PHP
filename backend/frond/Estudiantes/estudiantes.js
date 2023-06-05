import { getEstudaintes } from "./API.js";

addEventListener("DOMContentLoaded", cargarEstudiantes);
const tablaEstudiantes = document.querySelector('#tabla');

async function cargarEstudiantes(){
    const estudiantes = await getEstudaintes();
    console.log(estudiantes);

    estudiantes.forEach(estudiante => {
        tablaEstudiantes.innerHTML += `
        
        <tr class="cards"
        imagen="${estudiante.imagen}"
        nombre="${estudiante.nombre}"
        edad="${estudiante.edad}"
        promedio="${estudiante.promedio}"
        nivelCAmpus="${estudiante.nivelCAmpus}"
        nivelIngles="${estudiante.nivelIngles}"
        especialidad="${estudiante.especialidad}"
        direccion="${estudiante.direccion}"
        celular="${estudiante.celular}"
        ingles="${estudiante.ingles}"
        Ser="${estudiante.Ser}"
        Review="${estudiante.Review}"
        Skills="${estudiante.Skills}"
        Asitencia="${estudiante.Asitencia}"
        >
            <th id="${estudiante.id}" scope="row">${estudiante.id}</th>
            <td id="${estudiante.id}">${estudiante.nombre}</td>
            <td id="${estudiante.id}">${estudiante.especialidad}</td>
            <td id="${estudiante.id}"><img src="images/${estudiante.imagen}" id="${estudiante.id} alt=""></td>
            <td id="${estudiante.id}"><button type="button" class="btn btn-info">Notas</button></td>
        </tr>

        `;
    });
}

function detalles(){
    tablaEstudiantes.addEventListener("click", (event) => {
        /* console.log(event.target); */
        
        if(event.target.getAttribute('id')){
            const atributos = event.target.getAttribute('id');
            const element = document.getElementById(atributos);
            const padre = element.parentNode;

            console.log(padre);
            const nombre = padre.getAttribute('nombre');
            const imagen = padre.getAttribute('imagen');
            const edad = padre.getAttribute('edad');
            const promedio = padre.getAttribute('promedio');
            const nivelCAmpus = padre.getAttribute('nivelCAmpus');
            const nivelIngles = padre.getAttribute('nivelIngles');
            const especialidad = padre.getAttribute('especialidad');
            const direccion = padre.getAttribute('direccion');
            const celular = padre.getAttribute('celular');

            const ingles = padre.getAttribute('ingles');
            const Ser = padre.getAttribute('Ser');
            const Review = padre.getAttribute('Review');
            const Skills = padre.getAttribute('Skills');
            const Asitencia = padre.getAttribute('Asitencia');

            console.log(ingles, Ser, Review);


            const detalles = document.querySelector('#detalles');
            detalles.innerHTML = `

            <div class="contanerDetalles">
                <div class="datos">
                    <div class="">
                        <img src="images/${imagen}" alt="" class="m-2">
                    </div>

                    <h5><strong>${nombre}</strong></h5>
                    <br>
                    <h5><strong>Edad:  &nbsp;&nbsp;&nbsp</strong> ${edad}</h5>
                    <h5><strong>Promedio:  &nbsp;&nbsp;&nbsp</strong> ${promedio}</h5>
                    <h5><strong>Nivel:  &nbsp;&nbsp;&nbsp</strong> ${nivelCAmpus}</h5>
                    <h5><strong>Ingles:  &nbsp;&nbsp;&nbsp</strong> ${nivelIngles}</h5>
                    <h5><strong>Especialidad:  &nbsp;&nbsp;&nbsp</strong> ${especialidad}</h5>
                    <h5><strong>Dirección:  &nbsp;&nbsp;&nbsp</strong> ${direccion}</h5>
                    <h5 style="background-color: rgb(190, 82, 253);"><strong>Celular:  &nbsp;&nbsp;&nbsp</strong> ${celular}</h5>
                    </div>
                    </div>
                    <div id="charts1" class="charts">
                    
                    </div>
                    
                    <div class="d-flex">
                        <button class="w-50 justify-content-end btn btn-outline-danger" style="height: 40px;"><i class="bi bi-trash-fill"></i>Eliminar</button>
                    </div>
            `;

            const getOptionCharts1 = () => {
                let valIngles = ingles*1;
                let valSer = Ser*1;
                let valReview = Review*1;
                let valSkills = Skills*1;
                let valAsitencia = Asitencia*1;

                return {
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center',
                      // doesn't perfectly work with our tricks, disable it
                      selectedMode: false
                    },
                    series: [
                      {
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['50%', '70%'],
                        // adjust the start angle
                        startAngle: 180,
                        label: {
                          show: true,
                          formatter(param) {
                            // correct the percentage
                            return param.name + ' (' + param.percent * 2 + '%)';
                          }
                        },
                        data: [
                          { value: valIngles, name: 'Ingles' },
                          { value: valSer, name: 'Ser' },
                          { value: valReview, name: 'Review' },
                          { value: valSkills, name: 'Skills' },
                          { value: valAsitencia, name: 'Asistencia' },
                          {
                            // make an record to fill the bottom 50%
                            value: valIngles + valSer + valReview + valSkills + valAsitencia,
                            itemStyle: {
                              // stop the chart from rendering this piece
                              color: 'none',
                              decal: {
                                symbol: 'none'
                              }
                            },
                            label: {
                              show: false
                            }
                          }
                        ]
                      }
                    ]
                  };
            }
            
            const charts1 = echarts. init(document.getElementById('charts1'));
            charts1.setOption(getOptionCharts1());
        }

    });
}
detalles()