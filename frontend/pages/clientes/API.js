const urlClientes = 'http://localhost/ArTeM02-061/mini-proyectos-PHP/backend/controller.php?op=getAll'; 
const urlRegistrar = 'http://localhost/ArTeM02-061/mini-proyectos-PHP/backend/controller.php?op=insertData';

export const getClientes = async () => {
    try {
        const response = await fetch(urlClientes);
        const clientes = await response.json();
        return clientes;
    } catch (err) {
        console.error(err);
    }
}

export const insertCliente = async (registro) => {
    try {
        await fetch(urlRegistrar, {
            method: "POST",
            body: JSON.stringify(registro),
            headers:{
                'Content-Type' : 'application/json'
            }
        });
    } catch (error) {
        
    }
}