<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル16</title> 
</head> 
<body> 
<?php 
print "<h1> sample16.php 作者 椎名(IxxIxxxx)</h1>\n"; 
 
//入力部分textboxの設定 
print "<form action=\"http://localhost/sample16.php\" method=\"post\"> \n"; 
print "商品名: \n"; 
print "<input type=\"text\" name=\"n\"/>\n"; 
print "<input type=\"submit\" value=\"送信\"/> <br/>\n"; 
print "</form>\n"; 
 
//(1)配列の値の設定 
$english["リンゴ"]="apple";
$english["オレンジ"]="orange";
$english["メロン"]="melon";
$english["イチゴ"]="strawberry";

$price["リンゴ"]=250;
$price["オレンジ"]=100;
$price["メロン"]=450;
$price["イチゴ"]=380;
 
//(2)キーで並び替え 
//ksort($english); 
//ksort($price); 
 
//入力チェック 
if ($_POST["n"]!=""){ 
 
//入力を変数に格納 
    $n = $_POST["n"]; 
     
//表の出力 
    print "<table border=\"2\">\n";
//項目部の表示 
    print "<tr bgcolor=\"#BBBBBB\">\n";
    print "<th>商品項目</th><th>商品価格</th><th>英単語</th>";
    print "</tr>\n";
//(3)配列の各要素を取り出して、キー($product)と値($value)と英単語を表示 
    foreach($price as $product => $value){
        print "<tr>";
        print "<td>{$product}</td>";
        print "<td>{$value}</td>";
        print "<td>{$english[$product]}</td>";
        print "</tr>\n";
    }

//表の終りのタグ 
    print "</table>\n<br>\n";
//(4)価格と英単語の表示 
    print "{$english[$n]}は{$price[$n]}です.<br>\n";
} 
?> 
</body> 
</html> 
