<?php
	$this_page = "musicguide";
	$page_title = "LiveBeat";
	$active_class = "four_active";
	$hero_text = "The only gig
				<span class='yellow_header'>Guide</span>
				that matters";
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
			<h1>
				<?php 
					$main_title = "upcoming <span class='red_title'> events</span>";
					echo "$main_title";
				?>
				
			</h1>

			<div class="music_events_list">
				<h2>MUSIC EVENTS</h2>

				<div class="music_events_detail">
					<h3 class="event_title">
						<?php 
						$event_name = "Rancho Deluxe";
						echo "$event_name";
						?>
					</h3>

					<div class="event_date_icon event_icons">
						<img src="img/date.png">
						
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Date";
								echo "$get_type_name";
							?>
						<h2>

					</div>
					<div class="event_location_icon event_icons">
						<img src="img/place_blk.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Location";
								echo "$get_type_name";
							?>
						<h2>
					</div>
					<div class="event_type_icon event_icons">
						<img src="img/type.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Type";
								echo "$get_type_name";
							?>
						<h2>
					</div>

					<p class="event_date">
						<?php 
						$events_date = "Jan 26";
						echo "$events_date";
						?>
					</p>
					<p class="event_location">
						<?php 
						$events_location = "Owl Acoustic Lounge";
						echo "$events_location";
						?>
					</p>
					<p class="event_type">
						<?php 
						$events_type = "Country";
						echo "$events_type";
						?>
					</p>
				</div>

				<div class="music_events_detail">
					<h3 class="event_title">
						<?php 
						$event_name = "Mark Hall Band";
						echo "$event_name";
						?>
					</h3>



					<div class="event_date_icon event_icons">
						<img src="img/date.png">
						
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Date";
								echo "$get_type_name";
							?>
						<h2>

					</div>
					<div class="event_location_icon event_icons">
						<img src="img/place_blk.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Location";
								echo "$get_type_name";
							?>
						<h2>
					</div>
					<div class="event_type_icon event_icons">
						<img src="img/type.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Type";
								echo "$get_type_name";
							?>
						<h2>
					</div>
					<p class="event_date">
						<?php 
						$events_date = "Jan 27";
						echo "$events_date";
						?>
					</p>
					<p class="event_location">
						<?php 
						$events_location = "Lethbridge Casino";
						echo "$events_location";
						?>
					</p>
					<p class="event_type">
						<?php 
						$events_type = "Country";
						echo "$events_type";
						?>
					</p>
				</div>

				<div class="music_events_detail">
					<h3 class="event_title">
						<?php 
						$event_name = "Dave McCann";
						echo "$event_name";
						?>
					</h3>

					<div class="event_date_icon event_icons">
						<img src="img/date.png">
						
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Date";
								echo "$get_type_name";
							?>
						<h2>

					</div>
					<div class="event_location_icon event_icons">
						<img src="img/place_blk.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Location";
								echo "$get_type_name";
							?>
						<h2>
					</div>
					<div class="event_type_icon event_icons">
						<img src="img/type.png">
						<h2 class="bold_h2">
							<?php 
								$get_type_name = "Type";
								echo "$get_type_name";
							?>
						<h2>
					</div>

					<p class="event_date">
						<?php 
						$events_date = "Feb 2";
						echo "$events_date";
						?>
					</p>
					<p class="event_location">
						<?php 
						$events_location = "The Slice";
						echo "$events_location";
						?>
					</p>
					<p class="event_type">
						<?php 
						$events_type = "Country";
						echo "$events_type";
						?>
					</p>
				</div>
			</div>
				
			</div>


		</section>
	</div>
	
	<?php include "includes/footer.php"; ?>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>