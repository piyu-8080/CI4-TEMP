<!DOCTYPE HTML>
<html>
	<head>
	<?php
	   include ("header_script.php");
	?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<?php
				include ("header.php");
				?>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Contact Us</h1>
									</header>
									<span class="image main"><img src="public/images/map.jpg" alt="" /></span>
									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Contact us</h2>
								</header>
					

								<form method="post" action="#">
								<?php if (session()->has('success')) : ?>
        							<div class="alert alert-primary" role="alert">
            						<?= session('success') ?>
        							</div>
    								<?php elseif (session()->has('error')) : ?>
        							<div class="alert alert-danger" role="alert">
            						<?php 
            						if (is_array(session('error'))) {
                					foreach (session('error') as $error) {
                    				echo $error . "<br>"; // Output each error message
                					}
            						} else {
                					echo session('error'); // Output the error message as string
            						}
            						?>
        							</div>
    								<?php endif; ?>
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" />
										</div>
										<div class="field">
											<label for="message">Notes</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Send Message" name="submit" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">contact@company.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+1 333 4040 5566</span>
										<br>
										<span>+1 333 5550 3366</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>212 Barrington Court <br> New York, ABC 10001 <br> United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>


				<!-- Footer -->
				<?php
				include ("footer.php");
				?>


			</div>

		<!-- Scripts -->
		<?php
				include ("footer_script.php");
				?>

	</body>
</html>