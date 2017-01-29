<?php 
echo 'Connexion'; 
require_once('config.php');
$listEmploye 	= EmployeDB::getAllEmploye();
?>

<HTML>
	<HEAD>
        <title>Connexion</title>
	</HEAD>

	<BODY>
		<hr><br>
		<table align="center" valign="middle" width="80%" border="1">
			<tr>
				<td valign="middle" width="40%">
						<img src="http://www.lyc-vilgenis-massy.ac-versailles.fr/wp-content/uploads/sites/62/2016/08/LogoVilgenis-h156-vert719430-300x151.png" width="80%">	
				</td>
				<td align="center" valign="middle"><br>
					<form name="connexion" method="POST" action="Index.php">
						<p>Adresse e-Mail : <br /><input type="text" name="loginEmp"></p>
						<p>Mot de passe : 	<br /><input type="text" name="passwordEmp"></p>
						
						<?php
							$con = mysqli_connect('localhost', 'root', '', 'SIOA_TP_PRJ1');
							if(isset($_POST['connect'])) {
								if (empty($_POST['loginEmp']) || empty($_POST['passwordEmp']) ) {
			        				echo '<p>'.'Veuillez remplir tous les champs'.'</p>';
			    				}
			    				else {
			    					$sql = "SELECT loginEmp,passwordEmp FROM employe WHERE loginEmp ='".$_POST['loginEmp']."' AND '".$_POST['passwordEmp']."' ";
									$req = mysqli_query($con, $sql);
									$data = mysqli_fetch_assoc($req);
									if ($data['loginEmp'] != $_POST['loginEmp']) {
										echo '<p>'.'Identifiant incorrect'.'</p>'; }
									else {
										if ($data['passwordEmp'] != $_POST['passwordEmp']) 
											{ echo '<p>'.'Mot de passe incorrect'.'</p>'; }
										else { header('Location: Views/Menu.php');  }
									}
			    				}
							}
						?>
						<input type="submit" name="connect" value="Connexion" style="float:right;">
					</form>
				</td>
			</tr>
		</table>
		
	</BODY>
</HTML>