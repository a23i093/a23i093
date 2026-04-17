<html>
<head>
<title>サンプル</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
print "<h1> sample34-2.php 作者 佐々木(a23i093)</h1>\n";
//入力を変数に格納
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $a + $b;
//結果の表示
	print "{$a} + {$b} = {$c}\n";
?>
</body>
</html>
