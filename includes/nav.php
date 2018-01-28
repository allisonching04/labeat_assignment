<!-- <nav>
	<ul>
		<li><a href="index.php"><span class="logo">LA.</span><span class="logo logo_pt2 red_title">BEAT</span></a></li>
		<li class="functin_nav line_nav"><a class="current" href="index.php">Home</a>
		</li>
		<li class="functin_nav line_nav two_nav"><a class="" href="aboutus.php">About Us</a></li>
		<li class="functin_nav line_nav three_nav"><a class="" href="musicbeat.php">MusicBest</a></li>
		<li class="functin_nav line_nav four_nav"><a class="" href="musicguide.php">LiveBeat</a></li>
	</ul>
</nav> -->

<nav>
	<ul>
		<li><a href="index.php"><span class="logo">LA.</span><span class="logo logo_pt2 red_title">BEAT</span></a></li>
		<li class="functin_nav line_nav"><a <?php if($this_page == 'index') {echo 'class="current"';} ?> href="index.php">Home</a>
		</li>
		<li class="functin_nav line_nav two_nav"><a <?php if($this_page == 'about') {echo 'class="current"';} ?> href="aboutus.php">About Us</a></li>
		<li class="functin_nav line_nav three_nav"><a <?php if($this_page == 'musicbeat') {echo 'class="current"';} ?> href="musicbeat.php">MusicBest</a></li>
		<li class="functin_nav line_nav four_nav"><a <?php if($this_page == 'musicguide') {echo 'class="current"';} ?> href="musicguide.php">LiveBeat</a></li>
	</ul>
</nav>