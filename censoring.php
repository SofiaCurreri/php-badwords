<?php

echo $paragraph = $_GET["paragraph"];
var_dump($paragraph);
echo $paragraph;
echo strlen($paragraph);

str_replace("censored", "***", "paragraph");
echo $paragraph;

?>