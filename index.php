<?php
	session_start();
	require_once('controller/controller.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Camagru</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	<div id="page">
		<div class="top-container">
		<h1 id="header_text">PASSION.<br>DENDROPHILE.</h1>
		</div>
		<div class="header" id="stickyHeader">
			<ul class="navbar">
				<a href="?action=add" class="navlink"><i class="fas fa-camera-retro"></i></a>
				<i class="camagru_title"><a href="index.php" class="camagru_title"><i class="fas fa-tree"></i><span class="gru"></a></span></i>
				<a href="?action=userpage" class="navlink"><i class="far fa-user-circle"></i></a>
				<?php if (isset($_SESSION['user'])) { ?>
				<a href="?action=logout" class="navlink"><i class="fas fa-sign-out-alt"></i></a> <?php } ?> 
			</ul>
		</div>
		<div class="content">
			<?php $controller = new Controller();
			$controller->loadModel(); ?>
		</div>	
		<div class="footer">
			&copy; tmervin 2018
		</div>
	</div>
	<script src="public/js/sticky_header.js"></script>
</body>
</html>