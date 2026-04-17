<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>サンプル</title>
</head>
<body>

<!--(1)入力部分textboxの設定 -->
<form action="http://localhost/kadai7-2.php" method="post">
試験の得点:<input type="text" name="num"/>
<br/>
宿題の得点:<input type="text" name="unm"/>
<input type="submit" value="送信"/>
</form>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai7-2.php 佐々木　温(a23i093)</h1>";

if(isset($_POST["num"]) && isset($_POST["unm"])){

print "「試験の得点{$_POST["num"]}」が入力されました。<br/>\n";
print "「宿題の得点{$_POST["unm"]}」が入力されました。<br/>\n";

//textboxのデータの取り出し
	$examine = $_POST["num"];
	$homework = $_POST["unm"];

	//試験$examineと宿題$homeworkの点数から成績$scoreを計算
	$score = ($examine * 0.7) + ($homework * 0.3);

	print"合計得点は、{$score}です。<br/>";

//条件文各種
	if($score >= 0 && $score < 60){
		print"成績はDです。<br/>";
	}elseif($score >= 60 && $score < 70){
		print"成績はCです。<br/>";
	}elseif($score >= 70 && $score < 80){
		print"成績はBです。<br/>";
	}elseif($score >= 80 && $score <= 100){
		print"成績はAです。<br/>";
	}else{
		print"得点の値に誤りがあります。<br/>";
	}
}

?>

</body>
</html>
