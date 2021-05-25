<?php
require("Mysql.class.php"); //on inclue ici la class
require ("connexpdo.inc.php");
require ("myparam.inc.php");

$sql = connexpdo("ensat", "myparam");
$res = $sql->query("SELECT * FROM eleves"); //on execute une requete simple
echo "<center><h1>Liste des élèves de GINF1</h1></center>";
echo "<table border=1 align=center>";
$data = $res->fetchAll();
foreach($data as $info) //afin d'affiche les résultats de cette requete on utlise une boucle while
{
    echo "<tr>";
    echo "<td>".$info['cne']."</td>";
    echo "<td>".$info['nom']."</td>"; ; //on affiche les donnée du champ log de mysql
    echo "<td>".$info['Prenom']."</td>"; ;
    echo "</tr>";
}
echo "</table>";

?>