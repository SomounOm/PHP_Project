<?php include_once('partial/header.php')?>
<div class="container mt-5">
    <?php 
        require_once('database/database.php');
        $message_error = "";
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $isValid = createUser($_POST);
            if($isValid) {
                header("Location:http://localhost/PHP_project/login.php");
            }
        }
    ?>          
    <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box " class="col-md-12 bg-warning">
                    <form id="login-form" class="form" action="" method="post" enctype="multipart/form-data">
                        <h3 class="text-center text-dark">Register</h3>
                        <small class="text-danger text-center"></small>
                        <div class="form-group">
                            <label for="username" class="text-dark">Username:</label><br>
                            <input type="text" name="username"  class="form-control" placeholder="Username " >
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Email:</label><br>
                            <input type="email" name="email"  class="form-control" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Password:</label><br>
                            <input type="password" name="password"  class="form-control" placeholder="Password">
                        </div>
                       
                        <div class="form-group">
                            <label for="password" class="text-dark">Profile:</label><br>
                            <input type="file" name="file"  class="form-control" placeholder="file">
                        </div>
                        <div class="form-group text-center">
                            <input type="register" name="register" class="btn btn-info btn-md text-dark" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
