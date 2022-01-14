<?php
require_once "header.php";
require_once "nav_bar.php";
if ($_SESSION["Session_logged"] != "yes") {
    header("location: ../view/auth.php");
    exit();
}

require_once "../controller/book.controller.php";
?>

<div class="container mt-5">
    <div class="row">
        <h2 class="mt-5 mb-5">Histroique de mes réservations  </h2>
        <?php $i=1; ?>
        <?php foreach($final_result as $result){
            ?>
            <h3 class="mt-3 mb-1">Formule <?= $i; ?></h3>
               <?php foreach($result as $row){
                ?>
                    <div class="col-md-6">
                        <div class="nav-item h4" style="color: #9f334a;">
                            <i class="fas fa-signature"></i> Nom de la formule :  
                        </div>
                        <p style="font-weight:500;"><?= $row["nom_formule"] ; ?></p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-item h4" style="color: #9f334a;">
                            <i class="fas fa-flag"></i> Pays de déstination :
                        </div>
                        <p style="font-weight:500;"><?= $row["destination"] ; ?></p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-item h4" style="color: #9f334a;">
                            <i class="fas fa-credit-card"></i> Le prix de la formule :
                        </div>
                        <p style="font-weight:500;"><?= $row["prix"] ; ?></p>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-item h4" style="color: #9f334a;">
                        <i class="fas fa-city"></i> Les villes de destination :
                        </div>
                        <p style="font-weight:500;"><?= utf8_decode($row["villes_destination"]); ?></p>
                        <br>
                    </div>
                    <hr>
                <?php
               }
               ?>

            <?php
            $i++;
        } ?>
        
    </div>
</div>











<?= 
require_once "footer.php";

?>