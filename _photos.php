<?php

$dir = './img';

$photos = array();
$cdir = scandir($dir); 
foreach ($cdir as $key => $file) 
{ 
  	if (!is_dir($dir . DIRECTORY_SEPARATOR . $file)) 
    { 
    	$photos[] = $file;
    } 
} 

?>
