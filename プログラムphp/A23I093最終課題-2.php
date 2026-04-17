<!DOCTYPE html>
<html>
<head>
    <title>サンプル</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
print "<h1>A23I093最終課題-2.php 作者 佐々木(a23i093)</h1>\n";

//データベース作成
$sql1 = "CREATE DATABASE $web_lastkadai_inosisi";
$sql2 = "CREATE DATABASE $web_lastkadai_kuma";
$sql3 = "CREATE DATABASE $web_lastkadai_saru";
$sql4 = "CREATE DATABASE $web_lastkadai_sika";

// データベース接続情報
$dbs = "mysql:dbname=web_lastkadai_inosisi;host=localhost";
$user = "root";
$password = "";

// PDOインスタンスの作成
$pdo = new PDO($dbs, $user, $password);

// テーブルの作成
$query = "CREATE TABLE IF NOT EXISTS `inosisi_北海・東北` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

// データの登録
$data = [
    ['北海', 0],
    ['青森', 0],
    ['岩手', 0],
    ['宮崎', 10],
    ['秋田', 0],
    ['山形', 0],
    ['福島', 40],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_北海・東北` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 関東のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `inosisi_関東` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['茨城', 30],
    ['栃木', 20],
    ['群馬', 90],
    ['埼玉', 40],
    ['千葉', 20],
    ['東京', 30],
    ['神奈川', 20],
    ['山梨', 100],
    ['長野', 50],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_関東` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 北陸・中部のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `inosisi_北陸・中部` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['新潟', 10],
    ['富山', 10],
    ['石川', 20],
    ['福井', 100],
    ['岐阜', 90],
    ['静岡', 90],
    ['愛知', 70],
    ['三重', 100],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_北陸・中部` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `inosisi_近畿` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['滋賀',100],
    ['京都',90],
    ['大阪',50],
    ['兵庫',90],
    ['奈良',90],
    ['和歌山',100],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_近畿` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `inosisi_中国・四国` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['鳥取', 100],
    ['島根',90],
    ['岡山', 100],
    ['広島', 100],
    ['山口', 100],
    ['徳島', 90],
    ['香川', 90],
    ['高知', 90],
    ['愛媛', 100],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_中国・四国` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `inosisi_九州・沖縄` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['福岡', 90],
    ['佐賀', 90],
    ['長崎', 90],
    ['熊本', 80],
    ['大分', 100],
    ['宮崎', 100],
    ['鹿児島', 90],
    ['沖縄', 80],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `inosisi_九州・沖縄` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 他の地域のテーブルとデータも同様に処理...

// データベース[web_lastkadai_kuma;]に接続
$dbs = "mysql:dbname=web_lastkadai_kuma;host=localhost";
$pdo = new PDO($dbs, $user, $password);

// 北海・東北のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `kuma_北海・東北` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['北海', 70],
    ['青森', 70],
    ['岩手', 90],
    ['宮崎', 60],
    ['秋田', 80],
    ['山形', 90],
    ['福島', 50],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `kuma_北海・東北` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS 'kuma_関東' (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['茨城', 0],
    ['栃木', 40],
    ['群馬', 70],
    ['埼玉', 40],
    ['千葉', 0],
    ['東京', 20],
    ['神奈川', 20],
    ['山梨', 50],
    ['長野', 90],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `kuma_関東` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 北陸・中部のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `kuma_北陸・中部` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['新潟', 80],
    ['富山', 100],
    ['石川', 70],
    ['福井', 100],
    ['岐阜', 100],
    ['静岡', 50],
    ['愛知', 10],
    ['三重', 20],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `kuma_北陸・中部` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `kuma_近畿` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['滋賀',50],
    ['京都',80],
    ['大阪',10],
    ['兵庫',80],
    ['奈良',0],
    ['和歌山',30],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `kuma_近畿` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `kuma_中国・四国` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['鳥取', 40],
    ['島根', 90],
    ['岡山', 10],
    ['広島', 60],
    ['山口', 70],
    ['徳島', 30],
    ['香川', 0],
    ['高知', 0],
    ['愛媛', 0],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `kuma_中国・四国` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `_kuma九州・沖縄` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['福岡', 0],
    ['佐賀', 0],
    ['長崎', 0],
    ['熊本', 0],
    ['大分', 0],
    ['宮崎', 0],
    ['鹿児島', 0],
    ['沖縄', 0],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO 'kuma_九州・沖縄' (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// データベース[web_lastkadai_saru;]に接続
$dbs = "mysql:dbname=web_lastkadai_saru;host=localhost";
$pdo = new PDO($dbs, $user, $password);

// 北海・東北のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `saru_北海・東北` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['北海', 0],
    ['青森', 10],
    ['岩手', 0],
    ['宮崎', 10],
    ['秋田', 10],
    ['山形', 10],
    ['福島', 20],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_北海・東北` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS 'saru_関東' (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['茨城', 0],
    ['栃木', 50],
    ['群馬', 70],
    ['埼玉', 10],
    ['千葉', 30],
    ['東京', 30],
    ['神奈川', 50],
    ['山梨', 90],
    ['長野', 40],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_関東` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 北陸・中部のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `saru_北陸・中部` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['新潟', 50],
    ['富山', 40],
    ['石川', 10],
    ['福井', 90],
    ['岐阜', 50],
    ['静岡', 80],
    ['愛知', 50],
    ['三重', 90],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_北陸・中部` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `saru_近畿` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['滋賀',100],
    ['京都',90],
    ['大阪',0],
    ['兵庫',10],
    ['奈良',40],
    ['和歌山',80],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_近畿` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `saru_中国・四国` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['鳥取', 0],
    ['島根',30],
    ['岡山', 40],
    ['広島', 30],
    ['山口', 70],
    ['徳島', 90],
    ['香川', 20],
    ['高知', 70],
    ['愛媛', 70],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_中国・四国` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `saru_九州・沖縄` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['福岡', 10],
    ['佐賀', 50],
    ['長崎', 10],
    ['熊本', 40],
    ['大分', 20],
    ['宮崎', 80],
    ['鹿児島', 30],
    ['沖縄', 0],
    ['総割合',geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `saru_九州・沖縄` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// データベース[web_lastkadai_sika;]に接続
$dbs = "mysql:dbname=web_lastkadai_sika;host=localhost";
$pdo = new PDO($dbs, $user, $password);

// 北海・東北のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `sika_北海・東北` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['北海', 100],
    ['青森', 10],
    ['岩手', 90],
    ['宮崎', 20],
    ['秋田', 0],
    ['山形', 0],
    ['福島', 30],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_北海・東北` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS 'sika_関東' (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['茨城', 0],
    ['栃木', 50],
    ['群馬', 80],
    ['埼玉', 40],
    ['千葉', 30],
    ['東京', 20],
    ['神奈川', 50],
    ['山梨', 100],
    ['長野', 90],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_関東` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

// 北陸・中部のテーブルの作成とデータの登録
$query = "CREATE TABLE IF NOT EXISTS `sika_北陸・中部` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['新潟', 30],
    ['富山', 30],
    ['石川', 50],
    ['福井', 90],
    ['岐阜', 100],
    ['静岡', 100],
    ['愛知', 0],
    ['三重', 100],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_北陸・中部` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `sika_近畿` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['滋賀',100],
    ['京都',100],
    ['大阪',10],
    ['兵庫',90],
    ['奈良',90],
    ['和歌山',100],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_近畿` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `sika_中国・四国` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['鳥取', 80],
    ['島根',30],
    ['岡山', 80],
    ['広島', 80],
    ['山口', 30],
    ['徳島', 100],
    ['香川', 80],
    ['高知', 70],
    ['愛媛', 20],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_中国・四国` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

$query = "CREATE TABLE IF NOT EXISTS `sika_九州・沖縄` (
    `name` VARCHAR(10),
    `percent` INTEGER
)";
$stmt = $pdo->prepare($query);
$stmt->execute();

$data = [
    ['福岡', 90],
    ['佐賀', 0],
    ['長崎', 10],
    ['熊本', 80],
    ['大分', 100],
    ['宮崎', 70],
    ['鹿児島', 70],
    ['沖縄', 0],
    ['総割合', geta($data, $row)]
];

foreach ($data as $row) {
    $query = "INSERT INTO `sika_九州・沖縄` (`name`, `percent`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute($row);
}

function geta($a, $b){
    foreach ($a, $b){
        $c = 0;
        for($i=0; $i>$b; $i++){
            $c += $a;
        }
    }
    $c = $c / $b;
    return $c;
}

print "データの登録が完了しました。<br>\n";
print "次へ移動してください。<br>\n";

print "<form action=\"A23I093最終課題-3.php\" method=\"post\">\n";
print "<input type = \"submit\" value=\"次へ\"/>";
print "</form>";

?>
</body>
</html>
