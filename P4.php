<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar-se</title>
    </head>
</html>
<?php
session_start();
?>
 <form action="P5.php" method="post">
            <p>Usuari: <input type="text" name="nom" required></p>
            <p>Contrasenya: <input type="password" name="contra" required></p>
            <input type="submit" name="val" value="Donar d'alta">