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


function addFormule($mysqlConnection){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["ajouter"]){
        $formule = $_POST["formule_name"];
        $destination = $_POST["destination"];
        $ville = $_POST["ville"];
        $prix = $_POST["prix"];
        $media_uri = $_POST["media_uri"];
        $image_1 = $_POST["image_1"];
        $image_2 = $_POST["image_2"];
        $image_3 = $_POST["image_3"];

        $prepare = $mysqlConnection->prepare("insert into formules(destination,villes_destination,nom_formule,prix,url_media,image_1,image_2,image_3) values(?,?,?,?,?,?,?,?)");
        $prepare->execute(array($destination,$ville,$formule,$prix,$media_uri,$image_1,$image_2,$image_3));
        header("location: ../view/index.php");
        
    }
    
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
        case "add_formule":
            addFormule($mysqlConnection);
            break;
    }   
}

?>