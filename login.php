<?php include_once('partial/header.php')?>
<div class="container mt-5 ">
    <?php 
        require_once('database/database.php');
        $message_error = "";
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $isValid = login($_POST);
            if($isValid) {
                header("Location: http://localhost/PHP_project/?page=FOODS");
            } else {
                $message_error = "Incorrect username or password";
            }
        }
    ?>
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box " class="col-md-12 bg-dark">
                <form id="login-form" class="form" action="" method="post">
                    <h3 class="text-center text-info">Login</h3>
                    <small class="text-danger text-center"><?=$message_error?></small>
                    <div class="form-group">
                        <label for="username" class="text-info">Username:</label><br>
                        <input type="text" name="username"  class="form-control" placeholder="Username ">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="password" name="password"  class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                    </div>
                    <div  class="form-group text-center mb-4">
                        <a href="register.php" class="text-info  ">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>