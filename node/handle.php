<?php
$myfile = fopen($_GET["book"]+".json", "r") or die("Unable to open file!");
echo fread($myfile,filesize($_GET["book"]+".json"));
fclose($myfile);
?>
