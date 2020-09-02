<?php 
session_start();
require "../blocks/header.php";
require ('../users/connection.php');  ?>

<link rel="stylesheet" type="text/css" href="pagesstyle.css">


<section>

	<div class="registration">
		<h2 align="center">Поиск</h2>
		<div class="reg_menu">
			<a href="../index.php">Главная</a> -
			<a href="liquid.php">Поиск</a> 
		</div>
	</div>
<div class="app">
    <div class="list products-out">
	<?php 
		    	if (isset($_POST['search'])) {
		    		$search = $_POST['search'];
		    		$query = mysqli_query($connection, "SELECT * FROM `product` WHERE `name` LIKE '%$search%'");
		    		while ($product = mysqli_fetch_assoc($query)){
		    			echo'
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
				}?>
	</div>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/script.js"></script>

</section>

<?php require "../blocks/footer.php" ?>
