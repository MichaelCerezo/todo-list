<!DOCTYPE html>
<html>
<head>
	<title>My To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
		<div>
			<ul>
				<?php require ("includes/connect.php") ?>
			</ul>		
		</div>
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
</html>