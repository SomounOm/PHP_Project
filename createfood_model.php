<?php
require_once('database/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $iscreated = createfood($_POST);
    if ($iscreated){
        header('Location:http://localhost/PHP_project/?page=FOODS ');
    }

}