<?php
	/** Home controller **/

	$page_title = $translate->t("websiteTitle");
	$seo = $seo_manager->for_page('home');
?>
<!DOCTYPE html>
<html lang="<?=$translate->currentLang?>">
	<?php
		// Include html head
		include "views/head.php";
	?>
	<body class="dark">
		<?php
			// Include loading
			include "views/loader.html";
		
			// Include header (menubar)
			include "views/header.php";
			
			// Include body
			include "views/v_home.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
</html>
