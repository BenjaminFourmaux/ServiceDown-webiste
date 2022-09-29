<?php
	/** About controller **/

	$page_title = $translate->t("pages.about.hTitle");
	$seo = $SEO_MANAGER->for_page('about');
?>
<!DOCTYPE html>
<html lang="<?=$translate->currentLang?>">
	<?php
		// Include html head
		include "views/head.php";
	?>
	<body class="body dark">
		<?php
			// Include loading
			include "views/loader.html";
		
			// Include header (menubar)
			include "views/header.php";
			
			// Include body
			include "views/v_about.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
</html>
