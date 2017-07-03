<html>
<head>
</head>
<body>
<?php
$systems = array
(
array ("Xbox One", 3, 6),
array ("PS4", 4, 7),
array ("PC", 6, 10),
array ("Roku", 0, 0)
);

for ($row =0; $row <4; $row++) {
	echo "<p><b>Row Number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col <3; $col++){
	echo"<li>".$systems[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>
</body>
</html>