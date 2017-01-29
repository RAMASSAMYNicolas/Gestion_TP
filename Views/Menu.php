<?php 
require_once('../config.php');
$listEmploye 	= EmployeDB::getAllEmploye();
?>

<HTML>
	<BODY>
		<table align="center" cellpadding="5" cellspacing="1" width="80%" >
			<thead>
				<th valign="middle" width="20%">
					<img src="http://www.lyc-vilgenis-massy.ac-versailles.fr/wp-content/uploads/sites/62/2016/08/LogoVilgenis-h156-vert719430-300x151.png" width="100%">		
				</th>
				<th></th>
				<th>Hello</th>
			</thead>

			<tbody>
				<td></td><td></td><td></td>
				<tr>
					<td>
						<p>Utilisateurs</p><?php
							echo '<li>'.'<a href="Menu.php?var1=1">Ajout d\'utilisateur</a>'.'</li>';
							echo '<li>'.'<a href="Menu.php?var1=2">Consultation des employés</a>'.'</li>';
						?>
						<p>Interventions</p><?php
							echo '<li>'.'<a href="Menu.php?var1=4">Demande d\'intervention</a>'.'</li>';
							echo '<li>'.'<a href="Menu.php?var1=5">Résolution d\'interventions</a>'.'</li>';
							echo '<li>'.'<a href="Menu.php?var1=3">Gestion des Interventions</a>'.'</li>';
						?>
						<p>Materiels</p><?php
							echo '<li>'.'<a href="Menu.php?var1=6">Ajout de matériel</a>'.'</li>';
							echo '<li>'.'<a href="Menu.php?var1=7">Gestion du matériel</a>'.'</li>';
						?>
					</td>
					<td></td>
					<td><?php include('../redirection.php') ?></td>
				</tr>
			</tbody>
		</table>

	</BODY>
</HTML>