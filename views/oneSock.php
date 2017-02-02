<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice Static Method</title>
</head>
<body>
	<h1>Affichage des champs relatifs à l'id requis</h1>

	<ul>
		<li>Id : <?= $getDataId->id; ?></li>
		<li>Couleur : <?= $getDataId->couleur; ?></li>
		<li>Pointure : <?= $getDataId->pointure; ?></li>
		<li>Température de lavage : <?= $getDataId->temp_lavage; ?> °C</li>
		<li>Description : <?= $getDataId->description; ?></li>
		<li>Date de lavage : <?= $getDataId->date_lavage; ?></li>
	</ul>
</body>
</html>