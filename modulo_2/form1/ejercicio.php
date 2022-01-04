<?php
include($_SERVER['DOCUMENT_ROOT']."/PHP/header.php");
?>

<body>
    <form action="action.php" method="post">
        <p>nombre: <input type="text" name="name"></p>
        <p>edad: <input type="number" name="age"></p>   
        <p><input type="submit" value="Send now"></p>
    </form>
</body>