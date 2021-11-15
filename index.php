<?php
/**
 * @author: Symatic Solutions
 * @web: https://symaticsolutions.com
 * @email: info@symaticsolutions.com
 * @skype: symatic.solutions
 */

$isHomePage = true;
$title = 'Ghina M. Halabi';
$bodyClass = 'homepage is-preload';

require_once ('./header.php');
?>
			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">My Latest News</div>
					<div class="container">
						<!--<p class="style1">So in case you were wondering what this is all about ...</p>
					 	<p class="style2">
							A free responsive<br class="mobile-hide" />
							site template by <a href="http://html.net" class="nobr">HTML</a>
						</p> -->

						<p class="style3">What do stellar music and high-end audio systems have in common? What does the metaverse have to do with space education? Why is now a great time to be a science entrepreneur?

<br>I got on the Imperial Innovation &amp; Entrepreneurship Club podcast to discuss how I bring together space science, innovation and entrepreneurship.

						</p>
						<ul class="actions">
							<li><a href="https://open.spotify.com/episode/7KWczuzz2NZaxOaJF2ngeE?si=mrdr1H_eTJmMtg_1qmvMag&dl_branch=1&nd=1" class="button style3 large" target="_blank">Listen to the podcast</a></li>
						</ul>
					</div>
				</section>

			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">Who I am</div>
					<div class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">

									<h2 style="font-size:25px"> I was the first to get a PhD in astrophysics from a Lebanese university. I want to make sure that I'm not the last.</h2>
									<p style="font-size:16px"><font color="#808080">My work lies at the intersection of science, entrepreneurship and education. Thirteen years of research experience in astrophysics lends itself to an ability to think creatively, navigate complexity and drive progress with innovative solutions.</p>

								<!-- Ghina removed this
								<div class="feature-list">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon fa-comment">Mattis velit diam vulputate</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-sync">Lorem ipsum dolor sit veroeros</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon fa-image">Pretium phasellus justo lorem</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-wrench">Aliquam consequat et feugiat</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-check">Dolore laoreet aliquam mattis</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
-->
								<ul class="actions special">
									<a href="Bio.php" class="button style1 large" >More about me</a>
								<!-- 	<li><a href="#" class="button style2 large">More abou tme</a></li> -->
								</ul>
							</section>
						</header>
					</div>
				</section>

<?php
    require_once ('portfolio.php');
    require_once ('contact.php');
    require_once ('footer.php');
