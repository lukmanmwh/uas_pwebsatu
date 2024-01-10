<!DOCTYPE html>
<html>
<head>
	<meta charset="uf-8">
	<meta charset="viewport" content="width=device-width, intial-scale=1">
	<title>Lukman Store</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php">L'Thrifts</a></h1>
			<ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="BELANJA.php">BELANJA</i></a></li>
				<li><a href="KERANJANG.php"><i class="fas fa-shopping-basket"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2><a href="BELANJA.php">WELCOME TO MY STORE</a></h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Halo! Selamat datang di L'Thrifts<strong> Kami menyediakan berbagai macam fashion mulai dari pakaian pria hingga wanita</strong>, Kamu bisa beli produk dari L'Thrifts dengan aman dan mudah. Temukan outfit terbaikmu di sini!</p>
		</div>
	</section>

	<!-- contact us -->
	<section class="service">
		<div class="container">
			<h3>CONTACT US</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fab fa-facebook"></i></div>
					<h4>FACEBOOK</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fab fa-youtube"></i></div>
					<h4>YOUTUBE</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fab fa-instagram"></i></div>
					<h4>INSTAGRAM</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-globe"></i></div>
					<h4>EMAIL</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Created by : Lukmanul Hakim - 22040037</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>