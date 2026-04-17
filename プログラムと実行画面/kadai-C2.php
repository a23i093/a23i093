<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-C2.php 佐々木　温(a23i093)</h1>\n";

//(1)配列の値の設定
$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );

//(2)最小値の計算
$min=+INF;
foreach($price as $product => $value){
    if($min > $value){
        $min = $value;
    }
}

//(3)最大値の計算
$max=-INF;
foreach($price as $product => $value){
    if($max < $value){
        $max = $value;
    }
}

//(4)差の計算
$diff = $max - $min;

//(5)表示
print "最低価格 {$min}<br>\n";
print "最高価格 {$max}<br>\n";
print "差は、{$diff}<br>\n";
?>
</body></html>

