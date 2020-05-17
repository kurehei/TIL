<?php
$id = $_POST['id'];

// データベース接続

$host = 'localhost';
$dbname = 'booklist';
$dbuser = 'root';
$dbpass = '';

try {
  $dbh = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $dbuser,$dbpass, array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 var_dump($e->getMessage());
 exit;
}
// データ取得
$sql = "SELECT id, name, mail FROM member WHERE id = ?";
$stmt = ($dbh->prepare($sql));
$stmt->execute(array($id));

//あらかじめ配列を生成しておき、while文で回します。
$memberList = [];
// fetch()は、結果セットから１行取得する
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
  $memberList[] = [
    'id' => $result['id'],
    'name' => $result['name'],
    'mail' => $result['mail']
  ];
}

//jsonとして出力
header('Content-type: application/json');
// json_encodeは、json形式に変換、JSON_UNESCAPED_UNICODEは、日本語のまま出力する
echo json_encode($memberList,JSON_UNESCAPED_UNICODE );
