<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuari</title>
    </head>
</html>
<?php
session_start();
$nom = $_REQUEST['nom'];
$contra = $_REQUEST['contra'];
print "El teu usuari es $nom<br>";
print "La teva contrasenya es $contra<br>";
print"<button><a href=\"P1.php\">Aceptar</a></button><br>";
$contra = md5($contra);
$_SESSION['nom'] = $nom;
$_SESSION['contra'] = $contra;
?>
