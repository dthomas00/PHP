<html>
<head>
<style>
.error {color: #FF8C00;}
</style>
</head>
<body>
<?php
$name = $email = $country = $website = "";
$nameErr = $emailErr = $countryErr = $websiteErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST");{
	if(empty($_POST["name"])){
		$nameErr = "Name is Required";
	}else{
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z]*$/",$name)){
		$nameErr = "Only letters and spaces can be used";}
	}
	if(empty($_POST["email"])){
		$emailErr = "Please input an email address";
	}else{
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailErr = "Only valid email addresses accepted";}
	}
	if(empty($_POST["country"])){
		$countryErr = "Please input a country";
	}else{
		$country = test_input($_POST["country"]);
		if(!preg_match("/^[a-zA-Z]*$/",$country)){
		$countryErr = "Only letters and spaces accepted";}
	}
	if(empty($_POST["website"])){
		$websiteErr = "Please input a valid URL";
	}else{
		$website = test_input($_POST["website"]);
		if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
		$websiteErr = "Please input a valid url";}
	}}
	
	function test_input ($data){
	$data = trim ($data);
	$data = stripcslashes ($data);
	$data = htmlspecialchars ($data);
	return $data;}
	?>
	
<h2>PHP FormValidationWithChecksAndComplete</h2>
<p><span class = "error"> * required field </span></p>
<form method = "post" action ="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
Name: <input type = "text" name = "name" value = "<?php echo $name;?>">
<span class ="error"> * <?php echo $nameErr;?></span>
<br><br>
Country: <input type = "text" name = "country" value = "<?php echo $country;?>">
<span class ="error"> * <?php echo $countryErr;?></span>
<br><br>
Email: <input type = "text" name = "email" value = "<?php echo $email;?>">
<span class ="error"> * <?php echo $emailErr;?></span>
<br><br>
Website: <input type = "text" name = "website" value = "<?php echo $website;?>">
<span class ="error"> * <?php echo $websiteErr;?></span>
<br><br>
<input type = "submit" name = "submit" value = "Submit">

<?php
echo "<h2> User Input </h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $country;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
?>


</body>
</html>
	
