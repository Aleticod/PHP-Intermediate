 
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
        <li><?= $mrmichi->getName() ?> fue adoptado <?= $mrmichi_adopted->getAdoptedBy() ?></li>
        <li><?= $michijacinto->getName() ?> fue adoptado <?= $michijacinto_adopted->getAdoptedBy() ?></li>
        <li><?= $michisansio->getName() ?> fue adoptado <?= $michisansio_adopted->getAdoptedBy() ?></li>
    </ul>
</body>
</html>