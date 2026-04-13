<?php

//prendo il mio file json, lo leggo e lo trasformo in una stringa in php
$files = file_get_contents('./discs.json');

//prendo la stringa e converto in un array PHP, il true serve per trasformarlo in array e non in un oggetto
$discs = json_decode($files, true);

//creo nuovo array disco prendendo i dati dal form
$newDisc = [
    "artista" => $_POST["artista-disco"],
    "titolo"  => $_POST["titolo-disco"],
    "anno"    => $_POST["anno-disco"],
    "genere"  => $_POST["genere-disco"],
    "cover"   => $_POST["cover-disco"]
];

//aggiungo l'array del disco appena creato alla lista array originale
$discs[] = $newDisc;

//riconverto l'array in un file json
$json_text_updated = json_encode($discs);

//vado a sovradcivere il json originale con quello appena aggiornato
file_put_contents('./discs.json', $json_text_updated);

//reindirizzo l'utente alla pagine di index
header('Location: ./index.php');
