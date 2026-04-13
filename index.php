<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
</head>
<body>
    <h1>Lista Dischi</h1>

    <ul>
        <?php
    foreach ($discs as $disc) {
        ?> <hr> <?php
        foreach ($disc as $date) {
            echo "<li>$date </li>";
        };
    };
?>
    </ul>
</body>
</html>