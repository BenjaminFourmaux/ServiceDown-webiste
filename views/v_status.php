<div id="page-status" data-service-id="<?=$service['id']?>">
	<div class="container">
		<div class="my-5">
			<section class="service-info">
				<div class="text-center">
					<img src="<?=getenv('CDN_URI')?>images/service-banner/<?=$service['slug']?>.png">
					<h1 class="service-info-title"><?=$service['name']?></h1>
					<p class="service-info-description"><?=$service['description']?></p>
					<div class="service-info-link">
						<div class="row justify-content-center">
							<?php if($service['website'] !== null){
							?>
							<div class="col-1">
								<a href="<?=$service['website']?>" target="_blank" data-i18n="[title]link.type.website">
									<i class="fa-solid fa-globe"></i>
								</a>
							</div>
							<?php
							}
							if($service['twitterUsername'] !== null){
							?>
							<div class="col-1">
								<a href="https://twitter.com/<?=$service['twitterUsername']?>" target="_blank"  data-i18n="[title]link.type.twitter">
									<i class="fa-brands fa-twitter"></i>
								</a>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</section>
			<section class="service-status">
				<div class="row">
					<div class="col-12">
						<h3 data-i18n>pages.service.currentStatus.title</h3>
					</div>
					
					<!-- Current status -->
					<div class="col-12">
						<div class="service-status-current text-center">
							<h4 class="status-icon"></h4>
							<p class="status-label"></p>
						</div>
					</div>
					
					<div class="col-12"><hr></div>
					
					<!-- Report H1 graph -->
					<div class="col-12">
						<h5 data-i18n>pages.service.currentStatus.graph.title</h5>
						<div class="m-3">
							<canvas id="report24HGraph"></canvas>
						</div>
					</div>
					
					<div class="col-12"><hr></div>
					
					<!-- Send report -->
					<div class="col-12">
						<div class="service-status-send text-center">
							<p data-i18n="pages.service.currentStatus.send.disclaimer" data-i18n-options='{"name": "<?=$service['name']?>"}'>pages.service.currentStatus.send.disclaimer</p>
							<button 
								id="send-report"
								class="btn btn-warning btn-lg" 
								data-i18n="[title]pages.service.currentStatus.send.button;pages.service.currentStatus.send.button"
							>
								pages.service.currentStatus.send.button
							</button>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>