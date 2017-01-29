<?php 
echo 'Liste des Matériels'; 
require_once('../config.php');
$listMateriel 	= MaterielDB::getAllMateriel();
?>
<HTML>
	<BODY>
		<hr>
		<table cellpadding="5" cellspacing="1" width="100%" border="1">
			<thead>
				<th align="left" valign="middle">Réfence du matériel : 	</th>
				<th align="left" valign="middle">Modele : 				</th>
				<th align="left" valign="middle">Caractéristiques  :	</th>
				<th align="left" valign="middle">Date d'achat  :		</th>
				<th align="left" valign="middle">Marque  :				</th>
				<th align="left" valign="middle">Type de matériel :		</th>
				<th align="left" valign="middle">Login  :				</th>
				<th align="left" valign="middle" colspan=3>Edition  :	</th>
			</thead>
			<tbody>
	           	<?php foreach ($listMateriel as $materiel) { ?>
	           	<tr>
	           	<form name="materiel" method="POST" >
	           		<?php 
	           		echo 	'<td>' . $materiel->getRefMat()				. '</td>'.
	           				'<td>' . $materiel->getModel()				. '</td>'.
	           				'<td>' . $materiel->getCaracteristiques()	. '</td>'.
	           				'<td>' . $materiel->getDateAchat()			. '</td>'.
	           				'<td>' . $materiel->getNumMarqueMat()		. '</td>'.
	           				'<td>' . $materiel->getNumTypeMat()			. '</td>'.
	           				'<td>' . $materiel->getLogin()				. '</td>'.
	           				'<td>' . '<input type="submit" name="read" value="Read"/>'		. '</td>' .
	           				'<td>' . '<input type="submit" name="modifiy" value="Modify"/>'	. '</td>' .
	           				'<td>' . '<input type="submit" name="delete" value="Delete"/>'	. '</td>'.
	           				'<td>' . '<button><a href="'.$materiel->getRefMat().'">DELETE '.$materiel->getRefMat().'</a></button>'.'</td>' ;
	           				if(isset($_POST['delete'])){ 
	           					$connectionDB = new ConnectionDB();
								$con = $connectionDB->getCon();
								$req = "DELETE FROM materiel WHERE RefMat='".$materiel->getRefMat()."' ";			
								if (mysqli_query($con, $req)) { echo '<td>'.'Materiel supprimé avec succès'.'</td>'; } 
					else { echo '<td colspan=2>'.'Erreur: Le matériel ne peut être supprimé'.'</td>'; } 
	           				}
	           		?>
	           	</form>
	           	</tr>
				<?php } ?>
			</tbody>
		</table>
	</BODY>
</HTML>