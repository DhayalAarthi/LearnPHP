<!DOCTYPE HTML>
<html>
	<head> 
		<title>Document</title> 
	</head>
	<body>
		<ul>
			<?php
				foreach ($person as $feature => $value) {
					echo '<li><strong>'.$feature.'</strong> : '. $value .'</li>';		
				}
			?>
		</ul>
	</body>
</html>