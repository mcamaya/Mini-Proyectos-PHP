import { getEstudaintes } from "./API.js";

addEventListener("DOMContentLoaded", cargarEstudiantes);
const tablaEstudiantes = document.querySelector('#tabla');

async function cargarEstudiantes(){
    const estudiantes = await getEstudaintes();
    console.log(estudiantes);

    estudiantes.forEach(estudiante => {
        tablaEstudiantes.innerHTML += `
        
        <tr class="cards"
        id="${estudiante.id}
        nombre="${estudiante.nombre}
        edad="${estudiante.edad}
        promedio="${estudiante.promedio}
        nivelCAmpus="${estudiante.nivelCAmpus}
        nivelIngles="${estudiante.nivelIngles}
        especialidad="${estudiante.especialidad}
        direccion="${estudiante.direccion}
        celular="${estudiante.celular}
        ingles="${estudiante.ingles}
        Ser="${estudiante.Ser}
        Review="${estudiante.Review}
        Skills="${estudiante.Skills}
        Asitencia="${estudiante.Asitencia}
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
        }

    });
}
detalles()