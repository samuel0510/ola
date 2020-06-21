<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/script.js"></script>


	<!-- Demo styles -->
	<style>



	</style>
</head>
<body>
	<div class="wrapper">

		<header class="header">
			<figure class="logo"><a href="index.html"><img src="img/logo.png" alt="Logo"></figure></a>
			<nav class="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a>Genres</a>
						<ul>
							<li><a href="genre.html">Action</a></li>
							<li><a href="genre.html">Comedy</a></li>
							<li><a href="genre.html">Drama</a></li>
							<li><a href="genre.html">Romance</a></li>
						</ul>
					</li>
					<li><a>Year</a>
						<ul>
							<li><a href="year.html">2017</a></li>
							<li><a href="year.html">2016</a></li>
							<li><a href="year.html">2015</a></li>
							<li><a href="year.html">2014</a></li>
						</ul>
					</li>
					<li><a>Language</a>
						<ul>
							<li><a href="language.html">English</a></li>
							<li><a href="language.html">German</a></li>
						</ul>
					</li>
					<li><a href="mostwatched.html">Most Watched</a></li>
					<li class="mobsearch">
						<form class="mobform">
							<input type="text" name="s" class="mobsearchfield" placeholder="Search...">
							<input type="submit" value="" class="mobsearchsubmit">
						</form>
					</li>
				</ul>
			</nav>
			<form class="search">
				<input type="text" name="s" class="searchfield" placeholder="Search...">
				<input type="submit" value="" class="searchsubmit">
			</form>

			<div class="toggle"><img src="img/menu.svg"></div>
		</header>
		
		<main class="content">
			<section class="centered">
				<h3>Contact</h3>
				<div class="contact">
					<form id="myForm" action="#" method="POST">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name">

						<label for="email">Email:</label>
						<input type="text" name="email" id="email">

						<label for="message">Message:</label>
						<textarea id="message" name="message"></textarea>

						<input type="submit" name="submit" value="SEND">
					</form>

					<span class="success">Message sent succesfully</span>
					<span class="error">Failed sending message</span>
				</div>
			</div>
		</section>

	</main>

	<footer class="footer">
		<div class="copyright"><p>Copyright &copy 2017 www.focusoncode.com</p></div>
		<div class="footermenu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="terms.html">Terms and conditions</a></li>
			</ul>
		</div>
		<div class="tags">
			<ul>
				<li>Watch Free Movies Trailers</li>
				<li>Movie Trailers</li>
				<li>English Subtitled Movies Trailers</li>
				<li>Latest Movies Trailers</li>
				<li>New Movies Trailers</li>

			</ul>
		</div>

	</footer>
	
</div>
</body>
</html>