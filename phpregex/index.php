<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Expression régulière</title>
</head>
<body>

	<h2>Formulaire de connexion</h2>

	<form method="post">
		<input type="text" name="mail" placeholder="Saisir
		email">
		<input type="text" name="mdp" placeholder="Saisir mot 
		de passe">
		<input type="submit" name="Valider">
	</form>
	<?php
	//Les expressions regulieres servent à verifie
	//Le format d'une chaine

	//Nous allons vérifier la conformité de la saisie d'un mail

	//Nous allons créer un motif/pattern contenant une expression réguliere (regex)

	$motifmail = "/^[A-Za-z0-9._-]+@[A-Za-z0-9._-]+\.[A-Za-z0-9.-_].{2,}$/";

	//nous allons utiliser une assertion positive

	$motifmdp = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.\w]).{8,16}$/";

if (isset($_POST['Valider'])) {
	//nous allons recuperer la valeur variable mail
	//envoyer via le formulaire
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp']

		//ensuite nous allons comparer la variable saisie par l'utilisateur avec le motif que l'on a créer grace a une fonction

			if (preg_match($motifmail, $mail) && preg_match($motifmdp, $mdp)){
				echo "Mail conforme";
			}
			else

			echo "Mail non conforme";
}
	?>
</body>
</html>