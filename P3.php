<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú</title>
    </head>
</html>
<?php
/*if (isset($_SESSION['cursos'])){
    $cursos = $_SESSION['cursos'];
} else {}*/


/*if (isset($_REQUEST['curs'])) {
    $curs = $_REQUEST['curs'];
    $hores = $_REQUEST['hores'];
    $mesos = $_REQUEST['mesos'];
    $formador = $_REQUEST['formador'];
    $temari = $_REQUEST['temari'];
    $cursos[$curs] = [
        'hores' => $hores,
        'mesos' => $mesos,
        'formador' => $formador,
        'temari' => $temari,
    ];
} else {}*/

/*foreach ($cursos as $curs => $dades) {
    print "<h1>$curs</h1>";
    foreach ($dades as $key => $value) {
        print "<p>$key = $value</p>";
    }
}*/

/*if (isset($_SESSION['cursos'])){
    $cursos = $_SESSION['cursos'];
} else {
    $cursos = [];
}
if (isset($_REQUEST['curs'])) {
    $curs = $_REQUEST['curs'];
    $hores = $_REQUEST['hores'];
    $cursos[$curs] = $hores;
    $cursos['asd'] = 7;//
} else {}

foreach ($cursos as $curs => $hores) {
    print "$curs => $hores<br>";
}*/

?>
<?php
session_start();
require("menu.html");
require("peu.html");
if (isset($_SESSION['cursos'])) {
    $cursos = $_SESSION['cursos'];
    print "<select>";
    foreach ($cursos as $curs => $dades) {
    print "<option>$curs</option>";
    }
    print "<select>";
}

?>