<!DOCTYPE HTML>
<html>
	<head> 
		<title>Document</title> 
		<style>
			header{
				background-color: #e3e3e3;
				padding: 2em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>
				<?php 
					// $greeting = 'Hello World';
					// echo $greeting;

					// http://localhost:8888/Laracasts/The_PHP_Practitioner/PHPHTML.php?name=Dhayal
					// $name = $_GET['name'];
					// echo $name;

					// echo 'Hello '. $_GET['name'];

					/*
						Behalf of 
						<?php echo 'Hello World'; ?>
						we can use
						<?= 'Hello World'; ?>
					*/

					echo 'Hello '. htmlspecialchars($_GET['name']); // Sanitiser 
				?>
			</h1>
		</header>
	</body>
</html>