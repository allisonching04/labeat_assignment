<?php
	$page_title = "Bandemonium";
	$active_class = "three_active";
	$hero_text = "<span class='yellow_header'>Crooked Creek Warblers </span> sing country on a
				<span class='yellow_header'> chilly night</span>";
	$get_type_name = "Country";
	$get_show_name = "<br>BCrooked Creek Warblers sing country on a chilly night";
	$story_created_date = "Last Updated ( Wednesday, 10 January 2018 16:16 )";
	$display_story_pic = "../img/article02.jpg";
	$featured_img_text = "GABRIEL THAINE AND STEVE MARTIN OF THE CROOKED CREEK WARBLERS. ";
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

		<section class="center_intro main_section">

			<div class="inner_center_content">
				
				<?php include "includes/story.php"; ?>

				<p class="inner_article">
					The Crooked Creek Warblers were in a folky kind of mood on a chilly blustery , Dec 29 at the Slice.
				</p>
					
				<p class="inner_article">
					 Chris Drew and Gabriel Thaine added the big upright bass of Steve Martin to fill out the bottom end in a set full of excellent blues, roots and country music.
				</p>

				<p class="inner_article">
					 Thaine and Drew took turns singing lead vocals. Drew’s “ If the Whiskey Don’t Kill Me” was an immediate crowd favourite for the intimate audience.
				</p>

				<p class="inner_article">
					Thaine followed it up by a John Prine song which inspired it.
				</p>

				<?php include "includes/editor.php"; ?>
			</div>
		</section>

	</div>
	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>