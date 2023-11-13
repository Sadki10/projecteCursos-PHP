<?php
session_start();
if ($_REQUEST['val'] =="Validar") {
    if (isset($_SESSION['nom']) && $_SESSION['nom'] == $_REQUEST['nom'] && $_SESSION['contra'] == md5($_REQUEST['contra'])) {
        header('Location:./P3.php');
    }else {
        // usuari o contraseña incorrecta
        header('Location:./P1.php');
    }
}else {
    // donar d'alta
    header('Location:./P4.php');
}
?>