<?php

// condicionales
$autenticado = true;
$admin = false;

if($autenticado && $admin){
    echo "Usuario autenticado correctamente" . "<br>";
} else {
    echo "No se pudo realizar la autenticación" . "<br>";
}

//IF anidados
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'info' => [
        'tipo' => 'Regular'
    ]
];

if (!empty($cliente)){
    echo "El arreglo de cliente no está vacío" . "<br>";
    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo disponible" . "<br>";
    } else {
        echo "No hay saldo" . "<br>";
    }
}

//else if
if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo disponible" . "<br>";
} else if($cliente['info']['tipo'] === 'Premium') {
    echo "El cliente es premium" . "<br>";
} else {
    echo "El cliente no tiene saldo disponible o no es premium" . "<br>";
}


//switch
$tech = 'HTML';

switch ($tech) {
    case 'PHP':
        echo "PHP, un excelente lenguaje" . "<br>";
        break;
    
    case 'HTML':
        echo "Genial, el lenguaje de la web!" . "<br>";
        break;

    default:
        echo "Un lenguaje que no conozco" . "<br>";
        break;
}

echo "<br>";
echo "<br>";
echo "<br>";

$escuelaMichis = array(
    array(
        'nombre' => 'Nieve Michi',
        'ocupacion' => 'Dormilón',
        'color' => 'Blanco',
        'comidas' => array(
            "favoritas" => array("Queso azul", "Sopa de la abuela", "Calabaza"),
            "wuacala" => array("Carne", "Pollo", "Brocoli")
        )
    ), array(
        'nombre' => 'Azúcar Michi',
        'ocupacion' => 'Comelón',
        'color' => 'Gris',
        'comidas' => array(
            "favoritas" => array("Espinacas", "Pasta", "Pescado", "Guanábana"),
            "wuacala" => array("Tomate", "Papa")
        )
    ), array(
        'nombre' => 'Alfa Michi',
        'ocupacion' => 'Juguetón',
        'color' => 'Naranja',
        'comidas' => array(
            "favoritas" => array("Fresas", "Pastel", "Gelatina"),
            "wuacala" => array("Lechuga", "Tomate", "Aceitunas")
        )
    )
);

foreach ($escuelaMichis as $key => $value) {
    echo "
         <li>
            <p><strong>Nombre:</strong> {$value['nombre']}</p>
            <p><strong>Ocupación:</strong> {$value['ocupacion']}</p>
            <p><strong>Color:</strong> {$value['color']}</p>
        </li>
    ";
}