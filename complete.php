<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["tangi.tdp2023.a@gmail.com"];//メール送信先の設定
 $subject = "お問い合わせ";//メールの件名
 $header = "From:tangi.tdp2023.a@gmail.com";//送信元アドレス
 $header .= "\n";//改行
 $header .= "tangi.tdp2023.a@gmail.com";//確認メール管理者受信用
 $message = "お問い合わせいただき誠にありがとうございます。" . "\n" .
 "お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "E-Mail：" . $_POST["email1"] . "\n" .
 "お問い合わせ内容：" . "\n" .
 $_POST["content"] ;
 
//メール送信
  mb_send_mail($to, $subject, $message, $header);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1><img src="./images/logo.png" alt=""></h1>
        </header>
        <main>
            <article>
                <h2><img src="./images/text-contact.svg" alt=""></h2>
                <section>
                    <p>入力内容が送信されました。</p>
                    <p>お問い合わせありがとうございました。</p>
                </section>
            </article>
        </main>
        <footer>
            <small>Copyright&copy; 2024 Gaming Airways. ALL rights reserved</small>
        </footer>
    </div><!-- #wrapper終了 -->
</body>
</html>