<form action="mission_2-4.php" method="post">
名前<br><input type="text" name="name" value="" />
<br>
コメント<br><input type="text" name="coment" value="" />
<input type="submit" value="送信" />
<br>

</form>
<form action="mission_2-4.php" method="post">
削除番号<br><input type="text" name="delete" value="" />
<input type="submit" value="送信" />
</form>



<?php
$filename='kadai2-4.txt';


//もし削除番号を入力したら
if(isset($_POST["delete"])){




	$hairetu=file($filename);
	for($i=0;$i<count($hairetu);$i++){

		$data=explode("<>",$hairetu[$i]);

		
 for($j=0;$j<count($data);$j++){ 
   echo $data[$j]."<br>";


		}
	}



$ketugou="";

//ループ

for($i=0;$i<count($hairetu);$i++){
	$ketugou=$ketugou.$hairetu[$i]."\n";
}

//文字列を削除
		array_splice($hairetu,$_POST["delete"]);


$fp=fopen($filename,'w');
fwrite($fp,$ketugou);
fclose($fp);

}

//そうでないなら
else{

//表示
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