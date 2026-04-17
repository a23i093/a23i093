<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai29-2.php 作者 佐々木(a23i093)</h1>\n";


print "<form action=\"kadai29-1.php\"method=\"post\"> \n";
print "<input type = \"submit\" value=\"戻る\"/>";
print "</form>";

//データベースsupermarket_db1との接続
$dbs = 'mysql:dbname=supermarket_db1;host=localhost';
$user = 'root';
$password="";
$pdo = new PDO($dbs, $user, $password);

//選択したテーブルからsqlも命令を作る
if($_POST["table"] != "tbl_hanbai"){
	$tbl = "tbl_syouhin";
}else{
    $tbl = "tbl_hanbai";
}

$query = "SELECT * FROM {$tbl}";

//sql($queryの文字列)を実行
$stmt = $pdo->prepare($query);
$stmt -> execute();

//取得したデータの行数を取得
$num1 = $stmt->rowCount();
//print("行数{$num1}<br>\n");

//取得したデータのカラム数(フィールド数)を取得
$num2 =  $stmt->columnCount();
//print("カラム数{$num1}<br>\n");

//フィールド名を$num3に入れる
for ($i = 0; $i < $num2; $i++) {
    $meta = $stmt->getColumnMeta($i);
    $num3[] = $meta['name'];
}

print "<table border=\"2\">\n";

    //項目部の表示
    print "<tr bgcolor=\"#BBBBBB\">";

//配列$num3に項目名を順に格納し、表示

for ($i = 0;$i < $num2; $i++){
    print("<th>{$num3[$i]}</th>");

}
print "</tr> \n";


//データを１行ずつ取得
While($info = $stmt->fetch(PDO::FETCH_ASSOC)){
    print"<tr>";
    for ($i = 0;$i < $num2; $i++){
        print ("<td>{$info[$num3[$i]]}</td>");

}
print "</tr> \n";

}

print"</table>";

?>
</body>
</html>
