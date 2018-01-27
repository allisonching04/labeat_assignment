<?php
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
		
		<?php include "includes/nav.php"; ?>
<!-- 		<?php include "includes/hero.php"; ?> -->

		<div class="hero_box">
			<div class="homepage_grid">
				
					<div class="homepage_box home_about">
						
						<a class="homepage_link" href="aboutus.php">
							<h2>We re LeBeat.</h2>
							<p>The only online art and entertainment magazine. Learn more abouto us</p>
						</a>
						
					</div>
			
				

				<div class="homepage_box home_ads1">
					
				</div>


				<div class="homepage_box home_ads2">
					
				</div>

				
					<div class="homepage_box home_guide">
						<a class="homepage_link" href="musicguide.php">
							<p>Check out new music evenets!</p>
						</a>
						
					</div>
			

				
					<div class="homepage_box home_story">
						<a class="homepage_link" href="musicbeat.php">
							<p>What's happened in Town?</p>
						</a>
						
					</div>

			</div>
		</div>
		
			

		

	</div>
	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>