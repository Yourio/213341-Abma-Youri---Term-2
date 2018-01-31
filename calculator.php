<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>

<style>
	body {background: url(blueGradient.png);}
</style>

<body>

<form>
	<input type="text" name="num1" placeholder="Number">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<input type="text" name="num2" placeholder="Number">
	<br>
	<button type="submit" name="submit" value="submit">Calculate</button>
	
</form>
<p>The answer is:</p>
<?php
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case "None":
				echo "Please select an operator";
			break;

			case "Add":
				echo $result1 + $result2;
			break;

			case "Subtract":
				echo $result1 - $result2;
			break;

			case "Divide":
				if($result2 == 0) {
					echo "Error, You can't divide by zero!";
				}
				else {echo $result1 / $result2;}
				
			break;

			case "Multiply":
				echo $result1 * $result2;
			break;
		}
	}
?>

</body>

</html>