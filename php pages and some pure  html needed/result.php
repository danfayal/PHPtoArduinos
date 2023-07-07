<?php
$myfile = fopen("mybd.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("mybd.txt"));
fclose($myfile);
header("refresh: 1");
exit;

?>
