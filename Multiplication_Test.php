<html>
<link rel="stylesheet" href="styles.css">
<body>
	<title>Multiplication Test</title>
	<h1>Multiplication Test</h1>
	<?php
	error_reporting(0);

	session_start();
	$_SESSION[number1] = rand (0, 12);
	$_SESSION[number2] = rand (0, 12);
	$number3 = 0;
	?>
	<p> Multiply <?php echo $_SESSION[number1] ?> and <?php echo $_SESSION[number2] ?> together </p>
	
		<form action="Multiplication_Test_Page_2.php" method="POST">
		Your Answer: <input type="integer" name="number3" />
		<input type="submit" value="Submit">
		</form>	
	
</body>
</html>