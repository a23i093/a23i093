<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai17.php 作者 佐々木(a23i093)</h1>\n";
//入力部分textboxの設定
print "<form action=\"http://localhost/kadai17.php\" method=\"post\"> \n";
print "テストの点数: \n";
print "<input type=\"text\" name=\"a\"/> <br> \n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//入力チェック
if(isset($_POST["a"]) ){

//入力を変数に移動
	$score = $_POST["a"];

//関数の結果をif文の条件で用いる
	$seiseki = hennkan($score);

	if(hennkan($score) != -1){
		print "テストの点{$score}を変換した成績{$seiseki}です。";
		if($seiseki >= 80 && $seiseki <= 100){
			print "ランクはAです。<br>\n";
		}elseif($seiseki >= 70 && $seiseki < 80){
			print "ランクはBです。<br>\n";
		}elseif($seiseki >= 60 && $seiseki < 70){
			print "ランクはCです。<br>\n";
		}else{
			print "ランクはDです。<br>\n";
		}
	}else{
		print "テストの点{$score}は入力値が不正です。";
	}
}

//関数hennkann 引数$tokuten 戻り値$val
function hennkan($tokuten){
	if($tokuten >= 80){
		$val = (($tokuten - 80)*(20/70)) + 80;
	}else{
		$val = $tokuten;
	}
	return $val;
}

?>

</body>
</htm
