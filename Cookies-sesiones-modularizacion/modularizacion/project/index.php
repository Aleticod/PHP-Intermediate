<?php 


require_once "Logic/CreateMichis.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $mrmichi->getName() ?> dice <?= $mrmichi->sayMeow() ?></li>
        <li><?= $michijacinto->getName() ?> dice <?= $michijacinto->sayMeow() ?></li>
        <li><?= $michisansio->getName() ?> dice <?= $michisansio->sayMeow() ?></li>
    </ul>
</body>
</html>