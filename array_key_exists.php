
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
			PHP array() Function array_key_exists()
			<span style="float: right;">
				<?php 
					date_default_timezone_set('Asia/Dhaka');
					echo "Time ".date("h:i:s a");
				 ?>
			</span>
			<hr>
			
			<h3>PHP Array Exists Key and value Show</h3>

			<?php 
				/*$arr = array(
					"name" => "Naeem",
					"age" => "20"
				);

				if (array_key_exists("name", $arr)) {
					echo "Key already exists.";
				}else{
					echo "Key dose not exists.";
				}*/

				/* Index Array */
				$arr = array("name", "age");
				if (array_key_exists("0", $arr)) {
					echo "Key already exists.";
				}else{
					echo "Key dose not exists.";
				}
				
				/*print("<pre>");
				print_r($difference);
				print("</pre>");*/
				


				
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