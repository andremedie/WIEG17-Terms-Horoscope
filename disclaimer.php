<?php
echo "<h1>Användarvillkor⚠️</h1>";

echo "<div>För att du ska kunna gå vidare härifrån... stänger du antingen av webbläsaren, <br/> ..eller så bockar du i användarvillkoren och får reda på lite Horoskop uppgifter om dig själv🐶</div><br/>";

echo "<form method='POST'>";

echo "<input type='checkbox' name='terms'>Jag Accepterar Villkoren</input><br/><br/>";

echo "<input type='submit'>";

echo "</form>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    
    if( $_POST) {
        $cookie_number = $_POST['terms'];
        setcookie('terms', $cookie_number, time() + (86400 * 7), "/");

   } else {
    echo "<h3>Vänta nu, du måste klicka i användarvillkoren!🦁</h3>";
}
   

}
if(isset($_POST['terms'])){	
    header('Location: index.php');
} 



?>
