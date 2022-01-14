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
        <h2 class="mt-5 mb-5">Liste de mes clients  </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Adresse email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($row as $lines){?>
                        <tr>
                            <th scope="row"><?= $lines["id"] ; ?></th>
                            <td><?= $lines["nom"] ; ?></td>
                            <td><?= $lines["prenom"] ; ?></td>
                            <td><?= $lines["email"] ; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
    </div>

</div>









<?= 
require_once "footer.php";

?>