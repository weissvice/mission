<form action="" method="post">
<input type="text" name="textbox" value="" />
<input type="submit" value="‘—M" />
</form>
<?php
$filename='kadai5.txt';
//echo $filename;
$fp=fopen($filename,'w');
fwrite($fp,$_POST['textbox']);
fclose($fp);
?>