<?php
	/** Contact controller **/

	$page_title = $translate->t("websiteTitle");
	$seo = $SEO_MANAGER->for_page('contact');
?>
<!DOCTYPE html>
<html lang="<?=$translate->currentLang?>">
	
	<?php
		// Include html head
		include "views/head.php";
    
		include "views/v_contact.php";
		
	?>
	
</html>