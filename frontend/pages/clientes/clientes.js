import { getClientes } from "./API.JS";

addEventListener("DOMContentLoaded", cargarClientes);
const tabla = document.querySelector('#datosClientes');

async function cargarClientes(){
    const clientes = await getClientes();
    console.log(clientes);

    clientes.forEach(clt => {
        tabla.innerHTML += `
            <tr>
                <td>${clt.id_constructora}</td>
                <td>${clt.nombre_constructora}</td>
                <td>${clt.nit_constructora}</td>
                <td>${clt.nombre_representante}</td>
                <td>${clt.email_contacto}</td>
                <td>${clt.telefono_contacto}</td>
            </tr>
        `        
    });
}


