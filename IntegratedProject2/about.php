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
		<li><a href="./everythinglochlomond.html">Loch Lomond</a></li>
		<li><a href="./contact.html">Tools</a></li>
		<li class="login"><a href="./login.php">Log In</a></li>
	  </ul>
	</nav>
	
	<div class="about">
		<h1>About</h1> </br></br></br>
		<p>Loch Lomond and The Trossachs is a wonderful national park that offers the great outdoors to the marvellous Scottish inhabitants and visitors alike. Founded in 2002, the national park encompasses around 1865km2 of land which crosses the Highland Boundary Fault Line showing off that wonderful scenery Scotland is renowned for.</p>
		<p>Located in the west of Scotland it is within touching distance of the city of Glasgow. With the West Highland Way starting at the foot of Milingavie and with its vast size Loch Lomand is open to everyone living among the busy central belt with a mere hours car journey.</p>
		<p>Originally created through the process of glacial erosion the national park boast splendid scenery, biodiversity and oppertunites to become apart of nature. Dominated by Corries, U-Shaped Valleys, Aretes and Pyramidal Peaks the area is a beautiful place to learn, study and grow.</p>
		<p>There are, ontop of the natural beauty of the area, some wonderful recreation facilities for everyone to enjoy. Loch Lomand boasts a fantastic golf course where the Scottish Open is held regularly at Rossdhu House. Many parktakers flock there every year to catch a glimpse of famous golfers.</p>

		<h2>Lochs</h2>
		<p>The Loch Lomond itself is 24 miles itself and comes second in size (behind Loch Ness). It is a freshwater loch renowned for the many islands and activities partaken on it. Imchurrin, one of the islands, is the largest fresh water island in the entirety of the UK. Inchconnachan is home to wild Wallabies. The Loch is so stunning there are many famous folk songs written about it such as ‘The Bonnie Banks o’ Loch Lomond’. Loch Long and its sea loch counterparts offer unbelievable diversity in wildlife coming in from the sea. This offers range and interesting dynamics to the vast area. With all together 22 lochs to choose from the national park it will be easy to get on board with the water activities and ride the wave that is the best place to visit in all of Scotland</p>

		<h2>Mountains</h2>

		<p>Spiralling hills and incredible heights dominates the landscape as it draws in viewers from afar. Backpackers and tourists alike enjoy the splendid mountains of Ben Lomond, The Cobbler, Ben Lui and the other 19 munros crafting breathtaking views and features of glaciation that will mesmorise, entrance and inspire.</p>
	</div>

	<div class="news">
		<h1>News</h1> </br></br></br>
			 
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "passwd";
			$dbname = "ip2";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM author ORDER BY AuthorID DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p><strong>Name: </strong>" . $row["Author"]. "   -   <strong>Date: </strong>" . $row["Date"] . "</br>" . $row["Content"]. "</p>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
			?>
		
	</div>
	
</body>
</html>