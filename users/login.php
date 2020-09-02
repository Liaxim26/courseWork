<?php 
session_start();
require ('connection.php'); 
?>	
<link rel="stylesheet" type="text/css" href="style.css">
<?php require "../blocks/header.php" ?>
<section>
	<div class="registration">
	<h2 align="center">Авторизация</h2>
	<div class="reg_menu ">
		<a href="../index.php">Главная</a> -
		<a href="#">Авторизация</a> -
		<a href="registration.php">Регистрация</a>
		<p 	class="reg_menu">Авторизировавшись, вы сможете управлять своими личными данными, следить за состоянием заказов.</p>
	</div>
	</div>
	<div class="form-reg">
		<form class="form-signin" method="POST">
			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-primary btn-block" type="submit">Вход</button>
			<a href="registration.php">Зарегистрироваться?</a>
		</form>
	</div>
</section>
<?php 
if (isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'"; 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['username'] = $username;
	} else {
		$fsmsg = "Ошибка";
	}
} 
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	?><div class="info-login alert alert-success" role="alert"> Привет <?php 	echo $username; ?>, Ты авторизировался!</div><?php	
} ?>

<?php require "../blocks/footer.php" ?>
