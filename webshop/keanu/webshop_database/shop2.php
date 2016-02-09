<!DOCTYPE html>
<?php include ("connection.php"); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Metal</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="shop2.css">
	</head>
	<body>
		<div class="pagewrapper">
		<header></header>
		<nav>
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="shop1.html">Hardstyle</a></li>
				<li><a href="shop2.html">Metal</a></li>
				<li><a href="cart.html">Winkelwagen</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="main-content">
			<h1>Shopping Cart</h1>
			<br>
			<div class="cart">
				
				<section id="main-section">
					<?php
							$sql = "SELECT `id`, `image`, `name`, `desc`, `price`, `quantity` FROM cart WHERE `quantity` > '0'";
						$result = $conn->query($sql);
						if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						echo '<img src="img/albums/'.$row['image'].'" width="200" height="200" /><br/> <span id="name">'.$row['name'].'</span><br/>'.$row['desc']. '<br>' .$row['price'].  '<br><a href="shop2.php?add='.$row['id'].'">aan winkelwagen toevoegen</a><br><br>';
					}

					} else {
					echo "De vooraad is helaas op";
					}
					mysqli_close($conn);
					?>
				</section>
				<aside id="side">
					<h2>Jouw winkelwagen</h2>
					<?php 
						if(isset($_GET['add']) && !empty($_GET['add'])) {
							$id = $_GET['add'];
							echo $id;
						}
					 ?>
				</aside>
			</div>
		</div>
	<footer></footer>
</div>
</body>
</html>