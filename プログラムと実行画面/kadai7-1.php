<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai7-1.php 佐々木　温　(a23i093)</h1>";

//テストのスコアと出席回数
$score = 45;
$attendance = 15;

//表題の出力
print "<h1>得点{$score},出席{$attendance}は</h1>";


//条件による合否の出力
if ($score >= 60 && $score <= 100 && $attendance >= 11){
    
    print"<h1><Font Color=\"FF0000\">合格</h1><br/>";
}else{
    print"<h1><Font Color=\"0000FF\">不合格</h1><br/>";
}
?>

</body>
</html>