<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
$zip1 = isset($_POST["zip1"])? $_POST["zip1"] : "";
$zip2 = isset($_POST["zip2"])? $_POST["zip2"] : "";
$pref = isset($_POST["pref"])? $_POST["pref"] : "";
$address = isset($_POST["address"])? $_POST["address"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$email1 = isset($_POST["email1"])? $_POST["email1"] : "";
$email2 = isset($_POST["email2"])? $_POST["email2"] : "";
$showroom = isset($_POST["showroom"])? $_POST["showroom"] : "";
$catalog1 = isset($_POST["catalog1"])? $_POST["catalog1"] : "";
$catalog2 = isset($_POST["catalog2"])? $_POST["catalog2"] : "";
$catalog3 = isset($_POST["catalog3"])? $_POST["catalog3"] : "";
$content = isset($_POST["content"])? $_POST["content"] : "";
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
</head>
<body>
    <div id="wrapper">
        <header>
            <h1><img src="./images/logo.png" alt=""></a></h1>
        </header>
        
        <main>
            <article>
                <h2><img src="./images/text-contact.svg" alt=""></h2>
                <section>
                    <form action="complete.php" method="post" id="contact">

                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
                    
                    <input type="hidden" name="email1" value="<?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?>">
                    
                    <input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">

                        <dl>
                            <dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
                            <dd><?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?></dd>
                            <dd>
                            <?php echo nl2br(htmlspecialchars($content,ENT_QUOTES,"UTF-8")); ?>
                            </dd>
                        </dl>
                        <div id="button">

                            <input type="button" value="戻る" onclick="history.back()">
                            <input type="submit" value="送信">

                        </div>
                    </form>
                </section>
            </article>
        </main>
        <footer>
            <small>Copyright&copy; 2024 Gaming Airways. ALL rights reserved</small>
        </footer>
    </div><!-- #wrapper終了 -->
</body>
</html>