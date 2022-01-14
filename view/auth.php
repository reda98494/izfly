<?php
require_once "header.php";
include "../controller/auth.controller.php";
if (!empty($_SESSION)){
    if ($_SESSION["Session_logged"] == "yes") {
        header("location: ../view/index.php");
        exit();
    }
}

?>
<div class="container mt-5">
    <div class="col-md-8" style="padding-top: 20%;margin-left: 10%;">
        <div class="card" style="height:450px;">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4" style="width: 60%;">
                        <img src="../public/media/images/logo_large.png" alt="" srcset="" width="50%">
                        
                    </div>
                    <div class="col-md-4" style="width: 40%;">
                        <form action="../controller/auth.controller.php?action=auth" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Adresse email :</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                <div id="emailHelp" class="form-text">Veuillez renseigner une adresse mail valide.</div>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Mot de passe :</label>
                                <input type="password" class="form-control" id="inputPassword" aria-describedby="mpHelp" name="password" required>
                                <div id="emailHelp" class="form-text">Veuillez renseigner un mot de passe.</div>
                            </div>
                            <div class="row">
                                <div class="col-md-auto">
                                    <input type="submit" class="btn btn-dark" name="connexion" value="connexion">
                                </div>
                                <div class="col-md-auto">
                                <a href="../view/inscription.php">Ouvrir un compte</a>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
























<?php
require_once "footer.php";
?>