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

<div class="container mt-5">
    <div class="row">
        <h2 class="mt-5 mb-5">Liste de mes offres  </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Nom de la formule</th>
                    <th scope="col">Prix</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($row as $lines){?>
                        <tr>
                            <th scope="row"><?= $lines["id"] ; ?></th>
                            <td><?= $lines["destination"] ; ?></td>
                            <td><?= $lines["nom_formule"] ; ?></td>
                            <td><?= $lines["prix"] ; ?></td>
                            
                        </tr>
                    <?php }?>
                </tbody>
            </table>
    </div>

</div>









<?= 
require_once "footer.php";

?>