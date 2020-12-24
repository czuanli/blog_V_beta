<?php ob_start(); ?>
<!DOCTYPE html>
<html lang='fr'>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  	<link rel="stylesheet" href="index.css">
	<script src="https://use.fontawesome.com/4316fe2af6.js"></script>
</head>
<body>

    <div class="container">
        <form action="?page=client&action=create" method="POST">
            <div class="row">
                <div class="form-group col">
                    <label>Nom d'utilisateur</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group col">

                    <label>Mail</label>
                    <input type="text" name="mail">
                </div>

                <div class="form-group col">

                    <label>Nom</label>
                    <input type="text" name="nom">
                </div>
                <div class="form-group col">

                    <label>Prénom</label>
                    <input type="text" name="prenom">
                </div>

                <div class="form-group col">

                    <label>Mot de passe</label>
                    <input type="text" name="password">
                </div>
                <div class="form-group col">

                    <label>Admin</label>
                    <input type="text" name="admin">
                </div>
            </div>

                <input type="submit">

        </form>
    </div>
   
    <?php
    $body = ob_get_clean();
    require "template.php"
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="asserts/js/bootstrap.min.js" ></script>
</body>
</html>