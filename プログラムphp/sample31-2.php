<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST</title></head>
<body>
<?php
print "<h1> sample31-2.php 作者 佐々木(a23i093)</h1>\n";

$dbs = 'mysql:dbname=supermarket_db1;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=supermarket_db1;charset=utf8", "root", "");


// データベースからデータを取得する
//sqlの命令の文字列を設定
$query = "SELECT * FROM tbl_hanbai";
//$query = "SELECT * FROM tbl_hanbai group by tokuisaki";
//$query = "SELECT * FROM tbl_hanbai group by code";
//$query = "SELECT * FROM tbl_hanbai group by code, tokuisaki";

//$query = "SELECT code, count(tokuisaki) FROM tbl_hanbai group by code";
//$query = "SELECT *,count(tokuisaki) FROM tbl_hanbai group by code having code ='A5023'";
//$query = "SELECT *,count(tokuisaki) FROM tbl_hanbai where code ='A5023' group by code ";
//$query = "SELECT *,count(tokuisaki) FROM tbl_hanbai group by code order by count(tokuisaki)";

//$query = "SELECT * FROM tbl_hanbai order by hanbaisu desc";
//$query = "SELECT * FROM tbl_hanbai order by hanbaisu desc, id desc";
//$query = "SELECT * FROM tbl_hanbai where hanbaisu >= 150 order by hanbaisu desc, id desc";

//$query = "SELECT * FROM tbl_hanbai H  join tbl_syouhin S";
//$query = "SELECT S.shyouhinmei, H.tokuisaki FROM tbl_hanbai H join tbl_syouhin S on H.code = S.code";
//$query = "SELECT * FROM  (select S.shyouhinmei, H.tokuisaki from tbl_hanbai H, tbl_syouhin S where H.code = S.code) as C";

//$query = "SELECT S.shyouhinmei, H.tokuisaki FROM tbl_hanbai H,  tbl_syouhin S where H.code = S.code";
//$query = "SELECT S.shyouhinmei, H.tokuisaki, code FROM tbl_hanbai H natural join tbl_syouhin S";
//$query = "SELECT S.shyouhinmei, H.tokuisaki, code FROM tbl_hanbai H  join tbl_syouhin S using (code)";

print "SQL文:{$query}<br>";

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

//(4)配列$num3に項目名を順に格納し、表示
for ($i = 0; $i < $num2; $i++) {
    print("{$num3[$i]} ");
}
print("<br>\n");

//データを１行ずつ取得
while($info = $stmt -> fetch(PDO::FETCH_ASSOC)){

	for($i=0;$i<$num2; $i++){
		//(6)１行分のデータを項目ごとに出力
		print ("{$info[$num3[$i]]} ");
	}
	print "<br>\n";
}

?>
</body>
</html>


