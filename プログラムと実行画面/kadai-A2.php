<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-A2.php 佐々木　温(a23i093)</h1>\n";

//(1)配列の値の設定
$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );

//(2)合計の計算
$total = 0;
foreach($price as $product => $value){
    $total += $value;
}

//(3)個数と平均の計算
$n=count($price);
$average=$total/count($price);

//(4)表示
print "商品個数$n <br>\n";
print"合計{$total} <br>\n";
print"平均{$average}";
?>
</body></html>

