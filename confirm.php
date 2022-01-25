<?php
$name = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];

// HPMailer のクラスをグローバル名前空間（global namespace）にインポート
// スクリプトの先頭で宣言する必要があります
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
// Composer のオートローダーの読み込み（ファイルの位置によりパスを適宜変更）
require 'php_mailer/vendor/autoload.php';
//エラーメッセージ用日本語言語ファイルを読み込む場合
require 'php_mailer/vendor/phpmailer/phpmailer/language/phpmailer.lang-ja.php';
 
//mbstring の日本語設定
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
// インスタンスを生成（引数に true を指定して例外 Exception を有効に）
$mail = new PHPMailer(true);
 
//日本語用設定
$mail->CharSet = "iso-2022-jp";
$mail->Encoding = "7bit";

//エラーメッセージ用言語ファイルを使用する場合に指定
$mail->setLanguage('ja', 'php_mailer/vendor/phpmailer/phpmailer/language/');
 
try {
  //サーバの設定
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  // デバグの出力を有効に（テスト環境での検証用）
    $mail->SMTPDebug = 0;
    $mail->isSMTP();   // SMTP を使用
    $mail->Host       = 'smtp.gmail.com';  // ★★★ Gmail SMTP サーバーを指定
    $mail->SMTPAuth   = true;   // SMTP authentication を有効に
    $mail->Username   = 'maiku19950522@gmail.com';  // ★★★ Gmail ユーザ名
    $mail->Password   = 'tqracsdzvxisltyn';  // ★★★ Gmail パスワード
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ★★★ 暗号化（TLS)を有効に 
    $mail->Port = 587;  //★★★ ポートは 587 
 
    //受信者設定
    //差出人アドレス, 差出人名 
    $mail->setFrom("$email", mb_encode_mimeheader($name)); 
    // 受信者アドレス, 受信者名（受信者名はオプション）
    $mail->addAddress('maiku19950522@gmail.com', mb_encode_mimeheader("黒龍　真生")); 

    //コンテンツ設定
    $mail->isHTML(true);   // HTML形式を指定
    //メール表題（タイトル）
    $mail->Subject = mb_encode_mimeheader('問い合わせメール'); 
    //本文（HTML用）
    $mail->Body = mb_convert_encoding("
        <p>$name 様からの問い合わせ</p>
        <p>お問い合わせ内容はこちらです。</p>
        <p>メールアドレス：$email</p>
        <p>電話番号：$tel</p>
        <p>お問い合わせ内容：$comment</p>
        ","JIS","UTF-8");  
        exit;
    //送信
    if (!$mail->send()){}
        $success_message = "送信完了！";
    } catch (Exception $e) {
        $error_message[] = "<h3>メールを送信できませんでした。</h3>
                            <p>Error: {$mail->ErrorInfo}</p>";
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/confirm.css">
    <title>メール送信完了画面</title>
</head>
<body>
    <div class="wrapper">
    <header class="header">        
        <ul class="header_menu">
            <li>
                <a href="">
                    <img src="img/home-page.svg" alt="">
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="#About">
                    <img src="img/double-quotes.svg" alt="">
                    <p>About</p>
                </a>
            </li>
            <li>
                <a href="#Projects">
                    <img src="img/checklist.svg" alt="">
                    <p>Projects</p>
                </a>
            </li>
            <!-- contactのボタンを追加 -->
        </ul>
    </header>

    <!-- contact -->
    <section class="main_contact">
        <h6>Contact</h6>
        <?php if(!empty($success_message)): ?>
            <h3 class="alert-success"><?php echo $success_message; ?></h3>
            <p>お問合せありがとうございます。</p>
            <p>送信完了いたしました。</p>
            <form action="index.php" method="get">
                <div class="back">
                    <button type="submit" name="back">戻る</button>
                </div>
            </form>
        <?php endif; ?>

        <?php if (!empty($error_message)): ?>
            <?php foreach( $error_message as $value): ?>
                <p class="alert-error"><?php echo $value; ?></p>
                <form action="index.php" method="get">
                    <div class="back">
                        <button type="submit" name="back">戻る</button>
                    </div>
                </form>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>

    <footer>
        <div class="footer_copyright">copy</div>
    </footer>
    </div>
</body>
</html>