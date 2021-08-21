<div class="container">
    <div class="d-flex justify-content-end ">
        <form class="form-inline my-2 my-lg-0 mr-3" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name = "search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a href="createfood_html.php" class="btn btn-primary">Add+</a>
    </div>
   
    <div class="row mt-3">
    <?php
            require_once('database/database.php');
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $data = found($_POST);
             
            } else {
                $data = getfood();
            }
            
            foreach($data as $value):
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
            <div class="card mb-3 hvr-grow">
                <img class="card-img" src="image/<?= $value['image']?>" alt="" style="width:100%; height:230px;">
                <div class="card-body">
                    <h5 class="card-title">Name: <?= $value['name']?></h5>
                    <p class="card-text">Price: <?= $value['price']?></p>
                    <p class="card-text">Country: <?= $value['country']?></p>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="deletefood_model.php?id=<?= $value['food_id']?>" class="btn btn-danger btn-sm mb-3 mr-3"><i class="fas fa-trash"></i></i></a>
                    <a href="updatefood_html.php?id=<?= $value['food_id']?>" class="btn btn-primary btn-sm mb-3 mr-3"><i class="fas fa-pencil-alt"></i></a>
                </div>
            </div> 
        </div>
        <?php endforeach; ?>
    </div>
</div>