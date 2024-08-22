<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.4/axios.min.js" integrity="sha512-6VJrgykcg/InSIutW2biLwA1Wyq+7bZmMivHw19fI+ycW0jIjsadm8wKQQLlfv3YUS4owfMDlZU38NtaAK6fSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="container-md text-center mt-5">

            <div id="app">

                <h1>{{title}}</h1>

                <div class="ms-container">
                    <ul>
                        <li v-for="(task, index) in list" class="row flex-nowrap justify-content-between gx-0">
                            <div class="col-auto" :class="task.status ? 'done' : '' ">
                                <span>{{task.text}}</span>
                            </div>
                            
                            <div class="col-auto">
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </div>
                            
                        </li>

                    </ul>
                </div>

            </div>
           
        </div>
    </div>
    
    <script type="text/javascript" src="main.js"></script>
</body>
</html>