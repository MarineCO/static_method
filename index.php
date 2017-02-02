<?php 

require 'Armoire.php';

$armoire = Armoire::all(50, 0);


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
				<td><?= $chaussette->pointure; ?></td>
				<td><?= $chaussette->temp_lavage ?></td>
				<td><?= $chaussette->description; ?></td>
				<td><?= $chaussette->couleur ?></td>
				<td><?= $chaussette->date_lavage; ?></td>
			</tr>

		<?php endforeach ?>
	</table>
	
</body>
</html>