<?php

require_once 'Speedometer.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-6</title>
</head>
<body>
    <?php

        echo "Nombres de Kilomètres : 10 = " .  Speedometer::convertKmToMiles(10) . " miles.<br><br>";
        echo "Nombres de miles : 10 = " .  Speedometer::convertMilesToKm(10) . " kilomètres.";
    ?>
</body>
</html>