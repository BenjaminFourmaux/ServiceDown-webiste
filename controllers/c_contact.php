<?php
	/** Contact controller **/

	$page_title = $translate->t("pages.contact.hTitle");
	$seo = $SEO_MANAGER->for_page('contact');
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
		
			include "views/v_contact.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
	
</html>