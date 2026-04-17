<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST</title></head>
<body>
<?php
print "<h1> sample30-3.php 作者 椎名(IxxIxxxx)</h1>\n";

//(1)PDOのクラスで、$dbs,$user,$passwordを設定して、インスタンスを作る。 
$dbs = 'mysql:dbname=testdb1;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=supermarket_db1;charset=utf8", "root", "");

//(2) 命令の文字列を$queryに入れる
$query = "INSERT INTO producttable(id, name) VALUES(2,'シャンプー')";
$stmt = $pdo->prepare($query);  //実行の準備
$stmt -> execute();     //実行

$query = "INSERT INTO producttable(id, name) VALUES(3,'シャープペンシル')";
$stmt = $pdo->prepare($query);
$stmt -> execute();

//SELECTのPDOでの実行
$query = "SELECT * FROM producttable";
$stmt = $pdo->prepare($query);
$stmt -> execute();

//SQLの実行結果の取得 fetchで連想配列で取得
while($info = $stmt -> fetch(PDO::FETCH_ASSOC)){
    print (" {$info['id']}:{$info['name']} <br>\n");
}

?>
</body>
</html>
