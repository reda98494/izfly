<?php
include_once "../config/BDD_Connection.php";

$requete="SELECT * FROM formules";
$result = $mysqlConnection->query($requete);
$row = $result->fetchAll(PDO::FETCH_ASSOC);



?>