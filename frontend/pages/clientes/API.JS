const urlClientes = 'http://localhost/SkylAb-150/Mini-Proyectos-PHP/backend/controllers/clienteController.php?op=getAll';
const urlNuevo = 'http://localhost/SkylAb-150/Mini-Proyectos-PHP/backend/controllers/clienteController.php?op=insert';
const urlEditar = 'http://localhost/SkylAb-150/Mini-Proyectos-PHP/backend/controllers/clienteController.php?op=update';

export const getClientes = async () => {
    try {
        const datos = await fetch(urlClientes);
        const clientes = await datos.json();
        return clientes;
    } catch (err) {
        console.error(err);
    }
}

export const nuevoCliente = async (registro) => {
    try {
        await fetch(urlNuevo, {
            method: "POST",
            body: JSON.stringify(registro),
            headers: {
                "Content-Type": "application/json"
            }
        });
    } catch (err) {
        console.error(err);
    }
}

export const editarCliente = async (registro) => {
    try {
        await fetch(urlEditar, {
            method: "PUT",
            body: JSON.stringify(registro),
            headers: {
                "Content-Type": "application/json"
            }
        });
    } catch (err) {
        console.error(err);
    }
}