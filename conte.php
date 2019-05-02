<?php
	session_start();
	
	if(isset($_GET['succesChasse'])){
		if($_GET['succesChasse'] == 1){
			$_SESSION['vie'] = $_SESSION['vie'] + 2;
			if($_SESSION['vie'] > 6){
				$_SESSION['vie'] = 6;
			}
		}
		
	}
	else if(isset($_GET['vie'])){
		$_SESSION['vie'] = $_GET['vie'];
	
		if($_SESSION['vie'] == 1){
			$page = "gameOver";
			include("vue/contes/pagesAffichage/gameOver.php");
		}
		else if($_SESSION['vie'] < 0){
			$_SESSION['vie'] = 0;
			$page = "gameOver";
		}
		else if($_SESSION['vie'] == 7){
			header('location: odysee.html');
		}
	}
	
	
		
?>
<?php

include_once('modele/connexion_sql.php');

	if (!isset($_GET['page']) OR $_GET['page'] == 'page1')
	{
		if(!isset($_GET['chiffre'])) {
			include_once('controleur/contes/index.php');
		}
		
	}
	
	

	if(isset($_GET['page'])){
	
	$page = $_GET['page'];
	switch($page){
		
		case "page2I":
			include("vue/contes/pagesAffichage/page2I.php");
			break;
			
		case "page3I":
			include("vue/contes/pagesAffichage/page3I.php");
			break;
			
		case "page3bI":
			include("vue/contes/pagesAffichage/page3bI.php");
			break;
			
		case "page3cI":
			include("vue/contes/pagesAffichage/page3cI.php");
			break;
			
		case "page4I":
			include("vue/contes/pagesAffichage/page4I.php");
			break;
			
		case "page5I":
			include("vue/contes/pagesAffichage/page5I.php");
			break;
			
		case "page5I":
			include("vue/contes/pagesAffichage/page5I.php");
			break;
			
		case "page6I":
			include("vue/contes/pagesAffichage/page6I.php");
			break;
			
		case "page7I":
			include("vue/contes/pagesAffichage/page7I.php");
			break;
		
		case "page8I":
			include("vue/contes/pagesAffichage/page8I.php");
			break;
		
		case "page9I":
			include("vue/contes/pagesAffichage/page9I.php");
			break;
			
		case "page9bI":
			include("vue/contes/pagesAffichage/page9bI.php");
			break;
			
		case "feuilleRoute":
			include("vue/contes/pagesAffichage/feuilleRoute.php");
			break;
			
		case "paysagePremier":
				include("vue/contes/pagesAffichage/paysagePremier.php");
				break;
				
		case "chasse":
			include("vue/contes/pagesAffichage/chasse.php");
			break;
			
		case 1:
			include("vue/contes/pagesAffichage/cerf.php");
			break;
			
		case 2:
			include("vue/contes/pagesAffichage/lievre.php");
			break;
			
		case 3:
			include("vue/contes/pagesAffichage/leopard.php");	
			break;
			
		case 4:
			include("vue/contes/pagesAffichage/lion.php");
			break;
			
		case 5:
			include("vue/contes/pagesAffichage/mammouth.php");
			break;
			
		case 6:
			include("vue/contes/pagesAffichage/rhino.php");	
			break;
			
		case 7:
			include("vue/contes/pagesAffichage/baie.php");	
			break;
			
		case 8:
			include("vue/contes/pagesAffichage/baie2.php");	
			break;
			
		case 9:
			include("vue/contes/pagesAffichage/baie3.php");	
			break;
			
		case 10:
			include("vue/contes/pagesAffichage/baie4.php");
			break;
			
		case "chasseReussite":
			include("vue/contes/pagesAffichage/chasseReussite.php");
			break;
			
		case "chasseEchec":
			include("vue/contes/pagesAffichage/chasseEchec.php");
			break;
			
		case "hallucination":
			include("vue/contes/pagesAffichage/hallucination.php");
			break;
			
		case "livreTrouve":
			include("vue/contes/pagesAffichage/livreTrouve.php");
			break;
			
		case "gameOver": 
			include("vue/contes/pagesAffichage/gameOver.php");			
			break;
			
		case "fuiteOurs":
			include("vue/contes/pagesAffichage/fuiteOurs.php");			
			break;
			
		case "pageEurope":
			include("vue/contes/pagesAffichage/paysageEurope.php");
			break;
	}
}
else if(isset($_GET['chiffre'])){
		if( $_GET['chiffre'] == 1){
				include("vue/contes/pagesAffichage/paysageEurope.php");
		}
		else if( $_GET['chiffre'] == 2){
					include("vue/contes/pagesAffichage/paysageEurope2.php");		
		}
		else if( $_GET['chiffre'] == 3){
					include("vue/contes/pagesAffichage/paysageEurope3.php");			
		}
		else if( $_GET['chiffre'] == 4){
					include("vue/contes/pagesAffichage/paysageOrient.php");			
		}
		else if( $_GET['chiffre'] == 5){
					include("vue/contes/pagesAffichage/paysageOrient2.php");			
		}
		else if( $_GET['chiffre'] == 6){
					include("vue/contes/pagesAffichage/paysageAsie.php");			
		}
		else if( $_GET['chiffre'] == 7){
					include("vue/contes/pagesAffichage/torture.php");			
		}
		else if( $_GET['chiffre'] == 8){
					include("vue/contes/pagesAffichage/oursCaverne.php");			
		}
		else if( $_GET['chiffre'] == 9){
					include("vue/contes/pagesAffichage/neanderthal.php");			
		}
		else if( $_GET['chiffre'] == 10){
					include("vue/contes/pagesAffichage/entreeClanAdverse.php");			
		}
		else if( $_GET['chiffre'] == 11){
					include("vue/contes/pagesAffichage/tortureEchec.php");			
		}
		else if( $_GET['chiffre'] == 12){
					include("vue/contes/pagesAffichage/tortureReussite.php");			
		}
		else if( $_GET['chiffre'] == 13){
					include("vue/contes/pagesAffichage/neanderthalB.php");			
		}
		else if( $_GET['chiffre'] == 14){
					include("vue/contes/pagesAffichage/neanderthalSucces.php");			
		}
		else if( $_GET['chiffre'] == 15){
					include("vue/contes/pagesAffichage/neanderthalEchec.php");			
		}
		
		
	}

	



