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

		<ul>
			<li><strong>Title</strong> <?= $task['title'];?></li>
			<li><strong>Due</strong> <?= $task['due'];?></li>
			<li><strong>Assigned To</strong> <?= $task['assigned_to'];?></li>
			<li><strong>Completed</strong> <?= $task['completed'] ? 'Complete' : 'InComplete';?></li>
		</ul>
	</body>
</html>