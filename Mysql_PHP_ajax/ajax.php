<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ajax、PHP、MySQLの連携</title>
  <link rel="stylesheet" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
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
  $memberList = array();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   $memberList[]=array(
    'id' =>$row['id'],
    'name'=>$row['name'],
    'mail'=>$row['mail']
   );
  }

  //jsonとして出力
  header('Content-type: application/json');
  echo json_encode($memberList,JSON_UNESCAPED_UNICODE);
  ?>

IDを入力:<input id="id_number" type="number"><br>

<div id="result">
 <p>数値を入力してボタンを押してください。</p>
</div>
<button id="ajax">ボタン</button>
  </body>
  <script>
 $(function(){

$('#ajax').on('click',function(){

 $.ajax({
  url:'./dbconnect.php', //送信先
  type:'POST', //送信方法
  datatype: 'json', //受け取りデータの種類
  data:{
   'id' : $('#id_number').val()
  }
  })
  // Ajax通信が成功した時
  .done( function(data) {
  $('#result').html("<p>ID番号"+data[0].id+"は「"+data[0].name+"」さんです。<br>メールアドレスは「"+data[0].mail+"」です。</p>");
  console.log('通信成功');
  console.log(data);
  })
  // Ajax通信が失敗した時
  .fail( function(data) {
  $('#result').html(data);
  console.log('通信失敗');
  console.log(data);
  })
}); //#ajax click end

}); //END
  })

  </script>
</html>
