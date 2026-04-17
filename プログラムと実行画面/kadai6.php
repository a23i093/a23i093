<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<!--(1)入力部分textboxの設定 -->
<form action="http://localhost/kadai6.php" method="post">
a:<input type="text"name="num"/>
<br/>
b:<input type="text"name="tab"/>
<input type="submit" value="送信"/>
</form>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai6.php 佐々木　温(A23I093)</h1>";

print"\$aに「{$_POST["num"]}」が入力されました。<br/>\n";
print"\$bに「{$_POST["tab"]}」が入力されました。<br/>\n";

//textboxのデータの取り出し
$a=$_POST["num"];
$b=$_POST["tab"];

//四則演算
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;

//計算結果の出力
print"\$a+\$b={$c}<br/>\n";
print"\$a-\$b={$d}<br/>\n";
print"\$a*\$b={$e}<br/>\n";
print"\$a/\$b={$f}<br/>\n";
?>

</body>
</html>
