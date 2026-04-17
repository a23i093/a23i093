<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-D2.php 佐々木　温(a23i093)</h1>\n";
//入力部分textboxの設定
print "<form action=\"http://localhost/kadai-D2.php\" method=\"post\"> \n";
print "カテゴリ: \n";
print "<input type=\"text\" name=\"c\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定
$price = array("キャベツ"=>250, "ホウレンソウ"=>120, "いちご"=>380, "メロン"=>580);
$category = array("キャベツ"=>"野菜", "ホウレンソウ"=>"野菜", "いちご"=>"果物", "メロン"=>"果物");
    
if($_POST["c"]!=""){
    $cate_s = $_POST["c"];
    //(2)合計の計算
    $total = 0;
    foreach($category as $kye => $value){
        if($cate_s == $value){
            $total += $price[$kye];
        }
    }

    //(3)表示
    print "カテゴリ{$cate_s}の商品の合計は{$total}円です。 <br>\n";
}
?>
</body></html>

