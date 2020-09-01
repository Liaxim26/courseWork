<?php require "../blocks/header.php";
require ('../users/connection.php');?>

<link rel="stylesheet" type="text/css" href="pagesstyle.css">
<section>

	<div class="registration">
		<h2 align="center">Корзина</h2>
		<div class="reg_menu">
			<a href="../index.php">Главная</a> -
			<a href="podsystem.php">Корзина</a> 
		</div>
	</div>

<table class="main-cart" align="center">
 <tr><th></th>
 	<th>Наименование</th>
 	<th>Цена</th>
 	<th></th>
 	<th>Количество</th>
 	<th></th>
 	<th>Сумма</th></tr><br>
 	<th></th>
<?php 

$username = $_SESSION['username'];
$user = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");
$row = mysqli_fetch_array($user, MYSQLI_NUM);
$user_id = $row[0];
$products = mysqli_query($connection,"SELECT * FROM cart_item WHERE user_id = '$user_id'");

while ($q = $products->fetch_assoc()) {
$product = $q['product_id'];
$count =  $q['count'];
$cart = mysqli_query($connection,"SELECT * FROM product WHERE id = $product");
	while ($product = $cart->fetch_assoc()) {
		echo '
			<div class="one-cart">	
			<tr><td><a href="#"><img align="center"
            src="'.$product['img'].'"
            alt="'.$product['name'].'"></a></td>
            <td><h7>'.$product['name'].'</h7></td>
            <td><p>'.$product['price'].' руб./шт</p></td>
            <td><button data-id="${id}" onclick="countDown('.$product['id'].')" class="del-goods">-</button></td>
            <td><p align="center">'.$count.'</p></td>
            <td><button data-id="${id}" onclick="countUp('.$product['id'].')" class="del-goods">+</button></td>
            <td><p>'.$product['price']*$count.' руб</p></td>
            <td><button data-id="${id}" onclick="delItem('.$product['id'].')" class="del-goods">X</button></td></tr>
            </div>
		';
		$totalPrice += $product['price']*$count;
	}
}

/* 
<button data-id="${id}" class="del-goods">-</button>
<p align="center">'.$count.'</p>            
<button data-id="${id}" class="del-goods">+</button>
            
*/
 ?>
</table> 	

<h2 align="center">Итого к оплате: <?php echo "$totalPrice"; ?> </h2>





<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/cart.js"></script>
</section>

<?php require "../blocks/footer.php" ?>
