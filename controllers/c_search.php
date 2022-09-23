<?php
	/** Search controller **/
	require_once('core/modules/request/request.php');
	
	$page_title = $translate->t("pages.search.hTitle");
	
	class Bite {
		public static function send($text){
			(new Request("/controllers/gateway.php?action=search?q=".$text))->get();
		}
	}
	
	
	
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
			include "views/v_search.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
</html>
