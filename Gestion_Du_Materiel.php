<HTML><HEAD><BODY>
<?php
$con=mysqli_connect("localhost","root","","SIOA_TP_PRJ1");
if (!$con) {
	die('Connexion impossible : ' . mysqli_error());
}
echo 'Connexion Etablie'
?>
			<!--
			Modifiable et incrementable aux tables
			nomModeleMat			= Nom du Materiel
			caracteristiquesMat		= Caractéristiques
			dateAchat				= Date d'achat

			Non modifiable
			loginEmp				= Identifiants de l'employer
			numTypeMat				= Catégorie
			numMarque				= Numero de Marque
			
			<form name="gestion_materiel" method="POST">
				<p>Identifiants</p>
				<p>Login : <input type="text" name="login"></p>
				<p>Mot de Passe : <input type="text" name="mdp"></p><br>
			-->	
				
<?php
	//$req="SELECT loginEmp, passwordEmp FROM employe WHERE loginEMP=".$_POST['login']."";
	//$ligne=mysqli_fetch_array($req);
?>
				<p>Details du Produit</p>
				<p>Nom du Materiel : <input type="text" name="nomModeleMat"></p>
				<p>Caractéristiques du Materiel : </p><textarea input type="text" name="caracteristiquesMat" rows=5 cols=40></textarea>
				<p>Date d'Achat : <input type="date" name="dateAchat"></p>
				<p>Choix du Type de Matériel : </p>
					<p><ul>Type de Matériel : 	
					<SELECT>
						<OPTION> </OPTION>
						<?php 	
							$req="SELECT numTypeMat, nomTypeMat FROM type_mat";
							mysqli_query($req);
							foreach(mysqli_fetch_array($req) as $ligne)
							{ 
						?>			
							<OPTION <?php echo $ligne['numTypeMat'].'. '.$ligne['nomTypeMat'];?>> </OPTION>
						<?php	
							} 						
						?>			
					</SELECT></ul></p>
					
					<p><ul>Marque : 
					<SELECT>	
						<OPTION> </OPTION>
						<OPTION>1. Lenovo </OPTION>
						<OPTION>2. Dell </OPTION>
						<OPTION>3. Hewtlett-Packard </OPTION>
						<OPTION>4. Lexmark </OPTION>
						<OPTION>5. Canon </OPTION>
						<OPTION>6. Epson </OPTION>
						<OPTION>7. Cisco </OPTION>
						<OPTION>8. Netgear </OPTION>
					</SELECT></ul></p>
					<p><ul>Login : 
					<SELECT>	
						<OPTION> </OPTION>
						<OPTION>Login1</OPTION>
						<OPTION>Login2</OPTION>
						<OPTION>Login3</OPTION>											
					</SELECT></ul></p>
				
				
				
			</form>
		
</BODY></HEAD></HTML>
