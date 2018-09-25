<html>
<link rel="stylesheet" href="styles.css">
<body>
	<title>Multiplication Test</title>
	<h1>Multiplication Test</h1>
	<?php
session_start();
error_reporting(0);
$submitButton="";
$state="";
$num1 = $_SESSION["number1"];
$num2 = $_SESSION["number2"];
$number3 = $_POST["number3"];

if ($number3 == ($num1 * $num2)) {
    $state="You are Right!!! Good Job.";
    $submitButton= "More Practice?";
	
} else {
    $state= "You are Wrong. The correct answer is ".($num1 * $num2);
    $submitButton= "Try Again!";
	   
}
?>
	<p><?php echo $state ?></p>
 <form method="POST" action="Multiplication_Test.php">
    <input type="submit" value="<?php echo $submitButton; ?>">
    </form>
</body>
</html>