<?php
include($_SERVER['DOCUMENT_ROOT']."/PHP/header.php");
?>


Hola <?php echo htmlspecialchars($_POST['name']); ?>. Usted tiene <?php echo (int)$_POST['age']; ?> años.