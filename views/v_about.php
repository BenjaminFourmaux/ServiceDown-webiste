<div id="page-about">
	<!-- Banner -->
	<div class="banner-page">
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col text-center">
					<h1 data-i18n>pages.about.title</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="body-page">
		<div class="container">
			<section>
				<ul class="file-ariane">
					<?php
						$index = 0;
						$keyArray = [];
						foreach($translate->t('pages.about.sections') as $key => $value){
							array_push($keyArray, $key);
						?>
							<li <?php if($index == 0){echo"active";}?>><a href="#<?=$key?>"><?=$value?></a></li>
						<?php
							$index++;
						}
					?>
				</ul>
				
				<div class="row align-items-center mt-5 g-4">
					
					<!-- What is -->
					<div class="col-6" id="<?=$keyArray[0]?>" data-aos="fade-right">
						<h3 class="mb-4" data-i18n>pages.about.sect.0.title</h3>
						<p 
							data-i18n="[html]pages.about.sect.0.body"
							data-i18n-options='{"<1>":"<strong>","</1>":"</strong>"}'
						>
							pages.about.sect.0.body
						</p>
					</div>
					<div class="col-6" data-aos="flip-left">
						<img src="views/assets/img/about-hero-whatis.png" class="w-100">
					</div>
					
					<!-- Open Source -->
					<div class="col-6" data-aos="flip-right">
						<img src="views/assets/img/about-hero-opensource.png" class="w-100">
					</div>
					<div class="col-6" id="<?=$keyArray[1]?>" data-aos="fade-left">
						<h3 class="mb" data-i18n>pages.about.sect.1.title</h3>
						<p 
							data-i18n="[html]pages.about.sect.1.body"
							data-i18n-options='{"<0>":"<strong>","</0>":"</strong>"}'
						>
							pages.about.sect.1.body
						</p>
					</div>
					
					<!-- Works -->
					<div class="col-6" id="<?=$keyArray[2]?>"  data-aos="fade-right">
						<h3 class="mb-4" data-i18n>pages.about.sect.2.title</h3>
						<h4 data-i18n>pages.about.sect.2.subtitle-1</h4>
						<p>
							<span data-i18n="[html]pages.about.sect.2.text-1-head">pages.about.sect.2.text-1-head</span>
							<ul>
								<li>
									<span class="text-success" data-i18n="[append]pages.about.sect.2.list.0.label"><i class="fa-solid fa-square-check" ></i> </span> :
									<span  data-i18n="pages.about.sect.2.list.0.text"></span>
								</li>
								<li>
									<span class="text-warning" data-i18n="[append]pages.about.sect.2.list.1.label"><i class="fa-solid fa-triangle-exclamation"></i> </span> :
									<span  data-i18n="pages.about.sect.2.list.1.text"></span></li>
								<li>
									<span class="text-danger" data-i18n="[append]pages.about.sect.2.list.2.label"><i class="fa-solid fa-exclamation-circle" ></i> </span> :
									<span  data-i18n="pages.about.sect.2.list.2.text"></span></li>
							</ul>
							<span data-i18n="[html]pages.about.sect.2.text-1">pages.about.sect.2.text-1</span>
						</p>
						<h4 data-i18n>pages.about.sect.2.subtitle-2</h4>
						<p data-i18n="[html]pages.about.sect.2.text-2">pages.about.sect.2.text-2</p>
						<p data-i18n>pages.about.sect.2.end</p>
					</div>
					<div class="col-6" data-aos="flip-left">
						<img src="views/assets/img/about-hero-works-1.png" class="w-100">
						<img src="views/assets/img/about-hero-works-2.png" class="w-100">
					</div>
					
					<!-- Services type -->
					<div class="col-12" id="<?=$keyArray[3]?>">
						<h3 class="text-center mb-4" data-i18n>pages.about.sect.3.title</h3>
						<p class="text-center" data-i18n>pages.about.sect.3.body</p>
						<div class="row justify-content-center mt-4">
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="300">
									<div class="icon">
										<i class="fa-solid fa-wifi"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.0</p>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="600">
									<div class="icon">
										<i class="fa-solid fa-users"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.1</p>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="900">
									<div class="icon">
										<i class="fa-solid fa-gamepad"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.2</p>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="1200">
									<div class="icon">
										<i class="fa-solid fa-network-wired"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.3</p>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="1500">
									<div class="icon">
										<i class="fa-solid fa-building-columns"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.4</p>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="1800">
									<div class="icon">
										<i class="fa-solid fa-basket-shopping"></i>
									</div>
									<div class="title">
										<p data-i18n>pages.about.sect.3.items.5</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Key numbers -->
					<div class="col-12" id="<?=$keyArray[4]?>">
						<h3 class="text-center mb-4" data-i18n>pages.about.sect.4.title</h3>
						<div class="row justify-content-center mt-4">
							<div class="col-3">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="300">
									<div class="icon">
										<i class="fa-solid fa-server"></i>
									</div>
									<div class="title">
										<h4 data-i18n>pages.about.sect.4.items.0.num</h4>
									</div>
									<p data-i18n>pages.about.sect.4.items.0.caption</p>
								</div>
							</div>
							<div class="col-3">
								<div class="icon-card" data-aos="zoom-in" data-aos-delay="600">
									<div class="icon">
										<i class="fa-solid fa-globe"></i>
									</div>
									<div class="title">
										<h4 data-i18n>pages.about.sect.4.items.1.num</h4>
									</div>
									<p data-i18n>pages.about.sect.4.items.1.caption</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	
</div>