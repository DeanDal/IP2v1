<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta name="description" content="Integrated Project 2">
	<meta name="keywords" content="Loch, Lomond, Trossachs">
	<meta name="author" content="Pawel Mrozinski">
	<title>Integrated Project 2</title>
</head>
<body>
	<nav class="dropdownmenu">
	  <ul>
		<li><a href="./index.html">Home</a></li>
		<li><a href="./about.php">About</a></li>
		<li><a href="./services.html">Services</a></li>
		<li><a href="./travel.html">Travel</a></li>
		<li><a href="./map.html">Map</a></li>
		<li><a href="./contact.html">Contact Us</a></li>
		<li class="login"><a href="./login.php">Log In</a></li>
	  </ul>
	</nav>
	
	<h1>Admin</h1>
	
	<form action="insert.php" method="post">
		<p>
			<label for="Author">Author:</label>
			<input type="text" name="Author" id="Author">
		</p>
		<p>
			<label for="Content">Content:</label>
			<input type="text" name="Content" id="Content">
		</p>
		<input type="submit" value="Submit">
	</form>
	
</body>
</html>