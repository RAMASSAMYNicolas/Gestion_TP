<?php
$var1 = 0;
	if (isset($_GET['var1'])){
		if ($_GET['var1'] == 1){ include('CreateEmploye.php');
		echo '<HEAD>'.'<title>Ajout d\'utilisateur</title>'.'</HEAD>';}
		else
			if ($_GET['var1'] == 2){ include('consultation.php'); }
			else	
				if ($_GET['var1'] == 3){ include('consultationinterventions.php'); }
					else	
						if ($_GET['var1'] == 4){ include('gestionInterventions.php'); }
						else	
							if ($_GET['var1'] == 5){ include('resolutionIntervention.php'); }
							else	
								if ($_GET['var1'] == 6){ include('CreateMateriel.php'); 
									echo '<HEAD>'.'<title>Ajout de matériel</title>'.'</HEAD>';}
								else	
									if ($_GET['var1'] == 7){ include('ReadMateriel.php');
										echo '<HEAD>'.'<title>Gestion du matériel</title>'.'</HEAD>'; }
	}
?>