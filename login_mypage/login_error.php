<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location:mypage.php");
}
?>



<!DOCTYPE HTML>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>ログイン</title>
      <link rel="stylesheet" type="text/css" href="login_error.css">
    </head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
      </header>
        <main>
         <form action="mypage.php" medhod="post">
           <div class="form_contents">
             <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>
           <div class="mail">
            <label>メールアドレス</label><br>
            <input type="text" class="formbox" size="40" name="mail">
           </div>
           <div class="password">
            <label>パスワード</label><br>
            <input type="password" class="formbox" size="40" name="password">
           </div>
           <div class="loginbutton">
            <input type="submit" class="submit_button" size="35" value="ログイン">
          </div>
           </div>
         </form>
        </main> 
    <footer>
         ©︎2018 InterNous.inc. All rights reserved
    </footer>
</body>
</html>