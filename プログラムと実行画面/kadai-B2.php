<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-B2.php 佐々木　温(a23i093)</h1>\n";

//(1)配列の値の設定
$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );

//(2)最高値の計算
$max=-INF;
foreach($price as $product => $value){
    if($max < $value){
        $max = $value;
        $max_loc = $product;
    }
}

//(3)表示
print "最高値の商品は{$max_loc}です。 <br>\n";
?>
</body></html>

