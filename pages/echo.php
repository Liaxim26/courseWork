<?php 
session_start();
require ('../users/connection.php');  


$data = $_POST;
$action = $data["action"];
$username = $_SESSION['username'];
$product_id = $_POST['id'];
$user = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");
$row = mysqli_fetch_array($user, MYSQLI_NUM);
$user_id = $row[0];

if ($action == 'add'){
$products = mysqli_query($connection,"SELECT * FROM cart_item WHERE user_id = '$user_id'");
while ($q = $products->fetch_assoc()) {
$product = $q['product_id'];
echo "$product";

$count =  $q['count'];
	if ($product == $product_id) {
		$err++;
	}
}
if (isset($err)) {
	echo "Товар уже в корзине";
} else {
	mysqli_query($connection,"INSERT INTO cart_item (user_id, product_id, count) VALUES ($user_id, $product_id, 1)");
	echo mysql_errno($connection) . ": " . mysql_error($connection) . "\n";
	echo "Товар добавлен в корзину";
}}

if ($action == 'del') {
mysqli_query($connection,"DELETE FROM cart_item WHERE user_id = $user_id AND product_id	 = $product_id");
}



if ($action == 'up') {
$products = mysqli_query($connection,"SELECT * FROM cart_item WHERE user_id = $user_id AND product_id = $product_id");
while ($q = $products->fetch_assoc()) {
$product = $q['product_id'];
$count =  $q['count']+1;
}
mysqli_query($connection,"UPDATE cart_item SET count = $count WHERE user_id = $user_id AND product_id = $product_id");
}


if ($action == 'down') {
$products = mysqli_query($connection,"SELECT * FROM cart_item WHERE user_id = $user_id AND product_id = $product_id");
while ($q = $products->fetch_assoc()) {
$product = $q['product_id'];
$count =  $q['count']-1;
}
mysqli_query($connection,"UPDATE cart_item SET count = $count WHERE user_id = $user_id AND product_id = $product_id");}
if($count == 0){
mysqli_query($connection,"DELETE FROM cart_item WHERE user_id = $user_id AND product_id	 = $product_id");
}
?>

