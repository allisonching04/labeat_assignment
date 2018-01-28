<?php
	$page_title = "ABout US";
	$active_class = "two_active";
	$hero_text = "<span class='yellow_header'>la beat </span>designed to support 
				<span class='yellow_header'>music, </span>
				<span class='yellow_header'>art, </span>
				<span class='yellow_header'>drama </span>in and around the city.";
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

				<h1 class="main_page_title_middle">
					<?php 
						$main_title = "ABOUT <span class='red_title'>Us</span>";
						echo "$main_title";
					?>
				</h1>

				<div class="main_text_middle">
					<p class="main_text_middle_01">La Beat starts out as an online presence and then evolve into a print edition which will be distributed at numerous locations in the city</p>
					<p class="main_text_middle_02">If you have an event you want L.A. Beat to promote, contact us by e-mail. Look for my Facebook group. Check it for updates about what&apos;s new on our website, twitter, mySpace or Facebook.</p>
					<p class="main_text_middle about_text_02">Or contact &colon;</p>
				</div>

				
				<div class="featured_text_middle featured_yellow_box">
					<h2><span class="gray_color">Richard&nbsp;</span>Amery</h2>
					<p>Contact Editor/Publisher </p>
					<p>editor&commat;labeat.ca</p>
				</div>
<!-- 
				<p class="main_text_middle">Or you can check the latest new on:</p> -->

				<div class="social_icon three_box_flex botton_text_middle">
					<a href="https://myspace.com/labeatlethbridge"><img src="img/myspace.png"></a>
					<a href="https://twitter.com/labeatartsmag?lang=en"><img src="img/twitter.png"></a>
					<a href="https://www.facebook.com/groups/90386746061/"><img src="img/facebook.png"></a>
					
				</div>

			</div>

		</section>
	</div>

	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>