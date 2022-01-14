<?php
require_once "header.php";
require_once "nav_bar.php";
if ($_SESSION["Session_logged"] != "yes") {
    header("location: ../view/auth.php");
    exit();
}
if (empty($_SESSION["Session_admin"])){
    header("location: ../view/index.php");
    exit();
}
require_once "../controller/client.controller.php";
?>
<div class="container mt-1">
    <div class="col-md-12">
        <form action="../controller/client.controller.php?action=add_formule" method="POST">
            <div class="mb-3">
                <label for="formule_name" class="form-label">Nom de la formule :</label>
                <input type="text" class="form-control" id="formule_name" aria-describedby="formule_name" name="formule_name" required>
                <div id="formule_name" class="form-text">Veuillez renseigner le nom de la formule.</div>
            </div>
            <div class="mb-3">
                <label for="destination" class="form-label">Déstination :</label>
                <input type="text" class="form-control" id="destination" aria-describedby="destination" name="destination" required>
                <div id="destination" class="form-text">Veuillez renseigner votre déstination</div>
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Villes :</label>
                <input type="text" class="form-control" id="ville" aria-describedby="ville" name="ville" required>
                <div id="ville" class="form-text">Veuillez renseigner les villes</div>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix :</label>
                <input type="number" class="form-control" id="prix" aria-describedby="prix" name="prix" required>
                <div id="prix" step="any" class="form-text">Veuillez renseigner le prix</div>
            </div>
            <div class="mb-3">
                <label for="media_uri" class="form-label">Image de fond :</label>
                <input type="text" class="form-control" id="media_uri" aria-describedby="media_uri" name="media_uri" required>
                <div id="media_uri" class="form-text">Veuillez renseigner l'url de votre image de fond</div>
            </div>
            <div class="mb-3">
                <label for="image_1" class="form-label">Image 1 :</label>
                <input type="text" class="form-control" id="image_1" aria-describedby="image_1" name="image_1" required>
                <div id="image_1" class="form-text">Veuillez renseigner l'url de votre image 1</div>
            </div>
            <div class="mb-3">
                <label for="image_2" class="form-label">Image2 :</label>
                <input type="text" class="form-control" id="image_2" aria-describedby="image_2" name="image_2" required>
                <div id="image_2" class="form-text">Veuillez renseigner l'url de votre image 2</div>
            </div>
            <div class="mb-3">
                <label for="image_3" class="form-label">Image 3 :</label>
                <input type="text" class="form-control" id="image_3" aria-describedby="image_3" name="image_3" required>
                <div id="image_3" class="form-text">Veuillez renseigner l'url de votre image 3</div>
            </div>
            
            
            <input type="submit" class="btn btn-dark" name="ajouter" value="ajouter">
            
            
            
        </form>
    </div>

</div>



<?= 
require_once "footer.php";
?>