<html>
<head>
<style>
.error {color: #006680;}
</style>
</head>
<body>
<?php 
$nameErr = $movieErr = $emailErr = $urlErr = "";
$name = $movie = $email = $url = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr = "Enter a name!";
	}	else	{
	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z]*$/",$name)){
	$nameErr = "Only letters and spaces";}
	}
	
	if(empty($_POST["movie"])){
		$movieErr = "Enter a movie name!";
	}	else	{
	$movie = test_input($_POST["movie"]);
	if (!preg_match("/^[a-zA-Z]*$/",$movie)){
	$movieErr = "Enter a movie name";}
	}
	if(empty($_POST["email"])){
		$emailErr = "Enter a valid email";
	}	else	{
	$email = test_input ($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$emailErr = "Enter a valid email address";}
	}
	if(empty($_POST["url"])){
		$urlErr = "";
	}	else	{
	$url = test_input ($_POST["url"]);
	if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
	$urlErr = "Enter a valid url";}
	}
}
	
	
	function test_input ($data){
		$data = trim ($data);
		$data = stripcslashes ($data);
		$data = htmlspecialchars ($data);
		return $data;
	}
	?>
	<h2> Rewritten validation table with checks</h2>
	<p><span class = "error">* required field </span></p>
	<form method = "post" action ="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
	
	Name: <input type = "text" name = "name">
	<span class "error"><?php echo $nameErr;?></span>
	<br><br> 
	Movie: <input type  = "text" name = "movie">
	<span class "error"><?php echo $movieErr;?></span>
	<br><br>
	Email: <input type = "text" name = "email"
	<span class = "error"><?php echo $emailErr;?></span>
	<br><br>
	URL: <input type = "text" name = "url"
	<span class = "error"><?php echo $urlErr;?></span>
	<br><br>
	<input type = "submit" name = "submit" value = "Submit"
	</form>
	
	<?php
	echo "<h2> Your input </h2>";
	echo $name;
	echo "<br>";
	echo $movie;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $url;
	?>
	
	</body>
	</html>
	