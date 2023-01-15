<?php
/**
 * @author: Symatic Solutions
 * @web: https://symaticsolutions.com
 * @email: info@symaticsolutions.com
 * @skype: symatic.solutions
 */

$isHomePage = false;
$title = 'Space Research';
$bodyClass = 'right-sidebar is-preload';

require_once ('./header.php');
?>
			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">Space Research</div>
					<div class="container">
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2>Exploring the structure and evolution of stars, and their role in the Universe</h2>
												<p>Cutting edge research involving theoretical astrophysics and numerical simulation</p>
											</header>
											<!-- Removed by Ghina
											<a href="#" class="image featured">
												<img src="images/stars.jpg" alt="" />
											</a> -->

											<p align="justify" style="font-size:16px"><font color="#303030">Stars are the atoms of the universe. They play a crucial and prominent role on galactic and cosmological levels. Not only are they the visible probes, they also energize their host galaxies and the interstellar medium as their radiation heats the cooler gas in the clouds surrounding them. Beyond hydrogen and helium they create all the elements in the universe as by-products of the nuclear fusion that keeps them alive, particularly during their later evolutionary phases. They are the hosts and birthplace of planets which form in their circumstellar or protoplanetary discs at or near the end of the stars' own formation process. <br><br>I research the evolution of these enigmatic objects, their interactions with their nearby companions, and the nucleosynthesis processes taking place through their lifetimes. To do that, I use stellar evolution codes that model their structure and element formation. During my Ph.D. under the supervision of <a href="https://www.aub.edu.lb/fas/physics/Pages/eid.aspx" target="_blank"> Prof. Mounib El Eid</a>, I used the <a href="https://link.springer.com/article/10.1007/s11214-009-9517-6" target="_blank">
													 HYADES code</a> (HYdrodynAmical coDe for Evolving Stars), a well-tested 1D hydrodynamic stellar evolution code with <a href="http://iopscience.iop.org/article/10.1088/0004-637X/761/1/10/meta" target="_blank">
						 								 up-to-date input physics</a>. At the <a href="http://www.ast.cam.ac.uk/" target="_blank">Institute of Astronomy</a>, I'm part of the <a href="http://www.ast.cam.ac.uk/research/stars.and.stellar.evolution" target="_blank">Stars group</a> and I use the Cambridge <a href="http://www.ast.cam.ac.uk/~stars/index.htm" target="_blank">STARS code</a> to study the evolution of single and binary stars.<br> You can see my ORCiD profile here <a href="https://orcid.org/0000-0002-1333-5497" target="orcid.widget" rel="noopener noreferrer" style="vertical-align:top;"><img src="https://orcid.org/sites/default/files/images/orcid_16x16.png" style="width:1em;margin-right:.5em;" alt="ORCID iD icon">orcid.org/0000-0002-1333-5497</a> </font></p>

							 	<p align="justify" style="font-size:16px"><font color="#303030"> <b>CNO ABUNDANCES IN RED GIANTS</b><br><br>
							 	When stars become red giants, they experience the first envelope mixing event that changes their surface abundances. Since stellar spectra tell us about the chemistry at the surface, we can then compare our model predictions to the observations.
							 	<span class="image right"><img src="images/O1617.jpg" alt="" /></span>If we have a good understanding of the mixing process, we gain insight into the stellar interiors and chemistry by studying these abundance changes. Using state-of-the-art input physics, <a href="https://academic.oup.com/mnras/article-lookup/doi/10.1093/mnras/stv1141" target="_blank"> we find a discrepancy</a> between predicted surface
							 	oxygen abundances and observations in low mass red giants. The adjacent cartoon figure is a simple depiction of this finding, where the model predictions are shown as a red line and star symbols are observations. This suggests the need to invoke deeper mixing in the models than the theory predicts (shown as a dashed green line) to reproduce the observed abundance pattern. This is sometimes called extra
							 	mixing and is parametrised as a diffusive process based on <a href="http://articles.adsabs.harvard.edu/full/1996A%26A...313..497F" target="_blank"> 2D hydrodynamic simulations</a>. <br><br>However, this raises important questions: how well do we understand mixing? And what physical mechanism drives this
							 	extra mixing?</font></p>
							 	<p align="justify" style="font-size:16px"><font color="#303030"> <b>TWO-DIMENSIONAL STELLAR EVOLUTION</b><br><br>
							 	Such questions challenge one-dimensional (1D) stellar evolution theory. Although this theory has provided substantial understanding of the inner workings of stars, my research
							 	shows that 1D models, with their imposed assumptions and simplifications like spherical symmetry, have difficulty in
							 	modelling the transport of heat and chemical elements by convection in various parts of the star. It also highlights
							 	shortcomings of ignoring important effects such as rotation.</font></p>

								<figure> <img src="images/2DStars-rho.png" style="float:right; padding:10px" width=45% height=auto>
										</figure>

								<p align="justify" style="font-size:16px"><font color="#303030">Non-standard parameterised solutions like the one I mentioned previously inevitably fail to capture the
							 	physical nature of the underlying processes responsible for certain observational anomalies. This ultimately tickles our curiosity
							 	and drives our desire for a better understanding, hoping for the genuine satisfaction that accompanies such attainment.<br>
							 	A brave step in this direction is two-dimensional (2D) axisymmetric models that naturally include rotation.
							 	This is being achieved through my work on developing 2DStars, a stellar evolution code to model rotating stars in 2D, together with <a href="http://www.ast.cam.ac.uk/~rgi/" target="_blank">Robert Izzard,</a> <a href="http://www.ast.cam.ac.uk/~cat/" target="_blank"> Christopher Tout</a>, <a href="https://www.ast.cam.ac.uk/people/adam.jermyn" target="_blank"> Adam Jermyn</a>
							 	and <a href="http://www.textensor.com/people.html" target="_blank">Robert Cannon.</a> <br><br>
							 	We now have the first converging model of a fast rotating star shown on the left. The density color map (given in polytropic units here) exhibits a severe oblateness associated with
							 	the deformation of equipotential surfaces due to the centrifugal distortion. <br><br>
							 	Being at the frontier of scientific exploration, this project promises a burst of new scientific insight as it exploits
							 	existing possibilities for improvement given the advent of computational refinements and the unprecedented
							 	developments in observational astronomy.</font></p>

							 	<p align="justify" style="font-size:16px"> <font color="#303030"><b>SYNTHESIS OF C-RICH DUST IN NOVAE OUTBURSTS</font></b><br>
									<figure> <img src="images/nova.jpg" style="float:right; padding:15px" width=45% height=auto>
											</figure>
							 <p align="justify" style="font-size:16px"> <font color="#303030"><a href="https://en.wikipedia.org/wiki/Nova" target="_blank"> Classical novae</a> are very interesting objects since they are prolific dust producers. These are binary systems involving a star (not unlike our own Sun) and a white dwarf. Observations of a number of novae
							 	have unambiguously revealed that their ejecta are rich in carbon. However, theoretical models of novae
							 	outbursts to date have yielded outflows richer in oxygen than carbon. In a collaboration with <a href="http://www.fen.upc.edu/users/jjose/" target="_blank"> Jordi Jos&eacute</a> and <a href="https://www.aub.edu.lb/fas/physics/Pages/eid.aspx" target="_blank"> Mounib El Eid</a>,
							 	we provided <a href="https://www.aanda.org/articles/aa/abs/2016/09/aa28901-16/aa28901-16.html" target="_blank"> state-of-the-art novae models</a> which produce carbon-rich ejecta, providing a novel explanation of
							 	these observations.<br>Image credit: David A. Hardy/<a href="http://www.astroart.org/" target="_blank">www.astroart.org</a></font><br></p>
							 	<p align="justify" style="font-size:16px"> <font color="#303030"> <b>THE BLUE LOOP</b></font><br>

									<figure> <img src="images/blueloop.png" style="float:right; padding:10px" width=50% height=auto>
											</figure>

								<p align="justify" style="font-size:16px"> <font color="#303030">Stars of intermediate mass exhibit a phenomenon called the "blue loop", which characterizes the evolution
							 	through the <a href="https://en.wikipedia.org/wiki/Instability_strip" target="_blank"> Cepheid instability strip</a>. Since Cepheids are well-known variable stars that are largely observed
							 	 in the Galaxy, the blue loop presents a powerful phase that can constrain important physical processes. <a href="http://iopscience.iop.org/article/10.1088/0004-637X/761/1/10" target="_blank"> We investigated</a> the striking
							 	 effect of a <a href="https://journals.aps.org/rmp/abstract/10.1103/RevModPhys.83.195" target="_blank"> revised hydrogen-burning reaction rate</a> on the blue loop and showed an impressive
							 	 suppression of the blue loops of intermediate mass stars. This is depicted in the adjacent figure which shows the evolutionary tracks of stars of various masses in the HR diagram. Black and blue symbols are observed cepheids (see <a href="http://iopscience.iop.org/article/10.1088/0004-637X/761/1/10" target="_blank"> paper</a> for details). The suppression of the blue loop of the lower mass stars undesirably leaves many observed Cepheids unexplained. Having an experimentally established nuclear reaction rate allows focus to be brought to the
							 	 role of related physical processes that are not yet well-understood, like convection, <a href="http://aip.scitation.org/doi/abs/10.1063/1.4875329" target="_blank"> in solving
							 	 this discrepancy</a>. </font></p>
										</article>

										<!--	 removed by Ghina
										<div class="row gtr-150">
											<div class="col-6 col-12-small">
												<section class="box">
													<header>
														<h2>Magna pulvinar tempus</h2>
													</header>
													<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
													<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
													eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
													tempus.</p>
													<a href="#" class="button style1">More</a>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section class="box">
													<header>
														<h2>Magna pulvinar tempus</h2>
													</header>
													<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
													<p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
													eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
													tempus.</p>
													<a href="#" class="button style1">More</a>
												</section>
											</div>
										</div> -->
									</div>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Space in tech and innovation</h2>
											</header>
											<p>I consult for innovative businesses to help them bring space science into their products, services and even marketing strategies. Sounds like something you need?</p>
											<a href="consultancy.php" class="button style1">learn more</a>
										</section>
										<section class="box">
											<header>
												<h2>Selected astronomy stories on She Speaks Science</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="http://www.shespeaksscience.com/music-of-the-spheres/" class="image left" target="_blank"><img src="images/sssl.png" alt="" /></a>
														<h3><a href="http://www.shespeaksscience.com/music-of-the-spheres/" target="_blank">Music of the Spheres</a></h3>
														<p>On the astronomical harmony of the cosmos, insight into stars' depths and the science of their music.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="http://www.shespeaksscience.com/the-long-hand-of-darkness/" class="image left" target="_blank"><img src="images/sssl.png" alt="" /></a>
														<h3><a href="http://www.shespeaksscience.com/the-long-hand-of-darkness/" target="_blank">The Long Hand of Darkness</a></h3>
														<p>On the longest night of the year, the tilt of our globe and our ancient relationship with the Sun.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="http://www.shespeaksscience.com/starlight/" class="image left" target="_blank"><img src="images/sssl.png" alt="" /></a>
														<h3><a href="http://www.shespeaksscience.com/starlight/" target="_blank">Starlight: the muse, compass and human right</a></h3>
														<p>On the role of stars as sources of inspiration and beacons for navigation.</p>
													</article>
												</li>
											</ul>
											<a href="http://www.shespeaksscience.com/category/astronomy/" class="button style1" target="_blank">More astronomy stories</a>
										</section>
										<section class="box">
											<header>
												<h2>Selected papers</h2>
											</header>
											<ul class="style3">
											<li><a href="https://www.cambridge.org/gb/academic/subjects/physics/astrophysics/impact-binary-stars-stellar-evolution?format=HB&isbn=9781108428583" target="_blank">Population synthesis of binary stars</a>, Cambridge University Press</li>
												<li><a href="https://academic.oup.com/mnras/article-abstract/480/4/5176/5075219?redirectedFrom=fulltext" target="_blank">Post-common envelope binary systems</a>, Monthly Notices of the Royal Astronomical Society</li>
												<li><a href="https://www.aanda.org/articles/aa/abs/2016/09/aa28901-16/aa28901-16.html" target="_blank">Synthesis of C-rich dust in non-neon novae</a>, Astronomy and Astrophysics Journal</li>
												<li><a href="https://academic.oup.com/mnras/article-lookup/doi/10.1093/mnras/stv1141" target="_blank">Exploring Masses and CNO abundances in Red Giant Stars</a>, Monthly Notices of the Royal Astronomical Society</li>
												<li><a href="https://academic.oup.com/mnras/article-lookup/doi/10.1093/mnras/stv1141" target="_blank">Sensitivity of the Blue Loops of Intermediate-Mass Stars to Nuclear Reactions</a>, Astrophysical Journal</li>

											</ul>
										</section>
									</div>

							</div>
						</div>
					</div>
				</section>

<?php
    require_once ('portfolio.php');
    require_once ('contact.php');
    require_once ('footer.php');
