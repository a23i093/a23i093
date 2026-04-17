<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST</title></head>
<body>
<?php
print "<h1> kadai22.php 作者 佐々木(a23i093)</h1>\n";

//pdoでデータベースに接続
$dbs = 'mysql:dbname=supermarket_db2;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);

// データベースからデータを取得する
//sqlの命令の文字列を設定

//テーブルの作成(商品テーブルtbl_syouhin)
$query = "CREATE TABLE tbl_syouhin(
    id INTEGER, 
    code VARCHAR(20),
    shyouhinmei VARCHAR(20), 
    tanka INTEGER)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(1,'A1', 'apple', 250)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(2,'A2','orange', 200)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(3,'A3','melon', 500)";
$stmt = $pdo->prepare($query);
$stmt -> execute();


//テーブルの作成(tble_hanbai)
//$queryにデータベースのテーブル設定(tbl_hanbai)の命令を設定
$query = "CREATE TABLE tbl_hanbai(
    id INTEGER, 
    tokuisaki  VARCHAR(20),
    code VARCHAR(20), 
    hanbaisu INTEGER)";
//$queryにデータベースのテーブル設定(tbl_hanbai)の命令を設定
$stmt = $pdo->prepare($query);
$stmt -> execute();

//データの登録
$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(1,'K商会', 'A1', 500)";
$stmt = $pdo->prepare($query);
$stmt -> execute();


$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(2,'K商会', 'A2', 400)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(3,'K商会', 'A3', 80)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(4,'S商店', 'A1', 400)";
$stmt = $pdo->prepare($query);
$stmt -> execute();


$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(5,'S商店', 'A2', 250)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "SELECT * FROM tbl_syouhin";
print "SQL文:{$query}<br>";
$stmt = $pdo->prepare($query);
$stmt -> execute();

while($info = $stmt->fetch(PDO::FETCH_ASSOC)){
    print("{$info['id']}:{$info['code']}:{$info['shyouhinmei']}:{$info['tanka']}<br>");
}

print "<br>\n";

$query = "SELECT * FROM tbl_hanbai";
print "SQL文:{$query}<br>";
$stmt = $pdo->prepare($query);
$stmt -> execute();

while($info = $stmt->fetch(PDO::FETCH_ASSOC)){
    print("{$info['id']}:{$info['tokuisaki']}:{$info['code']}:{$info['hanbaisu']}<br>");
}