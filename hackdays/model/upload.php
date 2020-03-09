<?php
require_once 'model/crud.php';

$btn = filter_input(INPUT_POST, 'send');

if ($btn == 'Envoyer') {
    $totalSize = 0;
    $MAX_SIZE = 70000000;

    foreach ($_FILES['docPost']['size'] as $key => $value) {
        $totalSize += $value;
    }
    if ($totalSize > $MAX_SIZE) {
        header('Location: ?action=upload');
        exit;
    }

    try {
        if ($totalSize > 0) {
            // requête vers le server pour sauver le fichier
        }
    } catch (\Throwable $th) {
        //throw $th;
    }

}