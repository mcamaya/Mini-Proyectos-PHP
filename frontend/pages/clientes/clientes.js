import { getClientes, nuevoCliente } from "./API.JS";

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

const form = document.querySelector('#registar');
form.addEventListener("submit", registarCliente);

function registarCliente(e) {
    const nombre = document.querySelector('#nombre').value;
    const nit = document.querySelector('#nit').value;
    const representante = document.querySelector('#representante').value;
    const correo = document.querySelector('#correo').value;
    const telefono = document.querySelector('#telefono').value;

    const registro = {
        nombre,
        nit,
        representante,
        correo,
        telefono
    }

    nuevoCliente(registro);
}

