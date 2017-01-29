<?php 
require_once('../config.php');
echo '<hr>'.'Ajout d\'un matériel'.'<br><br>'; 
$listMarque 	= MarqueDB::getAllMarque();
$listTypeMat 	= TypeMatDB::getAllTypeMat();
$listEmploye 	= EmployeDB::getAllEmploye();

$aRefMat 				= isset($_POST['refMat']) ? $_POST['refMat'] : NULL;
$aNomModeleMat 			= isset($_POST['nomModeleMat']) ? $_POST['nomModeleMat'] : NULL;
$aCaracteristiquesMat 	= isset($_POST['caracteristiquesMat']) ? $_POST['caracteristiquesMat'] : NULL;
$aDateAchatMat 			= isset($_POST['dateAchatMat']) ? $_POST['dateAchatMat'] : NULL;
$aEmploye 				= isset($_POST['loginEmp']) ? $_POST['loginEmp'] : NULL;
$aNumTypeMat 			= isset($_POST['numTypeMat']) ? $_POST['numTypeMat'] : NULL;
$aNumMarque 			= isset($_POST['numMarque']) ? $_POST['numMarque'] : NULL;
?>

<HTML>
	<BODY>
		<form name="ajout_materiel" method="POST" >
			<table align="center" valign="center" >
				<tr>
					<td><p>Référence du Matériel : 			<br></p></td>
					<td><input type="text" name="refMat">			</td>
				</tr>
				<tr>
					<td><p>Modele du Matériel : 			<br></p></td>
					<td><input type="text" name="nomModeleMat">		</td>
				</tr>
				<tr>
					<td><p>Caractéristiques du Matériel : 	<br></p></td>
					<td><textarea input type="text" name="caracteristiquesMat" ></textarea></td>
				</tr>
				<tr>
					<td><p>Date d'achat :		 			<br></p></td>
					<td><input type="date" name="dateAchatMat">		</td>
				</tr>
				<tr>
					<td><p>Type de matériel :			 	<br></p></td>
					<td><SELECT name="numTypeMat">
							<OPTION></OPTION>
							<?php foreach ($listTypeMat as $typeMat) { ?>
								<OPTION value="<?php echo $typeMat->getNumTypeMat(); ?>"><?php echo $typeMat->getNomTypeMat(); ?></OPTION>
							<?php } ?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td><p>Marque du matériel : 			<br></p></td>
					<td><SELECT name="numMarque">
						<OPTION></OPTION>
						<?php foreach ($listMarque as $marque) { ?>
							<OPTION value="<?php echo $marque->getNumMarque(); ?>"><?php echo $marque->getNomMarque(); ?></OPTION>
						<?php } ?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td><p>Employé  :			 			<br></p></td>
					<td><SELECT name="loginEmp">
						<OPTION></OPTION>
						<?php foreach ($listEmploye as $employe) { ?>
							<OPTION value="<?php echo $employe->getLogin(); ?>"><?php echo $employe->getName().' '.$employe->getFirstName(); ?></OPTION>
						<?php } ?>
						</SELECT>
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" name="add" value="Ajouter"></td>
				</tr>
				<?php
				if(isset($_POST['add'])){
					$connectionDB = new ConnectionDB();
					$con = $connectionDB->getCon();
					$req = "INSERT INTO materiel VALUES('".$aRefMat."',
														'".$aNomModeleMat."', 
														'".$aCaracteristiquesMat."', 
														'".$aDateAchatMat."', 
														'".$aEmploye."', 
														'".$aNumTypeMat."', 
														'".$aNumMarque."')";					
					if (mysqli_query($con, $req)) { echo '<td>'.'New record created successfully'.'</td>'; } 
					else { echo '<td colspan=2>'.'Erreur: un materiel possède déjà cette référence'.'</td>'; } 
				}
				?>

			</table><br>
		</form>
	</BODY>
</HTML>