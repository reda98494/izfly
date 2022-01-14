<?php session_start(); ?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand h3" href="../view/index.php" style="color: black;"><i class="fas fa-home"></i>  Accueil</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <ul class="navbar-nav">

               <li class="nav-item h6 mr-5">
                  <a class="nav-link" href="../controller/book.controller.php?action=book_history&id_user=<?= $_SESSION["Session_1"][0]["id"];?>" style="color: black;">
                    <i class="fas fa-history"></i>
                       Mes réservations 
                   </a>
                </li>
                <li class="nav-item h6 mr-5">
                  <a class="nav-link" href="../controller/profile.controller.php?action=profile&id=<?= $_SESSION["Session_1"][0]["id"];?>" style="color: black;">
                    <i class="fas fa-user-alt"></i>
                       Mon profil 
                   </a>
                </li>
                <li class="nav-item h6 mr-3 ml-5">
                    <?php
                        if ($_SESSION["Session_logged"] == "yes") {
                    ?>
                        <a class="nav-link btn btn-xs btn-danger " href="../controller/auth.controller.php?action=disconnect" style="color: black;">
                            <i class="fas fa-sign-out-alt"></i>
                            Déconnexion
                        </a>
                    <?php
                    }    
                    ?>
                </li>

            </ul>
        </div>
    </div>
</nav>