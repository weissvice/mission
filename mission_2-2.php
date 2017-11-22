<form action="mission_2-2.php" method="post">
<input type="text" name="name" value="" />
<br>
<input type="text" name="coment" value="" />
<input type="submit" value="‘—M" />
</form>
<?php
$filename='kadai2-2.txt';
//echo $filename;
$fp=fopen($filename,'a');
$hairetu=file($filename);
$count=count($hairetu);
$retu="{".($count+1)."}<>{".$_POST["name"]."}<>{".$_POST["coment"]."}<>{".date("Y/m/d H:i:s")."}"."\n";
fwrite($fp,$retu);
fclose($fp);
?>