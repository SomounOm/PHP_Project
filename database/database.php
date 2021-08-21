<?php

    function db(){
        return new mysqli('localhost','root','','project');

    }
// food
    function getfood(){
        return db()->query("SELECT * FROM foods ORDER BY food_id DESC");


    }function getasia(){
        return db()->query("SELECT * FROM foods WHERE category_id = 1");


    }

    function geteroup(){
        return db()->query("SELECT * FROM foods WHERE category_id = 2");


    }


    function deletefood($id){
        return db()->query("DELETE FROM foods WHERE food_id = $id");
       
    }
    function createfood($value){

        $filename = $_FILES['file']['name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        // set the directory
        $dir = "image/";
        

        move_uploaded_file($tmp_name,$dir.$filename);
        
        $name = $value['name'];
        $price = $value['price'];
        $country = $value['country'];
        $category_id = $value['category_id'];
        return db()->query("INSERT INTO foods(name, price, image, country, category_id) VALUES ('$name', '$price','$filename','$country','$category_id')");  

    }
    function getfoodById($id){
        return db()->query("SELECT * FROM foods WHERE food_id = $id");

    } 

    function updatefood($value) {
        $name = $value['name'];
        $price = $value['price'];
        $country = $value['country'];
        $category_id = $value['category_id'];
        $id = $value['food_id'];
        return db()->query("UPDATE foods SET name= '$name', price = '$price', country = '$country', category_id = '$category_id' WHERE food_id =$id");
      }


// order 
    function getorder(){
        return db()->query("SELECT * FROM orders ORDER BY order_id DESC");


    }
    function deleteorder($id){
        return db()->query("DELETE FROM orders WHERE orders_id = $id");
    
    }
    function submitorder($value){
        $order_name = $value['order_name'];
        $profile = $value['profile'];
        $email = $value['email'];
        $address = $value['address'];
        $foodname = $value['foodname'];
        return db()->query("INSERT INTO orders(order_name, profile, email, address, foodname) VALUES ('$order_name', '$profile','$email','$address','$foodname')");  

    }
   
    function getallfood(){
        return db()->query("SELECT * FROM foods ORDER BY food_id DESC");


    }

    // Login

    function login($value) {
        $username = $value['username'];
        $password = $value['password'];
        $allUser = getAll();

        $isValid = false;
        foreach($allUser as $user) {
            if($user['password'] == $password and $user['username'] == $username) {
                $isValid = true;
            }
        }
        return $isValid;
    }

    // Get all user

    function getAll() {
        return db()->query("SELECT * FROM users");
    }

     
    //search
    function found($value){  
    
        $result = $value['search'];
        return db()->query("SELECT * FROM foods WHERE name like '%$result%' ");
    }

    //register
    function createtuser($value){
        $filename = $_FILES['file']['name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        // set the directory
        $dir = "image/";
    
        move_uploaded_file($tmp_name,$dir.$filename);
        
        $username = $value['username'];
        $email = $value['email'];
        $password = $value['password'];
        return db()->query("INSERT INTO users(username, email, password) VALUES ('$username', '$email','$filename',)");  

       
    }
    