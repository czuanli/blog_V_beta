<?php ob_start(); ?>
<div class="container">
    <h1>Vous êtes bien connecté <strong><?= $_SESSION['username']; ?></strong></h1>
</div>
<?php
$body = ob_get_clean();
require "template.php"
?>