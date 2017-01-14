<HTML>
	<HEAD>
	</HEAD>
		<BODY>
<?php
$con=mysqli_connect("localhost","root","","SIOA_TP_PRJ1");
if (!$con) {
	die('Connexion impossible : ' . mysqli_error());
}
echo 'Connexion Etablie'
?>
			<!--
			
				<p>Identifiants</p>
				<p>Login : <input type="text" name="login"></p>
				<p>Mot de Passe : <input type="text" name="mdp"></p><br>
			-->	
			
			<form name="gestion_materiel" method="POST">
				<p>Details du Produit</p>
				<p>Nom du Materiel : <input type="text" name="nomModeleMat"></p>
				<p>Caractéristiques du Materiel : </p><textarea input type="text" name="caracteristiquesMat" rows=5 cols=40></textarea>
				<p>Date d'Achat : <input type="date" name="dateAchat"></p>
				<p>Choix du Type de Matériel : </p>
					<p><ul>Type de Matériel : 	
					<SELECT>
						<OPTION> </OPTION>
						<?php 
							$req = "SELECT numTypeMat, nomTypeMat FROM type_mat";
							$result = $con->query($req);
							$list = mysqli_fetch_array($result);
							for($i = 0; $i<$list.size; $i++)
							{ 
						?>			
							<OPTION value="<?php echo $ligne['numTypeMat']; ?>"> <?php echo $ligne['nomTypeMat']; ?> </OPTION>
						<?php	
							} 						
						?>			
					</SELECT></ul></p>
					
					<p><ul>Marque : 
					<SELECT>	
						<OPTION> </OPTION>
						<?php 
							$req = "SELECT numMarque, nomMarque FROM marque";
							$result = $con->query($req);
							while($ligne = mysqli_fetch_array($result))
							{ 
						?>			
							<OPTION value="<?php echo $ligne['numMarque'].$ligne['nomMarque']; ?>"> <?php echo $ligne['numMarque'].'. '.$ligne['nomMarque']; ?> </OPTION>
						<?php	
							} 						
						?>
					</SELECT></ul></p>
					<p><ul>Login : 
					<SELECT>
						<OPTION> </OPTION>
						<?php 
							$req = "SELECT loginEmp FROM employe";
							$result = $con->query($req);
							while($ligne = mysqli_fetch_array($result))
							{ 
						?>			
							<OPTION value="<?php echo $ligne['loginEmp']; ?>"> <?php echo $ligne['loginEmp']; ?> </OPTION>
						<?php	
							} 						
						?>											
					</SELECT></ul></p>
			</form>
			
		</BODY>
</HTML>
