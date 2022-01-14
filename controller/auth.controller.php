<?php
include_once "../config/BDD_Connection.php";
$mysqlConnection;
$logged = 0;
session_start();

function inscription($mysqlConnection){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["inscription"]){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $prepare = $mysqlConnection->prepare("insert into user(nom,prenom,email,password) values(?,?,?,?)");
        $prepare->execute(array($name, $username, $email, $password));
        header("location: ../view/auth.php");
        
    }
    
}

function checkAccess($mysqlConnection) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["connexion"]){
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $prepare = $mysqlConnection->prepare("SELECT * FROM user WHERE email= ? and password= ?");
        $prepare->execute(array($email, $password));
        $result = $prepare->fetchAll();
        if(!empty($result)){
            $logged = 1;
            $_SESSION["Session_".$logged] = $result;
            $_SESSION["Session_logged"] = "yes"; 
            header("location: ../view/index.php");
        }else{
            header("location: ../view/auth.php");
        }
    } 
}

function disconnect() {
    $_SESSION["Session_logged"] = "no";
    session_destroy();
    header("location: ../view/auth.php");

}


if(!empty($_GET["action"])){
    switch($_GET["action"]) {
        case "auth":
            checkAccess($mysqlConnection);
            break;
        case "disconnect":
            disconnect();
            break;
        case "inscription":
            inscription($mysqlConnection);
            break;
    }
}




?>