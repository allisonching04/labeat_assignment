<?php
	$this_page = "index";
	$page_title = "HOME";
	$active_class = "home_active";
	$hero_text = "MISSED THE ENCORES?";
	$second_hero_text = "WE DIDN'T"
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head.php"; ?>
</head>

<body>

	<div class="flex_wrap">
		
		<?php $current = 'home'; include "includes/nav.php"; ?>

		<div class="hero_box">
			<div class="homepage_grid">
				
					<div class="bg_img_box home_about global_transition">
						
						<a class="bg_link_botton bg_img_text blur_bg_home" href="aboutus.php">
							<h2>We re La.Beat</h2>
							<p>The only online art and entertainment magazine. Learn more abouto us</p>
						</a>
						
					</div>
			
				

				<div class="bg_img_box home_ads1">
					
				</div>


				<div class="bg_img_box home_ads2">
					
				</div>

				
					<div class="bg_img_box home_guide global_transition">
						<a class="bg_link_botton bg_img_text blur_bg_guide" href="musicguide.php">
							<p>Check out new music evenets!</p>
						</a>
						
					</div>
			

				
					<div class="bg_img_box home_story global_transition">
						<a class="bg_link_botton bg_img_text blur_bg_events" href="musicbeat.php">
							<p>What's happened in Town?</p>
						</a>
						
					</div>

			</div>
		</div>
		
			

		

	</div>
	<?php include "includes/footer.php"; ?>
	
</body>
</html>