<?php

    $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'testajax');
    if ($connection == false) {
        echo 'Не удалось подключится в БД<br>';
        echo mysqli_connect_error();
        exit();
    }
    //php://input является потоком только для чтения, который позволяет вам читать необработанные данные из тела запроса.
    // php://input недоступен с типом содержимого enctype="multipart/form-data".
    $value = json_decode(file_get_contents('php://input'));
    $value = (array) $value;
    $email = $value['email'];
    $query_post = "SELECT * FROM `datausers` WHERE `email_users`='$email'";
    $query_get = "SELECT * FROM `datausers`";




    $result = mysqli_query($connection, $query_get);
    $data_user = mysqli_fetch_assoc($result);
    $data_user = json_encode($data_user);
    echo $data_user;



