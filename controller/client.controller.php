<?php
include_once "../config/BDD_Connection.php";

function allUsers($mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM user");
    $prepare->execute();
    $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
    require_once "../view/client.php";
    
}

function allOffers($mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM formules");
    $prepare->execute();
    $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
    
    require_once "../view/offre.php";
    
}

function allBooks($mysqlConnection) {
    $prepare = $mysqlConnection->prepare("SELECT * FROM booking");
    $prepare->execute();
    $row = $prepare->fetchAll(PDO::FETCH_ASSOC);

    require_once "../view/books.php";
    
}



if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "clients":
            allUsers($mysqlConnection);
            break;
        case "offres":
            allOffers($mysqlConnection);
            break;
        case "books_all":
            allBooks($mysqlConnection);
            break;
    }   
}

?>