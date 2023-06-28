import { getClientes } from "./API.JS";

addEventListener("DOMContentLoaded", cargarClientes);

async function cargarClientes(){
    const result = await getClientes();
    console.log(result);
}