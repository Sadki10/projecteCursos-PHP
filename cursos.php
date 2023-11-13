<?php
session_start();
if (isset($_SESSION['cursos'])){
    $cursos = $_SESSION['cursos'];
} else {
    $cursos = [];
}
if (isset($_REQUEST['curs'])) {
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
}

$_SESSION['cursos'] = $cursos;
if (isset($_REQUEST['alta'])) {
    print "<h1>Dades introduïdes correctament</h1>";
    header('refresh:3;url=./P3.php');
} else {
    header('Location:./P3.php');
}
