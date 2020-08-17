<?php require "../blocks/header.php" ?>
<link rel="stylesheet" type="text/css" href="style.css">



<?php 
require ('connection.php');

if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		$smsg = "Регистрация прошла успешно";
	} else {
		$fsmsg = "Ошибка";
	}

}


 ?>	

<section>
	<div class="registration">
	<h2 align="center">Регистация</h2>
	<div class="reg_menu ">
		<a href="../index.php">Главная</a> -
		<a href="login.php">Авторизация</a> -
		<a href="#">Регистрация</a>
	</div>
	</div>
	<div class="form-reg">
		<form class="form-signin" method="POST">

			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php }?>
			<?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php }?>

			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="email" name="email" class="form-control" placeholder="Email" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-primary btn-block" type="submit">Зарегистрироваться</button>
		</form>
	</div>
</section>



<?php require "../blocks/footer.php" ?>


