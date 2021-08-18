<?php
    function db(){
        return new mysqli('localhost','root','','project');

    }

    function getfood(){
        return db()->query("SELECT * FROM foods ORDER BY food_id DESC");


    }
    function deletefood($id){
        return db()->query("DELETE FROM foods WHERE food_id = $id");
       
    }
    function createfood($value){
        $name = $value['name'];
        $price = $value['price'];
        $image = $value['image'];
        $country = $value['country'];
        $category_id = $value['category_id'];
        return db()->query("INSERT INTO foods(name, price, image, country, category_id) VALUES ('$name', '$price','$image','$country','$category_id')");  

    }
    function getfoodById($id){
        return db()->query("SELECT * FROM foods WHERE food_id = $id");

    } 

    function updatefood($value) {
        print_r($value);
        $name = $value['name'];
        $price = $value['price'];
        $image = $value['image'];
        $country = $value['country'];
        $category_id = $value['category_id'];
        $id = $value['food_id'];
        return db()->query("UPDATE foods SET name= '$name', price = '$price', image = '$image', country = '$country', category_id = '$category_id' WHERE food_id =$id");
      }
     