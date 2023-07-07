

<?php
session_start();

     $namevariable = $_SESSION['username'];
	 
    
   
var_dump($_POST);
date_default_timezone_set("America/Sao_Paulo");
$datahoje = date("d/m/Y");
$horahoje = date("h:i:sa");

$content = $namevariable. " " .$datahoje." " .$horahoje. " " . $_POST["msg"];
$file = fopen('mybd.txt', 'w') or die("can't open file");
fwrite($file, $content);
fclose($file);

unset($_SESSION['meulogin']);  
      session_destroy();  
	header("Location: logout");
?>
