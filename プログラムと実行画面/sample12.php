<html> 
<head> 
<title>サンプル</title> 
</head> 
<body> 
<?php 
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n"; 
print "<h1> sample12.php 佐々木　温(a23i093)</h1>\n"; 
     
//入力部分textboxの設定 
print "<form action=\"http://localhost/sample12.php\" method=\"post\"> \n"; 

print "商品1: \n";
print "<input type=\"text\" name=\"s0\"/>\n";
print "商品2: \n";
print "<input type=\"text\" name=\"s1\"/>\n";
print "商品3: \n";
print "<input type=\"text\" name=\"s2\"/>\n";
print "商品4: \n";
print "<input type=\"text\" name=\"s3\"/>\n";

print "<input type=\"submit\" value=\"送信\"/><br/>\n";
print "</form>\n";

if(isset($_POST["s0"]) && isset($_POST["s1"]) && isset($_POST["s2"]) && isset($_POST["s3"])) {

// (2)入力を配列に格納
    $product[0] = $_POST["s0"];
    $product[1] = $_POST["s1"];
    $product[2] = $_POST["s2"];
    $product[3] = $_POST["s3"];

// 表の出力
    print "<table border=\"2\">\n";

// 項目部の表示
    print "<tr bgclor=\"#BBBBBB\">";
    print "<th>\$i</th><th>商品項目</th>";
    print "</tr>\n";

// 各行の表示
    for($i=0; $i < 4; $i++){
        print "<tr>";
// ループの添え字$iの表示
        print "<td>{$i}</td>";
// (3)$productの$i番目の表示
        print "<td>{$product[$i]}</td>";
        print "</tr>\n";
    }
// 表の終わりのタグ
    print "</table>\n";
}

?>

</body>
</htlm>