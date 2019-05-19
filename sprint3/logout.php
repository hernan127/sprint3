<?php
require_once("autoload.php");

setcookie("password","",time()-1);
redirect("index.php");
?>
