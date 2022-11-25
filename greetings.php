<?php

$name = $_GET["name"];
$badWord = $_GET["badWord"];
echo $name .'<br>';
echo strlen($name) .'<br>';

$name = str_ireplace($badWord, '***', $name);
echo $name .'<br>';
echo strlen($name) .'<br>';

?>