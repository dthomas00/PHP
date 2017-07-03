<html>
<head>
</head>
<body>
<?php 
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa") . "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date ("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa",$d) . "<br>";
?>

&copy;2010-<?php echo date ("Y");?>




</body>
</html>