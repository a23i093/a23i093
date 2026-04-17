<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
<body>
<?php
print"<h1> kadai-E1.php 作者 佐々木(a23i093)</h1>\n";
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
$category_list[0]="野菜";
$category_list[1]="果物";
$category_list[2]="魚";

//(2)カテゴリの価格計算
for($i=0; $i<count($category_list); $i++){

    //(2)各カテゴリの価格計算
    $total=0;
    for($j=0; $j<count($category); $j++){
        if($category[$j] == $category_list[$i]){
            $total += $price[$j];
        }
    }

    //(3)表示
    print "カテゴリ{$category_list[$i]}の商品の合計は{$total}円です。<br>\n";
}
?>
</body>
</thml>