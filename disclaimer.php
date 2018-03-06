<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    
    if( $_POST['terms'])
    {
        $cookie_number = $_POST['terms'];
        setcookie('terms', $cookie_number, time() + (86400 * 7), "/");

   }
   

}
if(isset($_COOKIE['terms'])){	
	header('Location: index.php');
}

echo "<h1>Användarvillkor⚠️</h1>";

echo "<div>För att du ska kunna gå vidare härifrån... stänger du antingen av webbläsaren, <br/> ..eller så bockar du i användarvillkoren och får lite smått & gott-erbjudanden av oss ifrån &copyEmotions Clothing🐶</div><br/>";

echo "<form method='POST'>";

echo "<input type='checkbox' name='terms'>Jag Accepterar Villkoren</input><br/><br/>";

echo "<input type='submit'>";

echo "</form>";


?>
