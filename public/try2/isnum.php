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
//入力欄に値が入っているかを確認
if(isset($_GET['indata'])== false){
      die("数字を入力してください。");
}
//入力欄に無理やり配列が入っていないかを確認
$indata = filter_input(INPUT_GET,'indata');
//正規表現を使って文字をチェック
if(mb_ereg('^[0-9]+$',$indata) == false){
  die("数字を入力してください。");
}
echo "入力された数字は： " . $_GET['indata'];
?>
    </h2>
    </div>
  </body>
</html>
