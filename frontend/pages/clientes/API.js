const urlClientes = 'http://localhost/ArTeM02-061/mini-proyectos-PHP/backend/controller.php?op=getAll'; 

export const getClientes = async () => {
    try {
        const response = await fetch(urlClientes);
        const clientes = await response.json();
        return clientes;
    } catch (err) {
        console.error(err);
    }
}

