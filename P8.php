<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cercador</title>
    </head>
<?php
require("menu.html");
?> 
<body>
<form action="P8.php" method="post">
Buscar: <input name="paraula">
<input type="submit" name="buscador" value="Buscar">
</form>
</body>
</html>
<?php
session_start();
require("peu.html");
$resultats = [];
if (isset($_SESSION['cursos'])) {
    $cursos = $_SESSION['cursos'];
    if (isset($_REQUEST['buscador'])) {
        $buscar = $_REQUEST['paraula'];
        if (!empty($buscar)) {
            foreach ($cursos as $curs => $value) {
                if (stripos($curs, $buscar) !==false) {
                    $resultats[] = $curs;
                }
            }
            if (!empty($resultats)) {
                foreach ($resultats as $resultat) {
                    print "<a href=\"P6.php?id=$resultat\">$resultat</a>";
                    print "<br>";
                }    
            } else {
                print "<p>No s'han trobat resultats</p>";
            }
        } else {
            print "No s'ha ingresat ninguna paraula a buscar";
        }
    }
} else {
    print "<h1>No hi ha cursos per a cercar</h1>";
}
