<?php
session_start();

	if (!isset($_SESSION['num_visits'])) { 
		$_SESSION['num_visits'] = 1; 
	}
	else {
		$_SESSION['num_visits']++;
	}
	
?>
<!DOCTYPE html>
<html>

<body>

<h1>Hello</h1>
<p>You have visited this page <?php echo($_SESSION['num_visits']); ?> times</p>
	
<p><a href="?reset=true">Reset</a></p>

<?php 
	if ($_SESSION['num_visits'] == 5) {
		echo "Thank you for visiting the page a lot.";
	}
	
	if ($_SESSION['num_visits'] == 10) {
		header("Location: congratulations.php");
	}
?>	

</body>
</html>









