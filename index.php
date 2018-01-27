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
		<?php include "includes/hero.php"; ?>

		<div class="homepage_grid">
			<a class="homepage_link" href="aboutus.php">
				<div class="homepage_box home_about">
					<h2>We re LeBeat.</h2>
					<p>The only online art and entertainment magazine. Learn more abouto us</p>
				</div>
			</a>
			

			<div class="homepage_box home_ads1">
				a
			</div>


			<div class="homepage_box home_ads2">
				b
			</div>

			<a class="homepage_link" href="musicguide.php">
				<div class="homepage_box home_guide">
					<p>Check out new music evenets!</p>
				</div>
			</a>

			<a class="homepage_link" href="musicbeat.php">
					<div class="homepage_box home_story">
				<p>What's happened in Town?</p>
				</div>
			</a>
			

		</div>
			

		

	</div>
	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>