<?php 
require_once('../config.php');
echo '<hr>'.'Ajout d\'utilisateur'.'<br><br>'; 
$listService 	= ServiceDB::getAllService();
$listTypeLogin 	= TypeLoginDB::getAllTypeLogin();
?>

<HTML>
	<BODY>
		<form name="insertion" method="POST">
			<table cellspacing="2" cellpadding="2" border="1">
				<tr><td>E-Mail : 							</td>
					<td><input type="text" name="email"/>	</td>
				</tr>
				<tr><td>Mot de passe : 						</td>
					<td><input type="password" name="mdp"/>	</td>
				</tr>
				<tr><td>Nom : 								</td>
					<td><input type="text" name="nom"/>		</td>	
				</tr>
				<tr><td>Prenom : </td>
					<td><input type="text" name="prenom"/>	</td>
				</tr>
				<tr><td>Tel. : 								</td>
					<td><input type="text" name="numtel"/>	</td>
				</tr>
				<tr><td>Date d'embauche : 					</td>
					<td><input type="date" name="date"/>	</td>
				</tr>
				<tr><td>Service : 							</td>
					<td><SELECT name="service">
						<OPTION></OPTION>
						<?php foreach ($listService as $service) { ?>
							<OPTION value="<?php echo $service->getNumService(); ?>"><?php echo $service->getNomService(); ?></OPTION>
						<?php } ?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td>Type de login  :			 		</td>
					<td><SELECT name="typelogin">
						<OPTION></OPTION>
						<?php foreach ($listTypeLogin as $typeLogin) { ?>
							<OPTION value="<?php echo $typeLogin->getNumTypeLogin(); ?>"><?php echo $typeLogin->getNomTypeLogin(); ?></OPTION>
						<?php } ?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td>
					<td><input type='submit' name='valid' value='Ok'/>
					<?php
						$email = isset($_POST['email']) ? $_POST['email'] : NULL;
						$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;
						$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
						$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
						$date = isset($_POST['date']) ? $_POST['date'] : NULL;
						$service = isset($_POST['service']) ? $_POST['service'] : NULL;
						$typelogin = isset($_POST['typelogin']) ? $_POST['typelogin'] : NULL;
						$numtel = isset($_POST['numtel']) ? $_POST['numtel'] : NULL;
						$con=mysqli_connect("localhost","root","","SIO1A_TP1_PRJ");
						$req="INSERT INTO employe VALUES ('".$email."','".$mdp."','".$nom."','".$prenom."','".$date."','".$numtel."','".$service."','".$typelogin."')";
						$res=mysqli_query($con,$req);
						mysqli_close($con);
					?>
					</td>
				</tr>
			</table>
		</form>
	</BODY>
</HTML>