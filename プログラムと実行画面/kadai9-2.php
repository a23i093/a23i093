<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> kadai9-2.php 佐々木　温(a23i093)</h1>\n";


//(1)入力部分textboxの設定
print "<form action=\"http://localhost/kadai9-2.php\" method=\"post\"> \n";
print "変数\$n: \n";
print "<input type=\"text\" name=\"n\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//入力チェック
if(isset($_POST["n"])){

//入力を変数に格納
	$n = $_POST["n"];
	$sum_i = 0;     

    for($i=1; $i<=$n*($n+1)/2; $i++){

        //i行目 までの総和を$sum_iに入れる($iを加える)
        $sum_i = $i*($i+1)/2;

        //$iと$iまでの総和を表示する<br/>もいれる
        print"{$i}:{$sum_i}<br>\n";
    }
}
?>

</body>
</html>
