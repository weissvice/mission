<?php
$filename='kadai2.txt';
//echo $filename;

$fp=fopen($filename,'r');

$content=fread($fp,filesize($filename));//

fclose($fp);

print $content;//

?>