<?php

//prendo il mio file json, lo leggo e lo trasformo in una stringa in php
$files = file_get_contents('./discs.json');

//prendo la stringa e converto in un array PHP, il true serve per trasformarlo in array e non in un oggetto
$discs = json_decode($files, true);
