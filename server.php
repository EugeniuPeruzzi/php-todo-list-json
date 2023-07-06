<?php
    //mi prendo i dati dal file json
    $string = file_get_contents('data/db.json');
    // traduco i dati che siano comprensibili a js e collego questo file a una variabile in js come se fosse l'indirizzo di un API
    $array = json_decode($string, true);
    header('Content-Type: application/json');
    echo json_encode($array);
?>