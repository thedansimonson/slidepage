<?php

$slide = 0;
if(isset($_GET["slide"])) $slide = $_GET["slide"];

include "header.php"; //needs $slide set
include "slide_".$slide.".htm";
include "footer.php"; //needs $slide set
?>
