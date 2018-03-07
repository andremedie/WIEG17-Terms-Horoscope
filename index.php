<?php 
//include 'disclaimer.php';
?>
<html lang="en">
<head>
<!-- <script src="jquery-3.3.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    function setScope(){
        $.ajax({
            url: "sethoroscope.php",
            method: "POST",
            data : {
                personnummer: $("#Input").val()
            },
            success: function(response, status) {
                $("#Input").append(response);
            }
        });
    }


        function getScope() {
        $.ajax({
                url: "gethoroscope.php",
                method: "POST",
                data : {
                    personnummer: $("#Target").val()
                },
                success: function(response, status) {
                    $("#Target").append(response);
                },
        });
    }
    
});


</script>
</head>
<body>

<div id="Target"></div>

   <!-- <form method="POST"> -->

        Vi vill ha ditt Personnummer:<input type="text" name="personnummer" id="Input"></input><br/>
        <button type="submit" onclick="getScope()">Skicka iväg</button>
  <!-- </form> -->

</body>
</html>
