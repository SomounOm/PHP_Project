<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isDeleted = deletefood($id);
    if ($isDeleted){
        header('Location: http://localhost/PHP_project/?page=FOODS');
    }