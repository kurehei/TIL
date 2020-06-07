<?php
// 外部からくる変数
// フォームが PHP スクリプトに投稿された時、フォームから渡された全て の変数は PHP により自動的にスクリプトから使用可能となります。

// HTMLフォームからデータにアクセスする方法

?>

<form action="gaibu.php" method="post">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>

<?php
echo $_POST['username']."<br />";
echo $_REQUEST['email']."<br />";

// PHPではフォーム変数のコンテキスト内で配列が使用可能です(FAQの関連箇所も参照してください)。 例えば、関連する変数をグループ化したり、select inputで複数の値を 取得するといったことが可能です。フォームを同じスクリプトに投稿し、 投稿したデータを表示する例を示します。

?>

<?php

?>


<form action="" method="post">
    Name:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Beer: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbrau</option>
    </select><br />
    <input type="image" src="image.gif" name="sub" />
    <input type="submit" value="submit me!" />
</form>

<?php
if($_REQUEST) {
    echo htmlspecialchars(print_r($_REQUEST, true));
}

// PHPは、フォームから配列で受けとっても処理可能である。
// 画像の場合、画像のどこかがクリックされた場合、二つの変数 sub_x および sub_y が付け加えられてこのフォームはサーバーに転送されます。
// これは、ユーザーがこの画像をクリックした時の座標を表している。
?>

<?php
// HTTP Cookie
// Cookieは、リモートブラウザにデータを保持し、再訪するユーザーを追跡し、特定する機構 です。
// set_cookie()関数によって、Cookieをセットすることができる。Cookieは、HTTP ヘッダの一部なので、SetCookie 関数をブラウザに何かを出力する前にコールする必要があります
//  Cookieのデータは、$_COOKIE のような適当なCookieデータ 配列で参照可能です。
if (isset($_COOKIE['count'])) {
  $count = $_COOKIE['count'] + 1;
  echo $count;
} else {
  $count = 1;
}
setcookie('count', $count, time()+3600);


?>
