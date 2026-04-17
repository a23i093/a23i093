<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head><body>
<?php
print "<h1> kadai-D1.php 佐々木　温(a23i093)</h1>\n";
//入力部分textboxの設定
print "<form action=\"http://localhost/kadai-D1.php\" method=\"post\"> \n";
print "カテゴリ: \n";
print "<input type=\"text\" name=\"c\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定
//$price = array("キャベツ"=>250, "ホウレンソウ"=>120, "いちご"=>380, "メロン"=>580);
//$category = array("キャベツ"=>"野菜", "ホウレンソウ"=>"野菜", "いちご"=>"果物", "メロン"=>"果物");
$price[0]=250;
$price[1]=120;
$price[2]=380;
$price[3]=580;
$product[0]="キャベツ";
$product[1]="ホウレンソウ";
$product[2]="いちご";
$product[3]="メロン";
$category[0]="野菜";
$category[1]="野菜";
$category[2]="果物";
$category[3]="果物";

if($_POST["c"]!=""){
    $cate_s = $_POST["c"];

    //(2)合計の計算
    $total = 0;
    for($i=0; $i<=count($price); $i++){
        if($cate_s == $category[$i]){
            $total += $price[$i];
        }
    }

    //(3)表示
    print "カテゴリ{$cate_s}の商品の合計は{$total}円です。 <br>\n";
}
?>
</body></html>

