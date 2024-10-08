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


    if(isset($_POST['indexDelate'])){
        $index = $_POST['indexDelate'];
        array_splice($list, $index, 1);

        file_put_contents('todo-list.json', json_encode($list));
    }

    if(isset($_POST['indexToChange'])){
        $index = $_POST['indexToChange'];
        $list[$index]->status = !$list[$index]->status;

        file_put_contents('todo-list.json', json_encode($list));
    }

    header('Content-Type: application/json');
    echo json_encode($list);