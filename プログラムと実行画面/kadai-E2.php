<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
<body>
<?php
print"<h1> kadai-E2.php 作者 佐々木(a23i093)</h1>\n";
//(1)配列の値の設定
$price = array("キャベツ"=>250, "ホウレンソウ"=>120, "いちご"=>380, "メロン"=>580);
$category = array("キャベツ"=>"野菜", "ホウレンソウ"=>"野菜", "いちご"=>"果物", "メロン"=>"果物");
$category_list = array("野菜", "果物", "魚");

//(2)カテゴリの価格計算
for($i=0; $i<count($category_list); $i++){

    //(2)各カテゴリの価格計算
    $total=0;
    foreach($category as $product => $value){
        if($category_list[$i] == $value){
            $total += $price[$product];
        }
    }

    //(3)表示
    print "カテゴリ{$category_list[$i]}の商品の合計は{$total}円です。<br>\n";
}
?>
</body>
</thml>