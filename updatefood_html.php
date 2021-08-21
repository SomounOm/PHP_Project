<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navebar.php'); ?>
<div class="container ">
    <?php

        require_once('database/database.php');
        $id = $_GET['id'];
        $data = getfoodById($id);
        foreach ($data as $value):
    ?>
    <form action="updatefood_model.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?= $value['food_id'] ?>" name="food_id">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="foodname..." name="name" value="<?=$value['name']?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="price...." name="price" value="<?=$value['price']?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="country..." name="country" value="<?=$value['country']?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="category..." name="category_id" value="<?=$value['category_id']?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
    </form>
    <?php endforeach;?>
    </div>
<?php require_once('partial/footer.php'); ?>
