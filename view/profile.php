<?php
require_once "header.php";
require_once "nav_bar.php";
if ($_SESSION["Session_logged"] != "yes") {
    header("location: ../view/auth.php");
    exit();
}

require_once "../controller/profile.controller.php";
?>

<div class="container mt-5 mb-5 col-md-5">
    <form action="../controller/profile.controller.php?action=update&id=<?= $_SESSION["Session_1"][0]["id"];?>" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?= $row["nom"] ?>" required>
        <div id="name" class="form-text">Veuillez renseigner votre nom.</div>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="username" aria-describedby="username" name="username" value="<?= $row["prenom"] ?>" required>
        <div id="username" class="form-text">Veuillez renseigner votre prénom.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse email :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $row["email"] ?>" required>
        <div id="emailHelp" class="form-text">Veuillez renseigner une adresse mail valide.</div>
    </div>
    <div class="mb-3">
        <label for="inputPassword" class="form-label">Mot de passe :</label>
        <input type="password" class="form-control" id="inputPassword" aria-describedby="mpHelp" name="password" disabled>
        <div id="emailHelp" class="form-text">Veuillez renseigner un mot de passe.</div>
    </div>
    
    <input type="submit" class="btn btn-dark" name="update" value="Mettre à jour">
    </form>
</div>












<?= 
require_once "footer.php";

?>