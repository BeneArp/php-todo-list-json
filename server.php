<?php 

    // salvo il file json come stringa
    $string = file_get_contents('todo-list.json');

    // var_dump($string);

    // trasformo la stringa in elemento php
    $list = json_decode($string);

    // var_dump($list);

    if(isset($_POST['text'])){

        $newTask = [
            "text" => $_POST['text'],
            "status" => false
        ];
        
        
        $list[] = $newTask;
        file_put_contents('todo-list.json', json_encode($list));
    }

    

    header('Content-Type: application/json');
    echo json_encode($list);