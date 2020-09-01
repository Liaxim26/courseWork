<?php 
session_start();
require "../blocks/header.php";
require ('../users/connection.php');  ?>

<link rel="stylesheet" type="text/css" href="pagesstyle.css">


<section>

	<div class="registration">
		<h2 align="center">Жидкости</h2>
		<div class="reg_menu">
			<a href="../index.php">Главная</a> -
			<a href="liquid.php">Жидкости</a> 
		</div>
	</div>
<div class="app">
    <div class="list products-out">
<?php 
	$liquid = mysqli_query($connection,"SELECT * FROM product WHERE idCategory = 4");
	while ($product = $liquid->fetch_assoc()) {
		echo '
		<div class="card">
      		<div class="card-img">  
        	<a href="#"><img align="center"
        	src="'.$product['img'].'"
        	alt="'.$product['img'].'"></a>
      	</div>
        	<h5>'.$product['name'].'</h5>
        	<p>'.$product['price'].' руб./шт</p>
        	<button class="btn-cart btn btn-info btn-block" onclick="addToCart('.$product['id'].')" type="submit" data-id="'.$product['id'].'">Купить</button>
    	</div>
		';
	}

/*	<div class="app">
    <div class="list products-out"></div>
	</div>
*/ ?>
	</div>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/script.js"></script>

</section>

<?php require "../blocks/footer.php" ?>
