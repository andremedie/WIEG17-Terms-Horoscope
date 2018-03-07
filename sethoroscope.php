<?php


if(isset($_POST)){	// Våra horoskop-POSTS finns
	// identifiera dessa värden
    $terms = $_POST['terms'];
    $personnummer = $_POST['personnummer'];

    
}
else{ // Annars skickas tillbaka till disclaimer
	header('Location: disclaimer.php');
}
?>