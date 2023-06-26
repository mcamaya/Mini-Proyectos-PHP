import { getClientes } from "./API.js";

addEventListener('DOMContentLoaded', cargaClientes)


async function cargaClientes() {
    const clientes = await getClientes();
    console.log(clientes);
    const tablaClientes = document.querySelector('#datosClientes');
    clientes.forEach(cliente => {
        tablaClientes.innerHTML += `
        <tr>
            <td>${cliente.id_constructora}</td>
            <td>${cliente.nombre_constructora}</td>
            <td>${cliente.nit_constructora}</td>
            <td>${cliente.nombre_representante}</td>
            <td>${cliente.email_contacto}</td>
            <td>${cliente.telefono_contacto}</td>
        </tr>
        `;
    });
}