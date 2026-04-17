<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
<body>
<?php
print"<h1> kadai-F2.php 作者 佐々木(a23i093)</h1>\n";
//(1)配列の値の設定
$price = array("キャベツ"=>250, "ホウレンソウ"=>120, "いちご"=>380, "メロン"=>580);
$category = array("キャベツ"=>"野菜", "ホウレンソウ"=>"野菜", "いちご"=>"果物", "メロン"=>"果物");
$quantity = array("キャベツ"=>150, "ホウレンソウ"=>200, "いちご"=>50, "メロン"=>100);
$category_list = array("野菜", "果物", "魚");

//売り上げの計算
$seles=0;
foreach($category as $product => $value){
    $seles = $price[$product] * $quantity[$product];
}

//(3)カテゴリごとの売り上げの計算
for($i=0; $i<count($category_list); $i++){
    //各カテゴリの売り上げを計算
    $category_seles[$category_list[$i]]=0;
    foreach($category as $product => $value){
        if ($value == $category_list[$i]){
            $category_seles[$category_list[$i]] += $price[$product] * $quantity[$product];
        }
    }
}

//(4)売上最大のカテゴリの計算
$max = -INF;
$category_max = 0;
foreach($category_list as $value => $total){
    if($max < $category_seles[$total]){
        $max = $category_seles[$total];
        $category_max = $total;
    }
}

//(5)表示
print"売上最大のカテゴリは、{$max}円で、{$category_max}です。";
?>
</body>
</html>