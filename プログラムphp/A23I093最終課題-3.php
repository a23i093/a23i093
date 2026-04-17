<html>
<meta http-equiv="Contnet-Type" content="test/html; sharset=UTF-8">
<head><titel>サンプル</title></head>
<body>
<?php
print "<h1>A23I093最終課題-3.php 作者 佐々木(a23i093)</h1>\n";

print "ようこそ、検索内容を下記からお選びください。<br>\n";

$animal_list[0] = "猪の分布";
$animal_list[1] = "熊類の分布";
$animal_list[2] = "ニホンザルの分布";
$animal_list[3] = "二ホンシカの分布";

foreach($animal_list as $id => $value){
    if($value == "猪の分布"){
        print "<form action=\"A23I093最終課題-inosisi.php\" method=\"post\">\n";
        print "<input type=\"submit\" value=\"送信\"/>";
        print "</form>";
    }elseif($value == "熊類の分布"){
        print "<form action=\"A23I093最終課題-kuma.php\" method=\"post\">\n";
        print "<input type=\"submit\" value=\"送信\"/>";
        print "</form>";
    }elseif($value == "ニホンザルの分布"){
        print "<form action=\"A23I093最終課題-saru.php\" method=\"post\">\n";
        print "<input type=\"submit\" value=\"送信\"/>";
        print "</form>";
    }elseif($value == "二ホンシカの分布"){
        print "<form action=\"A23I093最終課題-sika.php\" method=\"post\">\n";
        print "<input type=\"submit\" value=\"送信\"/>";
        print "</form>";
    }else{
        print "errar";
    }
    print "<br>\n";
}

?>
</body>
</html>