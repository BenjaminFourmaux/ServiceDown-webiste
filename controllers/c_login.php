<?php 
	/** Login Controller **/
	require_once('core/modules/dotenv/DotEnv.php');
	$fileDotEnv = $_SERVER['DOCUMENT_ROOT'] . '/.env';
	
	(new DotEnv($fileDotEnv))->load();
	

	var_dump(getenv('TEST'));
	
	$page_title = $translate->t('pages.login.hTitle');
?>

<!DOCTYPE html>
<html lang="<?=$translate->currentLang?>">
	<?php
		// Include html head
		include "views/head.php";
		
		include "views/v_login-portal.php";
		
	?>
	
</html>