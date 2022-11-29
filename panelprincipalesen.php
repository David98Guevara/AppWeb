 <?php
    session_start();
    echo "Hi ";
    echo "Welcome ". $_SESSION['usuario'];
    echo "<br>";
    echo "<a href='salir.php' > log out</a> ";
    echo "<br>";
    echo "Form in Spanish ";
    echo "<a href='panelprincipales.php'>    FormSpanish</a> ";
    echo "<br>";
    echo "Form in English ";
    echo "<a href='panelprincipalesen.php'> FormEnglish</a>";
    echo "<br>";
    echo "PRINCIPAL PANEL";
    echo "<br>";
    echo "<br>";
    echo "PODUCT LIST";
    echo "<br>";

    $lista = array(
        "Pants",
        "Shirts",
        "Tshirts",
        "Tracksuits",
        "Tights",
        "Poles",
        "Sweatshirts",
        "Jackets",
        "Fleece linings",
        "Vests",
        "Coats",
        "Sweaters",
        "Ties",
        "Shoes");
    echo "The list is:";
    echo"<br>";
    foreach($lista as $lista){
    echo $lista . "\n";
    echo"<br>";
    }
?>
 