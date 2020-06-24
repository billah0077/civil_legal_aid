
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="banner-agileinfo">
				<script src="<?php echo $path; ?>js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						 });				
					});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-w3text">
								<h3>Financial and Divorce Lawyers</h3>
								<h5>Services</h5>
								<p>Our experienced and sympathetic divorce lawyers will make sure that you fully understand your divorce options and help you find the right way forward for you and your family. We believe in reaching an agreement outside of the court as far as possible, saving time and money and helping avoid unnecessary animosity with your former partner.</p>
								<div class="banner-buttons"> 
									<div class="banner-button">
										<a href="single.php">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-w3text">
								<h3>Unmarried Finance & Legal Separation</h3>
								<h5>Services</h5>
								<p>Unmarried couples do not enjoy the same rights as married couples on separation, but they are able to make claims in relation to property whether jointly owned or owned by one party. Claims can also be made for financial provision for the children of unmarried couples.</p>
								<div class="banner-buttons"> 
									<div class="banner-button">
										<a href="single.php">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-w3text">
								<h3>Alternatives to Court</h3>
								<h5>Services</h5>
								<p>If you prefer to use a mediation service, our impartial mediators are amongst the most proficient in the country. They assist couples to resolve any practical differences resulting from separation with regard to children and financial matters, using an awareness of current practice to provide mediating couples with up-to-date information.</p>
								<div class="banner-buttons">
									<div class="banner-button">
										<a href="single.php">More</a>
									</div> 
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->