<?php 

    // salvo il file json come stringa
    $string = file_get_contents('todo-list.json');

    // var_dump($string);

    // trasformo la stringa in elemento php
    $list = json_decode($string);

    // var_dump($list);


    header('Content-Type: application/json');
    echo json_encode($list);