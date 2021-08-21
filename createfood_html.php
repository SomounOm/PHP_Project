<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="createfood_model.php" method="POST"​ enctype="multipart/form-data"​​​​​​​​>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="foodname..." name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="price...." name="price">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="image..." name="file">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="country..." name="country">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="category..." name="category_id">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>

