<form action="mission_2-3.php" method="post">
<input type="text" name="name" value="" />
<br>
<input type="text" name="coment" value="" />
<input type="submit" value="‘—M" />
</form>
<?php
$filename='kadai2-3.txt';
//echo $filename;
$fp=fopen($filename,'a');
$hairetu=file($filename);
$count=count($hairetu);
$retu="{".($count+1)."}<>{".$_POST["name"]."}<>{".$_POST["coment"]."}<>{".date("Y/m/d H:i:s")."}"."\n";
fwrite($fp,$retu);
fclose($fp);
$hairetu=file($filename);
for($i=0;$i<count($hairetu);$i++){
	$data=explode("<>",$hairetu[$i]);
	for($j=0;$j<count($data);$j++){
		echo $data[$j]."<br>";
	}
	echo "<br>";
}
?>
