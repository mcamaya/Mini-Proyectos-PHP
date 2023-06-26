import { getClientes, insertCliente } from "./API.js";

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

const registrar = document.querySelector('#registrar');

registrar.addEventListener("submit", nuevoCliente);

function nuevoCliente(e) {
    e.preventDefault;
    /* const id = document.querySelector('#id_con').value; */
    const nombre = document.querySelector('#nombre_con').value;
    const nit = document.querySelector('#nit_con').value;
    const representante = document.querySelector('#representante_con').value;
    const email = document.querySelector('#email_con').value;
    const telefono = document.querySelector('#telefono_con').value;

    const registro = {
        nombre,
        nit,
        representante,
        email,
        telefono
    }

    nuevoCliente(registro);
}