<form action="mission_2-4.php" method="post">
���O<br><input type="text" name="name" value="" />
<br>
�R�����g<br><input type="text" name="coment" value="" />
<input type="submit" value="���M" />
<br>

</form>
<form action="mission_2-4.php" method="post">
�폜�ԍ�<br><input type="text" name="delete" value="" />
<input type="submit" value="���M" />
</form>



<?php
$filename='kadai2-4.txt';


//�����폜�ԍ�����͂�����
if(isset($_POST["delete"])){




	$hairetu=file($filename);
	for($i=0;$i<count($hairetu);$i++){

		$data=explode("<>",$hairetu[$i]);

		
 for($j=0;$j<count($data);$j++){ 
   echo $data[$j]."<br>";


		}
	}



$ketugou="";

//���[�v

for($i=0;$i<count($hairetu);$i++){
	$ketugou=$ketugou.$hairetu[$i]."\n";
}

//��������폜
		array_splice($hairetu,$_POST["delete"]);


$fp=fopen($filename,'w');
fwrite($fp,$ketugou);
fclose($fp);

}

//�����łȂ��Ȃ�
else{

//�\��
$fp=fopen($filename,'a');
$hairetu=file($filename);
$count=count($hairetu);

$retu="".($count+1)."<>".$_POST["name"]."<>".$_POST["coment"]."<>".date("Y/m/d H:i:s").""."\n";
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



}
?>