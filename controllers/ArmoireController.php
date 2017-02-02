<?php 

require __DIR__ .'/../models/Armoire.php';

$armoire = Armoire::all(50, 0);


if (isset($_GET['id'])) {

	$getDataId = Armoire::get($_GET['id']);

	require __DIR__ .'/../views/oneSock.php';

} else {

	require __DIR__ .'/../views/allSocks.php';
}

?>