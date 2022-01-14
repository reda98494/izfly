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
    <div class="col-md-8" style="padding-top: 15%;margin-left: 10%;">
        <div class="card" style="height:550px;">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4" style="width: 50%;">
                        <img src="../public/media/images/logo_large.png" alt="" srcset="" width="50%">
                        
                    </div>
                    <div class="col-md-4" style="width: 50%;">
                        <form action="../controller/auth.controller.php?action=inscription" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom :</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name" name="name" required>
                                <div id="name" class="form-text">Veuillez renseigner votre nom.</div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Prénom :</label>
                                <input type="text" class="form-control" id="username" aria-describedby="username" name="username" required>
                                <div id="username" class="form-text">Veuillez renseigner votre prénom.</div>
                            </div>
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
                                    <input type="submit" class="btn btn-dark" name="inscription" value="inscription">
                                </div>
                                <div class="col-md-auto">
                                    <a href="../view/auth.php">J'ai déja un compte</a>
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