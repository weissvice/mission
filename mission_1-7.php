<?php
$filename='kadai7.txt';
//echo $filename;
$fp=fopen($filename,'r');
$hairetu=file($filename);
fclose($fp);
for($i=0;$i<count($hairetu);$i++){
	echo $hairetu[$i]."<br>";
}

?>