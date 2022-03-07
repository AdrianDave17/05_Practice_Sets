<?php
   // test cookies if is set, display if set
$cookie_name = "auth";
	$cookie_value = "ok";

	if(!isset($_POST['username'])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>