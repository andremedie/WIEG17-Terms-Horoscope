<?php


if(isset($_COOKIE['terms'])){	// Våra horoskop-cookies finns
	// identifiera dessa värden
    $personnummer = $_POST['personnummer'];
    
    
}
else{ // Annars skickas tillbaka till disclaimer
	header('Location: disclaimer.php');
}
?>