<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" title="style1" media="screen,tv,projection, handled, print" />
	<title>css based project</title>

<body><!DOCTYPE html>
	<html>
	<!--today we are on 19th/03/2024 BIT GROUP A-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css" title="style1" media="screen,tv,projection,handled,print" />
		<title>css based project</title>
		
	</head>
	<body>
	<header>
		<nav>
		<div class="logo">
            <p>Library Management Website</p>
        </div>
			<ul>
				<li><a href="index.php">Home</a></li>
			<li><a href="author.php">Author</a></li>
			<li><a href="book.php">Book</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="notice.php">Notice</a></li>
			<li><a href="publisher.php">Publisher</a></li>
				<li class="dropdown">
					<a href="#">Settings</a>
					<div class="dropdown-contents">
						<a href="login.php">Login</a>
						<a href="register.php">Register</a>
						<a href="logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	<center>
	<section>
		<h2>Authors</h2>
		<div class="container">
		<table>
			<thead>
				<tr>
				    <th>bookid</th>
				    <th>title</th>
				    <th>author</th>
				    <th>subject</th>
				    <th>publisher</th>
				    <th>category</th>
				    <th>isbn</th>
				    <th>edition</th>
				    <th>shelfNo</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Connect to database
				$conn = mysqli_connect("localhost", "root", "", "librarymanagement");
				
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				// Fetch data from database
				$sql = "SELECT * FROM book";
				$result = mysqli_query($conn, $sql);
				
				// Display data
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["bookid"] . "</td>";
						echo "<td>" . $row["title"] . "</td>";
						echo "<td>" . $row["author"] . "</td>";
						echo "<td>" . $row["subject"] . "</td>";
						echo "<td>" . $row["publisher"] . "</td>";
						echo "<td>" . $row["category"] . "</td>";
						echo "<td>" . $row["isbn"] . "</td>";
						echo "<td>" . $row["edition"] . "</td>";
						echo "<td>" . $row["shelfNo"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data available</td></tr>";
				}
				
				// Close connection
				mysqli_close($conn);
				?>
			</tbody>
		</table>
			</div>
	
	<section><p>All the information about payments made by our clients can be found inside the database above...</p>
	<p>To insert or edit your data, use the action column or <a href="contact.php">Contact us</a></p></section>
	</center>
	<footer>
	<p>&copy;copyright2024 <a href="faqs.php">FAQs</a> | <a href="terms.php">Terms of service</a> | <a href="terms.php">Privacy policy</a> | <a href="contact.php">Contact us</a></p>
	</footer>
	</section>
	</body>
	</html>
	
