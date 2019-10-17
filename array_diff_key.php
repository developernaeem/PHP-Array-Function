
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
			PHP array() Function array_diff_key()
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			
			<h3>PHP Array Difference</h3>

			<?php 
				
				$array_one = array(
					"a" => "red",
					"b" => "green",
					"c" => "blue",
					"d" => "yellow",
					"e" => "black"

				);
				
				$array_tow = array(
					"a" => "red",
					"d" => "green",
					"c" => "blue"

				);

				$difference = array_diff_key($array_one, $array_tow);

				print("<pre>");
				print_r($difference);
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