<?php
require_once "header.php";
require_once "nav_bar.php";
if ($_SESSION["Session_logged"] != "yes") {
    header("location: ../view/auth.php");
    exit();
}

require_once "../controller/formule.controller.php";
?>
<div class="container" id="carrousel_formule">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?= $row["url_media"]?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?= $row["image_1"]?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?= $row["image_2"]?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?= $row["image_3"]?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <h2 class="mt-5 mb-5">En savoir un peu plus sur la formule </h2>
        <div class="col-md-6">
            <div class="nav-item h4" style="color: #9f334a;">
            <i class="fas fa-signature"></i> Nom de la formule :  
            </div>
            <p style="font-weight:500;"><?= $row["nom_formule"] ; ?></p>
            <br>
            <div class="nav-item h4" style="color: #9f334a;">
            <i class="fas fa-credit-card"></i> Le prix de la formule :
            </div>
            <p style="font-weight:500;"><?= $row["prix"] ; ?>€</p>
            <br>
            <div class="nav-item h4" style="color: #9f334a;">
            <i class="fas fa-flag"></i> Pays de destination : 
            </div>
            <p style="font-weight:500;"><?= $row["destination"] ; ?></p>
        </div>
        <div class="col-md-6">
            <div class="nav-item h4" style="color: #9f334a;">
                <i class="fas fa-clock"> </i> Date & heure de départ :
            </div>
            <p style="font-weight:500;">le 01 janvier 2022 - le 07 janvier 2022</p>
            <br>
            <div class="nav-item h4" style="color: #9f334a;">
            <i class="fas fa-city"></i> Les villes de destination :
            </div>
            <p style="font-weight:500;"><?= utf8_decode($row["villes_destination"]); ?></p>
        </div>
    </div>
    <div class="row mt-5">
        <form action="../controller/book.controller.php?action=book&id_user=<?= $_SESSION["Session_1"][0]["id"];?>&id_formule=<?= $row["id"]?>" method="post" class="mb-5">
            <input type="submit" value="Réserver" name="book" class="btn btn-dark">
        </form>
    </div>
</div>





















<?php 
require_once "footer.php";

?>