<?php
$myfile = fopen("C:\\wamp64\\www\\PHP test\\name.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("C:\\wamp64\\www\\PHP test\\name.txt"));
fclose($myfile);
?>