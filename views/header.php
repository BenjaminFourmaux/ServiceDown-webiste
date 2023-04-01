<?php
	$navItems = [
		"home",
		"services",
		"tools",
		"api",
		"dashboard",
		"about",
	];
	$selectedClass = "disabled";
?>

<!-- Nav Bar -->
<header class="p-3 bg-dark text-white">
    <div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
		
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
				<img src="<?=$WEBSITE_URI?>/views/assets/img/logo-v1-50x50.png" alt="logo-service-down">
				<span class="website-name"><span class="text-sd-red">Service</span> <span class="text-sd-yellow">Down</span></span>
			</a>
			
			<button class="navbar-toggler text-light d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
			</button>
			
			<div class="collapse navbar-collapse d-md-flex align-items-center" id="navbarNav">
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li class="nav-item"><a href="/" class="nav-link px-2 <?php if($navItems[0]==$controller || $controller ==""){echo $selectedClass;}?>" data-i18n="[title]nav.<?=$navItems[0]?>;nav.<?=$navItems[0]?>">nav.<?=$navItems[0]?></a></li>
					<li class="nav-item"><a href="/services" class="nav-link px-2 <?php if($navItems[1]==$controller){echo $selectedClass;}?>" data-i18n="[title]nav.<?=$navItems[1]?>;nav.<?=$navItems[1]?>">nav.<?=$navItems[1]?></a></li>
					<li class="nav-item dropdown">
						<a href="#" id="toolsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link px-2 dropdown-toggle" data-i18n="[title]nav.<?=$navItems[2]?>;nav.<?=$navItems[2]?>">nav.<?=$navItems[2]?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="toolsDropdown">
							<li><a class="dropdown-item" href="/api" data-i18n="[title]nav.<?=$navItems[3]?>"><i class="fa-solid fa-server"></i> <span data-i18n>nav.<?=$navItems[3]?></span></a></li>
							<li><a class="dropdown-item" href="https://dashboard.service-down.net/" data-i18n="[title]nav.<?=$navItems[4]?>"><i class="fa-solid fa-gauge"></i> <span data-i18n>nav.<?=$navItems[4]?></span></a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="/about" class="nav-link px-2 <?php if($navItems[5]==$controller){echo $selectedClass;}?>" data-i18n="[title]nav.<?=$navItems[5]?>;nav.<?=$navItems[5]?>">nav.<?=$navItems[5]?></a></li>
				</ul>
		
				<!-- Search nav bar -->
				<form id="search-nav-bar" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="search" method="GET" role="search">
					<div class="input-group">
						<input type="search" name="q" id="search-nav-bar" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
						<span class="input-group-text" style="cursor: pointer"  onclick="event.preventDefault();this.closest('#search-nav-bar').submit();"><i class="fa-solid fa-magnifying-glass"></i></span>
					</div>
				</form>
				
				
				<!-- Login button -->
				<div class="text-end">
					<a type="button" class="btn btn-warning disabled" href="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> <span data-i18n>action.login</span></a>
				</div>
			</div>
			
		</div>
    </div>
</header>