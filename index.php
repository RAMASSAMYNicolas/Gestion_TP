<?php 
require_once('config.php');
echo 'Page index \n'; 
$listMarque 	= MarqueDB::getAllMarque();
$listTypeMat 	= TypeMatDB::getAllTypeMat();
$listEmploye 	= EmployeDB::getAllEmploye();
?>

<HTML>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Crud en php</title>
	</HEAD>

	<BODY>
		<hr><br />
		<form name="gestion_materiel" method="POST">
			<p><u>Nom du Matériel : 				</u><br /><input type="text" name="nomModeleMat"></p>
			<p><u>Caractéristiques du Matériel : 	</u><br /><textarea input type="text" name="caracteristiquesMat" rows=5 cols=40></textarea></p>
			<p><u>Date d'achat : 					</u><br /><input type="date" name="dateAchat"></p>
			<p><u>Choix du Type de Matériel : 		</u><br />
				<table cellpadding="5" cellspacing="1" width="50%">
					<tr>
						<th align="left" valign="middle">Type de matériel : 	</th>
						<th align="left" valign="middle">Marque du matériel : 	</th>
						<th align="left" valign="middle">Login  :				</th>
					</tr>
					<tr>
						<td  valign="middle" >
							<SELECT>
								<OPTION></OPTION>
								<?php foreach ($listTypeMat as $typeMat) { ?>
								<OPTION value="<?php echo $typeMat->getNumTypeMat(); ?>"><?php echo $typeMat->getNumTypeMat().'. '.$typeMat->getNomTypeMat(); ?></OPTION>
								<?php } ?>
							</SELECT>
						</td>
						<td  valign="middle">
							<SELECT>
								<OPTION></OPTION>
								<?php foreach ($listMarque as $marque) { ?>
								<OPTION value="<?php echo $marque->getNumMarque(); ?>"><?php echo $marque->getNumMarque().'. '.$marque->getNomMarque(); ?></OPTION>
								<?php } ?>
							</SELECT>
						</td>
						<td  valign="middle">
							<SELECT>
								<OPTION></OPTION>
								<?php foreach ($listEmploye as $employe) { ?>
								<OPTION value="<?php echo $employe->getNumTypeMat(); ?>"><?php echo $employe->getNumTypeMat().'. '.$employe->getNomTypeMat(); ?></OPTION>
								<?php } ?>
							</SELECT>
						</td>
					</tr>
				</table>
			</p>
			<input type="submit" name="add" value="Ajouter un Matériel">
		</form>
	</BODY>
</HTML>