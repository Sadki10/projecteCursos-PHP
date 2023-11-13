<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dades del curs</title>
    </head>
</html>
<?php
session_start();
require("menu.html");
require("peu.html");
if (isset($_SESSION['cursos'])) {
    $cursos = $_SESSION['cursos'];
    print '<br><form action="P6.php" method="post">
            <select name="curs">';
    foreach ($cursos as $curs => $dades) {
    print "<option>$curs</option>";
    }
    print   '</select><br>
        <input type="submit" name="DadesCurs" value="Veure dades del curs">';
} else {
    print "<h1> NO HI HA CURSOS PER A MOSTRAR</h1>";
}

if (isset($_REQUEST['DadesCurs'])) {
    $curs = $_REQUEST['curs'];
    print "<h1>Dades de $curs</h1>";
    foreach ($cursos[$curs] as $curs => $dades) {
        print "<p>$curs= $dades</p>";
    }
}
?>
