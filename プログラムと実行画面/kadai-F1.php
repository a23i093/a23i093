<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
<body>
<?php
print"<h1> kadai-F1.php 作者 佐々木(a23i093)</h1>\n";
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
$quantity[0]=150;
$quantity[1]=200;
$quantity[2]=50;
$quantity[3]=100;

//(2)売り上げの計算
$sales=0;
$sales_max=0;
for($i=0; $i<count($price); $i++){
    $sales = $price[$i] * $quantity[$i];
    $sales_max += $sales;
}

//(3)カテゴリごとの売り上げの計算
for($i=0; $i<count($category_list); $i++){

    //各カテゴリでの売り上げの計算
    $category_sales[$i]=0;
    for($j=0; $j<count($category); $j++){
        if($category[$j] == $category_list[$i]){
            $category_sales[$i]+=$price[$j]*$quantity[$j];
            print"各カテゴリの売上、{$category_sales[$i]}円。<br>\n";
        }
    }
}
//(4)売上最大のカテゴリの計算
$max=$category_sales[0];
$category_max=0;
for($i=0; $i<count($category_list); $i++){
    if($max < $category_sales[$i]){
        $max = $category_sales[$i];
        $category_max = $i;
    }
}


//(4)表示
print"全体の売上、{$sales_max}円。<br>\n";
print"売上最大のカテゴリは、{$max}円で、{$category_list[$category_max]}です。";

?>
</body>
</thml>