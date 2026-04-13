<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>php-dischi-json</title>
</head>
<body>
    <header>
        <img src="./img/vinile.png" alt="vinile">
        <h1 class="header-title">Our selection of records:</h1>
    </header>

    <main>
        <div class="container">
  <?php
foreach ($discs as $disc) {
    ?>
    <div class="card">
        <img src="<?= $disc['cover'] ?>" alt="cover" >
        <h2><?= $disc['artista'] ?></h2>
        <p><?= $disc['titolo'] ?></p>
        <p><?= $disc['anno'] ?></p>
        <p><?= $disc['genere'] ?></p>
    </div>
<?php
}
?>
        </div>
    </main>
</body>
</html>