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
	<!--Corps-->
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">

				<p class="haut">Bienvenue sur mon blog !</p>

					<p>Particularité il ne sera pas alimenté seulement par mon contenu mais vous avez aussi votre place. Enrichissez nous de votre connaissance</p>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="asserts/js/bootstrap.min.js" ></script>

<?php 
$body = ob_get_clean();
require 'templates\template.php'; 
?>
</body>
</html>