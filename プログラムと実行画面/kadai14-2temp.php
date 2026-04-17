<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> kadai14-2.php 作者 椎名 (IxxIxxx)</h1>\n";
//入力部分 textbox の設定
print "<form action=\"http://localhost/kadai14-2.php\" method=\"post\">\n";
print "商品価格: \n";
print "<input type=\"text\" name=\"n\"/>\n";
print "以上？\n";
print "<input type=\"submit\" value=\"送信\"/>\n";
print "</form>\n";

$english["リンゴ"] = "apple"; 
$english["オレンジ"] = "orange"; 
$english["バナナ"] = "banana"; 
$english["イチゴ"] = "strawberry"; 
 
$price["リンゴ"] = 260; 
$price["オレンジ"] = 180; 
$price["バナナ"] = 130;
$price["イチゴ"] = 380; 

ksort($english);
ksort($price);

if(isset($_POST["n"])){

    $n = $_POST["n"];

    print "<table border=\"2\">\n";
    print "<tr bgcolor=\"#BBBBBB\">";
    print "<th>英単語</th><th>商品価格</th>";
    print "</tr>\n";

    foreach($price as $product => $value){
        if($value >= $n){
            print "<tr>";
            print "<td>{$english[$product]}</td>";
            print "<td>{$value}</td>";
            print "</tr>\n";
        }
    }
    print "</table>\n <br>\n";
}
?>
</body>
</html>