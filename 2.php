<?php
// define variables and set to empty values
$usernameErr = $emailErr = $numberErr = "";
$username = $email = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
		$usernameErr = "Username is required";
	} else {
		$username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
			$usernameErr = "Only letters and white space allowed"; 
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
		}
	}

	if (empty($_POST["number"])) {
		$number = "";
	} else {
		$number = test_input($_POST["number"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("[+][0-9]{6,12}",$number)) {
			$numberErr = "Invalid number format"; 
		}
	}


}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Data Validation</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Username: <input type="text" name="username" value="<?php echo $username;?>">
	<span class="error">* <?php echo $usernameErr;?></span>
	<br><br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>
	Number: <input type="text" name="number" value="<?php echo $number;?>">
	<span class="error"><?php echo $numberErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $number;
echo "<br>";

?>

</body>
</html>