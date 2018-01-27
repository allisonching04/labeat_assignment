<?php
	$page_title = "MusicBeat";
	$active_class = "three_active";
	$hero_text = "<span class='yellow_header'>ALL</span> you need to 
				<span class='yellow_header'>know</span> is the 
				<span class='yellow_header'>Great Music</span>
				in and around the city.";
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


		<section class="storyPage_grid main_section">
			
			<div class="inner_center_content">
				<h1>
					<?php 
						$main_title = "Latest <span class='red_title'>Updated</span>";
						echo "$main_title";
					?>
				</h1>

				<section class="main_story_wrap">
					
					<div class="story_img article_01">
						<a class="story_article_active" href="article01.php"><p>Bandemonium take the place of ailing Mwansa Mwansa</p></a>
					</div>
					<div class="story_img article_02">
						<a class="story_article_active" href="article02.php">
							<p>Crooked Creek Warblers sing country on a chilly night</p></a>
					</div>

					<div class="story_img article_03">
						<p>Incura inks new American record deal</p><
					</div>
					<div class="story_img article_04"><p>Not a lot going on to open 2018</p></div>
					<div class="story_img article_05"><p>Fast Times rock the hits at Casino </p>Lethbridge</div>
					<div class="story_img article_06"><p>Lots of live music for New Year’s Eve 2017</p></div>
					<div class="story_img article_07"><p>Jenn and Paul Kype sing the hits for Casino crowd</p></div>
				</section>
			</div>
		</section>
	</div>

	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>