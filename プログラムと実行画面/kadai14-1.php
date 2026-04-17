<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai14-1.php 佐々木　温(a23i093)</h1>\n";

//(1)入力部分textboxの設定
print "<form action=\"http://localhost/kadai14-1.php\" method=\"post\"> \n";
print "商品価格: \n";
print "<input type=\"text\" name=\"n\"/>以上？\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(2)配列の値の設定
$price = array("キャベツ"=>210 , "ホウレンソウ"=>200 , "だいこん"=>170);

//入力チェック
if(isset($_POST["n"])){

//入力を変数に格納
	$n = $_POST["n"];
	
//(3)$n円以上の個数を数えて、表示する。
    $number = 0;
    print "{$n}円以上は、<br>\n";
    foreach($price as $product => $value){
        if($value >= $n){
            print "　{$product}の{$value}円<br>\n";
            $number++;
        }
    }
	if($number > 0){
        print "で、{$number}個あります。<br><br>\n";
    }else{
        print "ありません。<br>\n";
    }

//表の出力
	print "<table border=\"2\">\n";
//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th><th>商品価格</th>";
	print "</tr>\n";
	foreach( $price as $product => $value ){
		print "<tr>";
		print "<td>{$product}</td>";
		print "<td>{$value}</td>";
		print "</tr>\n";
	}
//表の終りのタグ
	print "</table>\n";
}
?>

</body>
</html>
