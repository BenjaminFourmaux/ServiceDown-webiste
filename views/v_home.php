<div id="page-home">
	<!-- Section: Carousel -->
	<section id="home-carousel">
		
		<div class="carousel slide" id="carousel-home" data-bs-ride="carousel">
			<!-- Indicator -->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carousel-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carousel-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carousel-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			
			<div class="carousel-inner">
				
				<!-- Slide 1 -->
				<div class="carousel-item active" id="home-carousel-slide-1">
					
					<div class="container h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<h1 class="text-center title" data-i18n="[html]pages.home.carousel.slide1.title" 
									data-i18n-options='{"<0>": "<span class=\"text-sd-red\">", "</0>": "</span>", "<1>": "<span class=\"text-sd-yellow\">", "</1>": "</span>"}'>
									pages.home.carousel.slide1.title
								</h1>
								<h3 class="text-center mt-5" data-i18n>pages.home.carousel.slide1.subtitle</h3>
							</div>
						</div>
					</div>
					
					
				</div>
				
				<!-- Slide 2 -->
				<div class="carousel-item" id="home-carousel-slide-2">
					
					<div class="container h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<h1 class="text-center" data-i18n>pages.home.carousel.slide2.title</h1>
								<h4 class="text-center mt-5" data-i18n>pages.home.carousel.slide2.subtitle</h4>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Slide 3 -->
				<div class="carousel-item" id="home-carousel-slide-3">
					
					<div class="container h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<h1 class="text-center" data-i18n>pages.home.carousel.slide3.title</h1>
								<h4 class="text-center mt-5" data-i18n>pages.home.carousel.slide3.subtitle</h4>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel-home" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel-home" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			
		</div>
		
	</section>

	<!-- Section: Services Down -->
	<section id="home-services">
		<div class="container">
			<div class="sect">
				<div class="sect-title">
					<h3 data-i18n>pages.home.sections.services.title</h3>
				</div>
				
				<div class="row mt-5 mb-3" id="current-outage-service">
				
				</div>
				
				<div class="text-center mt-3">
					<a href="services" class="btn btn-outline-danger" data-i18n>action.seeMore</a>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Section: News -->
	<section id="home-news">
		<div class="container">
			<div class="sect">
				<div class="sect-title">
					<h3 data-i18n>pages.home.sections.news.title</h3>
				</div>
				
				<div class="sect-body">
					<p data-i18n>pages.home.sections.news.bodyText</p>
					
					<!-- News carousel -->
					<div id="new-carousel" class="carousel" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="row">
								
								<div class="col-4">
									<div class="carousel-item active">
										<div class="card bg-white text-dark border-primary">
											<div class="card-body">
												<h5 class="card-title">Service Down coming soon !!</h5>
												<p class="card-text">
													Service Down arrive bientôt !
												</p>
												<div class="text-center">
													<a href="#" class="btn btn-primary" data-i18n>action.readMore</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="text-center mt-3">
						<a href="news" class="btn btn-outline-danger" data-i18n>action.seeMore</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Open Source -->
	<section id="home-opensource">
		<div class="container">
			<div class="sect">
				<div class="sect-title">
					<h3 data-i18n>pages.home.sections.opensource.title</h3>
				</div>
				
				<div class="sect-body">
					<p data-i18n>pages.home.sections.opensource.bodyText</p>
					
					<div class="row">
						<div class="col-4">
							<object width="100%" type="image/svg+xml" data="https://gh-card.dev/repos/BenjaminFourmaux/ServiceDown-website.svg?link_target=_top"></object>
						</div>
						<div class="col-4">
							<object width="100%" type="image/svg+xml" data="https://gh-card.dev/repos/BenjaminFourmaux/ServiceDown-api.svg?link_target=_top"></object>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Sponsorship -->
	<section id="home-sponsorship">
		<div class="container">
			<div class="sect">
				<div class="sect-title">
					<h3 data-i18n>pages.home.sections.sponsorship.title</h3>
				</div>
				
				<div class="sect-body">
					<p data-i18n>pages.home.sections.sponsorship.bodyText</p>
					<div class="text-center">
						<?php include ('paypal_button.html'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>