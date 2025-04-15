<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
echo "あなたが入力した値<br>";
//入力欄に値が入っているか
if(empty($_GET['username'])){
  die("名前を入力してください。");
}
//入力欄に無理やり配列が入っていないか
$username = filter_input(INPUT_GET,'username');
//20文字以内の日本語文字か確認
if(mb_ereg('^[ぁ-んァ-ヶ一-龠々]{1,20}$',$username)==false){
  die("20文字以内で名前を入力してください。記号等は利用できません 。");
}
echo "名前：" . $_GET['username'] . "<br>";
//入力欄に値が入っているか
if(empty($_GET['useraddress'])){
  die("住所を入力してください。");
}
//入力欄に無理やり配列が入っていないか
$useraddress = filter_input(INPUT_GET,'useraddress');
//50文字以内の日本語で入力されているかどうか
if(mb_ereg('^[ぁ-んァ-ヶ一-龠々]{1,30}$',$useraddress)==false){
  die("30文字以内で住所を入力してください。記号等は利用できません。");
}
echo "住所：" . $_GET['useraddress']. "<br>";
//入力欄に値が入っているか
if(empty($_GET['usermail'])){
  die("メールアドレスを入力してください。");
}
//入力欄に無理やり配列が入っていないか
$usermail = filter_input(INPUT_GET,'usermail');
//100文字以内で正規表現か
//if(mb_ereg('^[a-zA-Z0-9.-_@]{1,100}$',$usermail)==false){
//  die("正しいメールアドレス形式を入力してください。記号は.-_@のみ利用可能");
//}
echo "メールアドレス：" . $_GET['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
