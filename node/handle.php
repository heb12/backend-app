<?php
$myfile = fopen($_GET["book"]+$_GET["chapter"]+".json", "r") or die("Unable to open file!");
echo fread($myfile,filesize($_GET["book"]+$_GET["chapter"]+".json"));
fclose($myfile);
?>
