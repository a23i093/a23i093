<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-C1.php 佐々木　温(a23i093)</h1>\n";

//(1)配列の値の設定
//$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );
$price[0]=250;
$price[1]=120;
$price[2]=150;
$product[0]="キャベツ";
$product[1]="ホウレンソウ";
$product[2]="だいこん";

//(2)最大値の計算
$max=-INF;
for($i=0; $i<=count($price); $i++){
    if($max < $price[$i]){
        $max = $price[$i];
    }
}

//(3)最小値の計算
$min=+INF;
for($i=0; $i<=2; $i++){
    if($min > $price[$i]){
        $min = $price[$i];
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

