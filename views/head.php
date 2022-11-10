<head prefix="og: https://ogp.me/ns#">
	<title><?=$page_title?></title>
	<link rel="icon" href="<?=$WEBSITE_URI?>/views/assets/img/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if(isset($seo) && $seo != null){ ?>
	<meta name="theme-color" content="<?=$seo->theme_color ?? null?>">
	<!-- SEO -->
	<meta name="description" content="<?=$seo->description ?? null?>">
	<meta name="keywords" content="<?=$seo->keywords ?? null?>">
	<meta name="generator" content="<?=$seo->generator ?? null?>">
	<!-- SEO - Open Graph -->
	<meta name="og:title" content="<?=$seo->og_title ?? null?>">
	<meta name="og:description" content="<?=$seo->og_description ?? null?>">
	<meta name="og:type" content="<?=$seo->og_type ?? null?>">
	<meta name="og:url" content="<?=$seo->og_url ?? null?>">
	<meta name="og:image" content="<?=$seo->og_image ?? null?>">
	<?php } ?>
	<!-- CSS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=$WEBSITE_URI?>/views/assets/style/style.css" />
	<link rel="stylesheet" href="<?=getenv('CDN_URI')?>css/notyf/notyf.min.css">
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="<?=$WEBSITE_URI?>/views/assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/5328a070bc.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="<?=getenv('CDN_URI')?>js/i18n/i18next-21.6.10.min.js"></script>
	<script src="<?=getenv('CDN_URI')?>js/i18n/jquery-i18next-1.2.1.min.js"></script>
	<script src="<?=getenv('CDN_URI')?>js/i18n/i18nextBrowserLanguageDetector-6.1.3.min.js"></script>
	<script src="<?=getenv('CDN_URI')?>js/i18n/i18n.js"></script>
	<script src="<?=getenv('CDN_URI')?>js/notyf/notyf.min.js"></script>
</head>