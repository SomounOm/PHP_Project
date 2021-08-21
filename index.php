<?php
    include_once('partial/header.php');
    
    if(isset($_GET['page'])){
        include_once('partial/navebar.php');
        if($_GET['page'] == "FOODS"){
            include_once('pages/food.php');
        }elseif($_GET['page'] == "ASIAFOOD"){
            include_once('pages/asiafood.php');
        }elseif($_GET['page'] == "ERUOPFOOD"){
            include_once("pages/eruopfood.php");
        }elseif($_GET['page'] == "order"){
            include_once("pages/order.php");
        }else{
            include_once('pages/404.php');
        }
    }else{
        include_once('login.php');
        die();
    }

    include_once('partial/footer.php');
    
?>