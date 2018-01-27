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
					
					<!-- <?php include "includes/articlebox.php"; ?> -->

					<?php $article_box = "
						<div class='story_img article_01 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='article01.php'>
								<p>Bandemonium take the place of ailing Mwansa Mwansa</p>
							</a>
						</div>";
					echo $article_box;
					?> 	


					<?php $article_box = "
						<div class='story_img article_02 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='article02.php'>
								<p>Crooked Creek Warblers sing country on a chilly night</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  

					<?php $article_box = "
						<div class='story_img article_03 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='#'>
								<p>Incura inks new American record deal</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  

					<?php $article_box = "
						<div class='story_img article_04 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='#'>
								<p>Not a lot going on to open 2018</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  

					<?php $article_box = "
						<div class='story_img article_05 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='#'>
								<p>Fast Times rock the hits at Lethbridge Casino</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  
					<?php $article_box = "
						<div class='story_img article_06 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='#'>
								<p>Lots of live music for New Year’s Eve 2017</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  

					<?php $article_box = "
						<div class='story_img article_07 bg_img_box'>
							<a class='story_article_active bg_link_botton' href='#'>
								<p>Jenn and Paul Kype sing the hits for Casino crowd</p>
							</a>
						</div>"
						;
						echo $article_box;
					?>  
					

				</section>
			</div>
		</section>
	</div>

	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>