<?php 

require 'Armoire.php';

$armoire = Armoire::all(50, 0);


if (isset($_GET['id'])) {

	$getDataId = Armoire::get($_GET['id']);

	echo '<div>Id : ' .$getDataId->id. '</div>';
	echo '<div>Couleur : ' .$getDataId->couleur. '</div>';
	echo '<div>Pointure : ' .$getDataId->pointure. '</div>';
	echo '<div>Température de lavage : ' .$getDataId->temp_lavage. '</div>';
	echo '<div>Description : ' .$getDataId->description. '</div>';
	echo '<div>Date de lavage : ' .$getDataId->date_lavage. '</div>';


} else {

	?><!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Exercice Static Method</title>
	</head>
	<body>

		<table>
			<tr>
				<td>id</td>
				<td>pointure</td>
				<td>temp_lavage</td>
				<td>description</td>
				<td>couleur</td>
				<td>date_lavage</td>
			</tr>

			<?php foreach ($armoire as $chaussette): ?>
			<tr>
				<td><?= $chaussette->id; ?></td>
				<td><?= $chaussette->couleur ?></td>
				<td><?= $chaussette->pointure; ?></td>
				<td><?= $chaussette->temp_lavage ?> °C</td>
				<td><?= $chaussette->description; ?></td>
				<td><?= $chaussette->date_lavage; ?></td>
			</tr>

		<?php endforeach ?>
	</table>
	
</body>
</html>
<?php } ?>