<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>黒龍 真生 Portfolio</title>
</head>
<body>
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
                <li>
                    <a href="#Contact">
                        <img src="img/email.svg" alt="">
                        <p>Contact</p>
                    </a>
                </li>
            </ul>
    </header>

    <main class="main">
        <!-- 名前 -->
        <section class="main_kv">
            <div class="kv_name">
                <div class="name_en">
                    <h1>
                        <div>Kurotatsu</div>
                        <br>
                        <div>Maiku</div>
                    </h1>
                </div>
                <div class="name_ja">
                    <h2>
                        <div>黒龍真生</div>
                    </h2>
                </div>
            </div>
            <img src="img/IMG_7080.JPG" alt="">
        </section>

        <!-- about 自己紹介 -->
        <section class="main_about">
            <div class="about">
                <h3 id="About">About</h3>
                <p>学歴・職歴</p>
                <div class="about_intro">
                    <p class="about_text">
                        1995年05月22日生まれ　26歳<br>
                        2018年　3月　帝京大学　経済学部　経済学科　卒業<br>
                        2018年　4月　フクダライフテック関東株式会社　正社員として入社<br>
                        2020年　4月　フクダライフテック関東株式会社　退職<br>
                        2020年　4月　ベルシステム24株式会社　契約社員として入社<br>
                        2021年　4月　プログラミングスクールTECH.I.Sでプログラミングを学習<br>
                        現在に至る
                    </p>
                </div>
                <div class="about_intro">
                    <p class="about_text">
                        ・フクダライフテック関東株式会社<br>
                        医療機器メーカー営業。埼玉県東部を中心に開業医と総合病院を担当。<br>
                        担当エリア内の既存顧客のフォローをメインに、在宅医療機器の導入からアフターフォローを担当<br>
                        <br>
                        ・ベルシステム24株式会社<br>
                        三菱UFJ信託銀行が株主名簿管理人を行なっている株主様の事務手続きの受電・架電業務。<br>
                        <br>
                        ・学習スキル<br>
                        HTML / CSS / PHP / MySQL / JavaScript
                    </p>
                </div>
                <div class="about_logo">
                    <!-- <a href="">
                        <img src="img/github-logo.svg" alt="">
                    </a> -->
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="main_project">
            <h4 id="Projects">Projects</h4>
            <div class="project_result">
                <div class="result">
                    <!-- 今後imgのdivを消す -->
                    <div>
                        <img src="img/IMG_8806.JPG" alt="">
                    </div>
                    <h5>Twitterクローン</h5>
                    <div class="project_text">
                        <p>成果物の概要</p>
                        <p>テストアカウント</p>
                        <p>Email:maiku19950522@gmail.com</p>
                        <p>Pass:</p>
                    </div>
                    <a href="">webサイト</a>
                    <a href="">Github</a>
                </div>

                <div class="result">
                    <!-- 今後imgのdivを消す -->
                    <div>
                        <img src="img/IMG_8806.JPG" alt="">
                    </div>
                    <h5>Twitterクローン</h5>
                    <div class="project_text">
                        <p>成果物の概要</p>
                        <p>テストアカウント</p>
                        <p>Email:maiku19950522@gmail.com</p>
                        <p>Pass:</p>
                    </div>
                    <a href="">webサイト</a>
                    <a href="">Github</a>
                </div>
            </div>
        </section>

        <!-- contact -->
        <section class="main_contact">
            <h6 id="Contact">Contact</h6>
            <div class="form">
                    <form action="confirm.php" method="post">
                        <p class="item">
                            <label for="name">
                                <input type="text" class="form-item" name="fullname" placeholder="例：山田　太郎" required>
                                <span>お名前<span class="notice">必須</span></span>
                            </label>
                        </p>
                        <p class="item">
                            <label for="mail">
                                <input type="email" class="form-item" name="email" placeholder="例：info@example.com" required>
                                <span>Email<span class="notice">必須</span></span>
                            </label>
                        </p>
                        <p class="item">
                            <label for="tel">
                                <input type="tel" class="form-item" name="tel" placeholder="例：09011112222(ハイフンなし)" required>
                                <span>TEL<span class="notice">必須</span></span>
                            </label>
                        </p>
                        <p class="item">
                            <label for="comment">
                                <textarea name="comment" cols="30" rows="10" placeholder="コメントを入力して下さい。" required></textarea>
                                <span>お問い合わせ内容<span class="notice">必須</span></span>
                            </label>
                        </p>
                        <p>
                            <input type="submit" class="send-button" value="送信">
                        </p>
                    </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer_copyright">copy</div>
    </footer>
</body>
<script>
    $(function(){
        $(".send-button").on("click", function(){
            if(window.confirm('入力内容を確認して問題なければOKを押してください')) {
                //OKを選んだ場合
                return true;
            } else {
                //キャンセルを選んだ場合
                return false;
            }
        });
    });
</script>
</html>