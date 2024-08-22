<?php 

    // salvo il file json come stringa
    $string = file_get_contents('todo-list.json');

    // var_dump($string);

    // trasformo la stringa in elemento php
    $list = json_decode($string);

    // var_dump($list);


    // // restituisco il json manipolato
    // header('Content-Type: application/json');
    // echo json_encode($list);

    header('Content-Type: application/json');
    $listEncode = json_encode($list);
    var_dump($listEncode);