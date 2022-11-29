<?php
    session_start();
    echo "HOLA ";
    echo "<br>";
    echo "Bienvenido ". $_SESSION['usuario'];
    echo "<a href='salir.php' > cerrar sesion</a> ";
    echo "<br>";
    echo "Formulario en Español ";
    echo "<a href='panelprincipales.php'> FormularioEspañol</a> ";
    echo "<br>";
    echo "Formulario en Inglés ";
    echo "<a href='panelprincipalesen.php'>;
    FormularioInglés</a> ";
    echo "<br>";
    echo "PANEL PRINCIPAL";
    echo "<br>";
    echo "<br>";
    echo "LISTA DE PRODUCTOS";
    echo "<br>";

    $lista = array(
        "Pantalones",
        "Camisas",
        "Camisetas",
        "Chandals",
        "Mallas",
        "Polos",
        "Sudaderas",
        "Chaquetas",
        "Forros polares",
        "Chalecos",
        "Abrigos",
        "Jerseys",
        "Corbatas",
        "Zapatos");
    echo "La lista es:";
    echo"<br>";
    foreach($lista as $lista){
    echo $lista . "\n";
    echo"<br>";
    }
?>