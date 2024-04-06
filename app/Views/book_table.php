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
										<h1>Book a table</h1>
									</header>
									<span class="image main"><img src="public/images/book-table-fullscreen-1-1920x700.jpg" alt="" /></span>

									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
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

								<form method="post" action="<?= site_url('book_table/submit_booking') ?>">
									<div class="fields">
										<div class="field half">
											<label for="date">Date</label>
											<input type="text" name="date" id="date" placeholder="23.06.2020" required/>
										</div>
										<div class="field half">
											<label for="time">Time</label>
											<input type="text" name="time" id="time" placeholder="09:00 pm" />
										</div>
										<div class="field half">
											<label>People</label>
											<select name="people">
												<option  value="1">1</option>
												<option  value="2">2</option>
												<option  value="3">3</option>
												<option  value="4">4</option>
												<option  value="5">5</option>
												<option  value="6">6</option>
											</select>
										</div>
										<div class="field half">
											<label for="full-name">Full name</label>
											<input type="text" name="full-name" id="full-name" />
										</div>
										<div class="field">
											<label for="phone">PHONE NUMBER</label>
											<input type="text" name="phone" id="phone" placeholder="+91"/>
										</div>
										<div class="field">
											<label for="email">Email address</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Notes</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" name="submit_booking" value="Check availability" class="primary" /></li>
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