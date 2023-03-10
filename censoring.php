<?php

$paragraph = $_GET["paragraph"];
$censored_word = $_GET["censored"];
echo $paragraph;
echo "<br>";
echo strlen($paragraph);
echo "<br>";

echo str_replace($censored_word, "***", $paragraph);


?>