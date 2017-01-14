<?php echo 'Page read'; ?>

<HTML>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Crud en php</title>
	</HEAD>

	<BODY>
		<hr><br />
		<input type="submit" name="add" value="Ajouter un Matériel"><br />
		<br /><table cellpadding="5" cellspacing="1" width="100%">
			<thead>
				<th align="left" valign="middle">Réfence du matériel : 	</th>
				<th align="left" valign="middle">Nom du  modele : 		</th>
				<th align="left" valign="middle">Caractéristiques  :	</th>
				<th align="left" valign="middle">Date d'achat  :		</th>
				<th align="left" valign="middle">Login  :				</th>
				<th align="left" valign="middle">Type de matériel :		</th>
				<th align="left" valign="middle">Marque  :				</th>
				<th align="left" valign="middle" colspan=3>Edition  :				</th>
			</thead>
			<tbody>
				<?php include 'MaterielDB.class.php';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . "" . '</td>';
                	echo '<td>' . 
                		'<td><input type="submit" name="read" value="Read"></td>
					   	<td><input type="submit" name="update" value="Update"></td>
						<td><input type="submit" name="delete" value="Delete"></td>' . '</td>';
                ?>
			</tbody>

		</table>
	</BODY>
</HTML>
