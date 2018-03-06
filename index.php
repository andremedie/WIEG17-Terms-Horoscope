<?php 
//include 'disclaimer.php';
?>
<html lang="en">
<head>
<script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<div id="target"></div>

   <!-- <form method="POST"> -->

        Ditt Personnummer:<input type="text" name="personnummer" id="Input"></input><br/>
        <button type="submit" value="Skicka iväg" onclick="setScope()"></button>
   <!-- </form> -->

<script>
function setScope(){
$.ajax({
    url: "sethoroscope.php",
    method: "POST",
    data : {
        "personnummer": $("#Input").val()
    },
    success: function(nånting) {
        $("#Target").append(nånting);
    },

});

}

</script>
</body>
</html>
