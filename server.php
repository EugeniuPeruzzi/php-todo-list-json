<?php
    //mi prendo i dati dal file json
    $string = file_get_contents('data/db.json');
    // traduco i dati che siano comprensibili a js e collego questo file a una variabile in js come se fosse l'indirizzo di un API
    $array = json_decode($string, true);


    // se il dato che arriva dal post di js e setato 
    if(isset($_POST['newObj']) && ($_POST['newObj']['text'] !== '')){
        //mi crei un nuovo array con i valori dati 
        $newTodo= [
            "text" => $_POST['newObj']['text'],
            "done" => false
        ];
        // pusho l'array newTodo in $array
        array_push($array, $newTodo);
        // con encode lo converto da dato php a dato js
        $encoded = json_encode($array);
        // inserisco il contenuto nel data base json gia convertito 
        file_put_contents('data/db.json' , $encoded);
    }

    if(isset($_POST['deleteData'])){
        $delArray = $_POST['deleteData'];
        
        array_splice($array, $delArray , 1);
        file_put_contents('data/db.json' , json_encode($array));
    }

    header('Content-Type: application/json');
    echo json_encode($array);
?>