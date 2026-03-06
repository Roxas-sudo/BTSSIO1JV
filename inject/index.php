<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>connexion</title>
</head>
<body>

	<form method="post">
		
		<input type="text" name="mail" placeholder="Adresse mail"><br>
		<input type="text" name="mdp" placeholder="mot de passe"><br>
		<input type="submit" name="valider" value="valider"><br>

	</form>

	<?php

	// conexion a la bdd avec l'extension mysli() <------ classe

	$bdd = new mysqli("localhost","root", "", "logintest");

	if (isset($_POST['valider'])) {
		$mail = htmlspecialchars(trim($_POST['mail']));
		$mail = htmlspecialchars(trim($_POST['mdp']));


		//Version non sécurisée
		$requete = "SELECT * FROM user where mail = ? and mdp= ?";

//preparer la requête
$stmt = $bdd->prepare($requete);
//associer les variables
$stmt->bind_param("ss",$mail,$mdp);
//executer
$stmt->execute();
//récupération des résultats
$lesResultats = $stmt->get_result();



		if ($unResultat = $lesResultats->fetch_assoc()) {
			echo "Session de : " . $unResultat["pseudo"];
		}else
		{
		echo "<h3 style='color:red'>Identifiant et mot de passe invalide</h3>";
		}
	}

	?>

</body>
</html>