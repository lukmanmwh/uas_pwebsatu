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
				<li><a href="index.php">HOME</a></li>
				<li><a href="BELANJA.php">BELANJA</a></li>
				<li class="active"><a href="KERANJANG.html"><i class="fas fa-shopping-basket"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>HOME / KERANJANG</p>
		</div>
	</section>

	<!-- recomendasi -->
	<div class="info">
		<h3>Keranjang anda kosong silahkan kembali <a href="BELANJA.php"><u>BELANJA</u></a></h3>
	</div>

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