<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Life - Portfolio</title>
  <link rel="shortcut icon" href="../reproductionImg/カメラアイコン8.jpeg">
  <link rel="stylesheet" href="../MyWorkPortfolioCSS/MyWorkPortfolio.css">
</head>

<body>

  <header class="header">
    <div>
      <h1 class="header__title">
        <img src="https://code-step.com/demo/html/portfolio1/img/logo.svg" alt="My work">
      </h1>
    </div>

    <nav>
      <ul class="header__wrapper">

        <li class="header__list"><a href="#about">About</a></li>
        <li class="header__list"><a href="#about">Fishing</a></li>
        <li class="header__list"><a href="#about">Result</a></li>
        <li class="header__list"><a href="#contact">Contact</a></li>
        <li class="header__list">
          <a href="https://www.instagram.com/saichan_infinity" target="_blank">
            <img class="icon" src="https://code-step.com/demo/html/portfolio1/img/icon-instagram.png">
          </a>
        </li>

      </ul>
    </nav>
  </header>



  <main>

    <picture>
      <img class="main__img" src="../MyWorkPortfolioImg/カムイ岬.JPG" alt="テキストテキストテキスト">
    </picture>

    <section class="main__wrapper__content" id="about">

      <div>
        <h2 class="section__title">About</h2>

        <ul class="main__about">
          <li>
            saichan
          </li>
          <li>
            Birthplace:Hokkaido<span>&nbsp;</span>Hakodate,Birthday:1991.8.16
          </li>
          <li>
            tel:080-XXXX-XXXX
          </li>
          <li>
            URL:XXXXXXXXX.co.jp
          </li>
          <li>
            自然と釣りが大好きで北海道を駆け巡ります！
          </li>
        </ul>

      </div>
    </section>

    <div class="main__wrapper__content">
      <h2 class="section__title">Works</h2>

      <section class="main__wrapper">

        <ul class="main__picture__content">
          <li>
            <img src="../MyWorkPortfolioImg/岩内朝マヅメ.JPG">
          </li>
          <li>
            <img src="../MyWorkPortfolioImg/稚内朝マヅメ.JPG">
          </li>
          <li>
            <img src="../MyWorkPortfolioImg/尻別川.JPG">
          </li>
          <li>
            <img src="../MyWorkPortfolioImg/サクラマス2022.4.JPG">
          </li>
          <li>
            <img src="../MyWorkPortfolioImg/オショロコマ.JPG">
          </li>
          <li>
            <img src="../MyWorkPortfolioImg/ヒメマス.jpg">
          </li>
        </ul>
    </div>
    </section>

    <section class="main__wrapper__content">
      <h2 class="section__title">Result</h2>

      <!-- < class="main__wrapper"> -->

      <dl class="main__result">
        <dt class="main__result__border">2021.10</dt>
        <dd class="main__result__border">
          南茅部にてロックフィッシュを狙っていると、とんでもなく強い引き！なんとその正体はワラサ！</dd>
        <dt>2021.8</dt>
        <dd>
          室蘭沖にてボートをレンタル！相方は７０のヒラメキャッチ！！くやし〜！けどナイスフィッシュ👍！！
        </dd>
        <dt>2021.7</dt>
        <dd>豊浦町にて、磯をピッチングでテンポ良く探っていると...59とナイスなヒラメ！</dd>
        <dt>2021.6</dt>
        <dd>道北幌内川にてニジマス！死ぬほど暑かった！！近年の北海道は暑いね！！</dd>
        <dt>2021.4</dt>
        <dd>熊石鮎川海岸にて銀鱗が美しいサクラマス！</dd>
      </dl>

    </section>
    </div>

    <section class="main__wrapper__content" id="contact">

      <form action="complete.php" method="post">
        <h2 class="section__title">Contact</h2>

        <div>
          <dl class="main__contact__wrapper main__contact">
            <dt>NAME</dt>
            <dd><input type="text" name="name" value="" placeholder="お名前"></dd>

            <dt>E-mail</dt>
            <dd><input type="email" name="email" value="" placeholder="Email"></dd>

            <dt>MASSAGE</dt>
            <dd>
              <textarea name="massage" placeholder="お問合せ内容(1000文字までをお書きください。)"></textarea>
            </dd>
          </dl>
        </div>

        <div class="sending">
          <input type="submit" name="confirm" value="送信"><br>
        </div>

      </form>
    </section>

  </main>

  <footer>
    <p>© 2021 My Life</p>
  </footer>

</body>

</html>