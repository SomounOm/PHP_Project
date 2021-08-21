
<div class="container p-1">
	<div class="d-flex justify-content-end p-2 ">
			<a href="order/submitorder_html.php" class="btn btn-primary">ORDER+</a>
	</div>
		
		<div class="row mt-3">
			<?php
				require_once('database/database.php');
				$data = getorder();
				foreach($data as $value):
			?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
            <div class="card mb-3 hvr-grow">
				<div class="img text-center mt-4">
					<img class=" rounded-circle " src="<?= $value['profile']?>" alt="" style="width:37%; height:130px;">
					<h4>PROFILE</h4>
				</div>
                <div class="card-body">
                    <h5 class="card-title">Name : <?= $value['order_name']?> </h5>
                    <p class="card-text">Address : <?= $value['address']?> </p>
                    <p class="card-text">Email : <?= $value['email']?></p>
                    <p class="card-text">Date : <?= $value['date']?></p>
                    <p class="card-text">Food name : <?= $value['foodname']?></p>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="" class="btn btn-danger btn-sm mb-3 mr-3"><i class="fas fa-trash"></i></i></a>
                    <a href="" class="btn btn-primary btn-sm mb-3 mr-3"><i class="fas fa-pencil-alt"></i></a>
                </div>
            </div> 
        </div>
        <?php endforeach; ?>
    </div>
</div>