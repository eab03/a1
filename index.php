<?php require('quoteList.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Liz Bright Introduction</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="wrapper">

		<header>
			<h1>Liz Bright</h1>
		</header>

		<div class="container">

			<img src="images/my_photo.jpg" id="photo" alt="my_photo" />

			<div class="introduction">
				<h2>About Me</h2>
				<div class="text" id="intro">
					<p>Hello! My name is Liz, and I live in Cambridge, MA. Currently, I am a degree
					candidate in the Digital Media Design master's program at the
					Harvard Extension School and by day work full-time at the Alumni Center
					at Harvard Law School.</p>
					<p>I started taking web development/design classes about a year and a half ago for the program, and
					after a few more classes, here I am today. My hope in this class is to continue to learn new skills,
					see where my strengths and interests lie, and go from there!</p>
					<p>And when I'm not busy with work and classes (ha!), I enjoy
					traveling, photography, yoga, enjoying the outdoors (yes, even the snow!), and eating chocolate
					and drinking coffee (preferably together!).</p>
				</div>
			</div>

			<div class="quotation">
				<h2>A Thought for the Day</h2>
				<div class="text" id="quote">
					<blockquote><?php echo $quotes[$rand_keys] . "\n"; ?></blockquote>
				</div>
 			</div>
		</div>

		<!-- close container -->

		<footer>
			<div id="footer">
				<p>February 2017</p>
			</div>
		</footer>

	</div>
	<!-- close wrapper -->
</body>
</html>
