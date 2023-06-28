const url = 'http://localhost/xampp/miniProyectosPHP/backend/controllers/clienteController.php?op=getAll';

export const getClientes = async () => {
    try {
        const datos = await fetch(url);
        const clientes = await datos.json();
        return clientes;
    } catch (err) {
        console.error(err);
    }
}

