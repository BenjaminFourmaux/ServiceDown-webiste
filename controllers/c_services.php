<?php
	/** Services controller **/

	$page_title = $translate->t("pages.services.hTitle");
	$SEO_MANAGER->for_page('services');
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
			include "views/v_services.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
</html>
