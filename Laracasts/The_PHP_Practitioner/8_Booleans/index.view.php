<!DOCTYPE HTML>
<html>
	<head> 
		<title>Document</title> 
	</head>
	<body>

		<h1>Tasks for the day </h1>
		<ul>
			<?php foreach ($task as $heading => $value) {
				echo '<li><strong>'.ucwords($heading).'</strong>: '.$value.'</li>';
			} ?>
		</ul>
	</body>
</html>