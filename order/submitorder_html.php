<?php include_once('../partial/header.php')?>
<div class="container">
    <form class="group mt-5 border border-dark p-4 mb-4 rounded" action="submitorder_model.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Profile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter profile" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <textarea type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">date</label>
                    <textarea type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter date" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">food name</label>
                    <textarea type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter food name" required></textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>