
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
			PHP array() Function array_change_key_case()
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			

			<?php 
				
				echo "<h3>PHP Associative Array</h3>";
				$person = array(
					"Naeem" 	=> "20",
					"Pranta"	=> "20",
					"Rashed" 	=> "19",
					"Rabin" 	=> "21",
					"Hiya" 		=> "18"
				);

				// Sob golo array lowercase letter / capital letter / uppercase letter korar function

				/* Uppercase Letter Print Function*/
				echo "<h4>Upercase Letter Print</h4>";
				echo "<pre>";
				print_r(array_change_key_case($person, CASE_UPPER)); 
				echo "</pre>";

				/* Lowercase Letter Print Function*/
				echo "<h4>Lowercase Letter Print</h4>";
				echo "<pre>";
				print_r(array_change_key_case($person, CASE_LOWER)); 
				echo "</pre>";
				


				
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