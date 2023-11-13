<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nou curs</title>
    </head>
</html>
<?php
session_start();
require("menu.html");
?>
    <form action="cursos.php" method="post">
        <p>Nom del curs<input type="text" name="curs" required></p>
        <p>Hores<input type="number" name="hores" required></p>
        <p>Mesos que dura<input type="number" name="mesos" required></p>
        <p>Formador<input type="text" name="formador" required></p>
        <p>Temari<input type="text" name="temari" required></p>        
        <input type="submit" name="alta" value="alta">
    </form>
<?php
require("peu.html");
?>