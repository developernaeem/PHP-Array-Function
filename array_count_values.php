
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
			PHP array() Function array_count_values()
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			
			<h3>PHP Array Count Values</h3>

			<?php 
				
				$name = array("Naeem", "Pranta", "Rashed", "Hiya", "Robin", "Naeem", "Naeem", "Rashed", "Pranta");
				$department = array("Computer Science", "Maths", "Physics", "Bangla", "Civil", "Maths", "Maths", "Physics", "Physics");

				

				print("<pre>");
				// print_r(array_count_values($name));
				print_r(array_count_values($department));
				print("</pre>");
				


				
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