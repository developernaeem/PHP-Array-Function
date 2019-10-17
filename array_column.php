
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
			PHP array() Function array_column()
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			
			<h3>PHP Array Column</h3>

			<?php 
				
				$name = array(
					array(
						'id' 			=> '200',
						'first_name' 	=> 'AB',
						'last_name' 	=> 'Naeem'
					),
					array(
						'id' 			=> '201',
						'first_name' 	=> 'Pranta',
						'last_name' 	=> 'Ray'
					),
					array(
						'id' 			=> '202',
						'first_name' 	=> 'Rashdul',
						'last_name' 	=> 'Islam'
					)
				);
				
				/* Frist Name Print */
				echo "<h4>Frist Name Print</h4>";
				$lastname = array_column($name, 'first_name', 'id');

				print("<pre>");
				print_r($lastname);
				print("</pre>");
				
				/* Last Name Print */
				echo "<h4>Last Name Print</h4>";
				$lastname = array_column($name, 'last_name', 'id');

				print("<pre>");
				print_r($lastname);
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