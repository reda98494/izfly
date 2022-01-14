<?php
require_once "header.php";
require_once "nav_bar.php";
if ($_SESSION["Session_logged"] != "yes") {
    header("location: ./auth.php");
    exit();
}

require_once "../controller/index.controller.php";
?>

<!--BANNER-->
<div class="block">
        <div class="banner">
            <img src="../public/media/images/fond.jpg" style="width:100%;" alt="Un vane pour un road trip" class="banner-image">
            <div class="banner-content">
                <h1 class="title is-1">Osez, voyagez, simplement vivez !</h1>
                <h1 class="title is-1">OSEZ <b> IZFLY</b></h1>
                <h2 class="subtitle">AVEC VOUS JUSQU'AU BOUT DU MONDE</h2>
                <!-- <button class="button is-link" id="open_modal">Contactez-moi!</button> -->
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!--BANNER-->


<div class="container">
    <div class="row">
        <h2 class="mt-5 mb-5">Découvrez nos formules et déstinations de rêve :</h2>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 620px;  height: 520px;">
                    <img src="<?= $row[0]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[0]["id"] ?>"><figcaption><?= $row[0]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 620px; height: 520px;">
                    <img src="<?= $row[1]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[1]["id"] ?>"><figcaption><?= $row[1]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card" style="width: 620px;  height: 520px;">
                    <img src="<?= $row[2]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[2]["id"] ?>"><figcaption><?= $row[2]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 620px; height: 520px;">
                    <img src="<?= $row[3]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[3]["id"] ?>"><figcaption><?= $row[3]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card" style="width: 620px;  height: 520px;">
                    <img src="<?= $row[4]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[4]["id"] ?>"><figcaption><?= $row[4]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 620px; height: 520px;">
                    <img src="<?= $row[5]["url_media"];?>" width="100%" height="100%" class="card-img-top">
                    <a href="../controller/formule.controller.php?action=detail&id=<?=$row[5]["id"] ?>"><figcaption><?= $row[5]["nom_formule"];?></figcaption></a> 
                </div>
            </div>
            
        </div>
    </div>
    
</div>




















































<?php 
require_once "footer.php";

?>