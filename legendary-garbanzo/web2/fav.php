<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        <?php
    #test if the username varaiable is existing
    if (isset($_POST["username"])) 
         { 
        	echo "Thanks for your selection ".($_POST["username"]).'<br>';
        	echo "You really enjoyed ".($_POST["dish"]).'<br>';
        	echo "-especially with a ".($_POST["color"])." wine";
        }
        #test if the user input his / her name
        if (is_null($_POST["username"]))  
        {
        	echo "Please fill the empty field";
        }
        
    ?>
    ?>
</body>
</html>