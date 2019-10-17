
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Fundamentals Training</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- Main Part -->
	<div class="php_coding">
		<!-- Header Area -->
		<section class="header_area">
			<h2><?php echo "PHP Array Function"; ?></h2>
		</section>
		<!-- Main Content Area -->
		<section class="main_content">
			<hr>
			PHP Create in Array
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			

			<?php 
				
				echo "<h3>PHP Index Array</h3>";
				$car = array("Volvo", "BMW", "Toyta");
				$length = count($car);
				for ($i = 0; $i < $length; $i++) { 
					echo $car[$i]."<br>";
				}

				echo "<h3>PHP Associative Array</h3>";
				$person = array("Naeem" => "20", "Pranta" => "20", "Rashed" => "19", "Rabin" => "21", "Hiya" => "18");
				foreach ($person as $namekey => $agevalue) {
					echo "Name = ".$namekey.", Age = ".$agevalue."<br>";
				}

				echo "<h3>PHP Multidimensional Array</h3>";
				$cars = array(
					array("BMW", 15, "Nice Cars"),
					array("Volvo", 20, 5),
					array("Saab", 25, 30),
					array("Audi", 21, 40)
				);
				
				for ($row = 0; $row < 4 ; $row++) { 
					echo "<p>Row Number $row</p>";

					echo "<ul>";
						for ($col= 0 ; $col < 3 ; $col++) { 
							echo "<li>".$cars[$row][$col]."</li>";
						}
					echo "</ul>";
				}


				
			 ?>

		</section>
		<!-- Footer Area -->
		<secrtion class="footer_area">
			<h2><?php echo "tmiprogramer.tk"; ?></h2>
			<p style="margin: 0;">&copy; <?php echo date("Y")?> Copyright Tmiprogramer</p>
		</secrtion>
	</div>
</body>
</html>