<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../reproductionCSS/reproduction.css">
  <link rel="shortcut icon" href="../reproductionImg/favicon.ico">
  <title>Profile</title>
</head>


<body>

  <header class="header">
    <h1 class="header__profile">
      <a href="reproduction.php"> <img src="https://code-step.com/demo/html/profile/img/logo.svg" alt="profile"></a>
    </h1>
    <div class="header__space">
      <ul class="header__list">
        <li>
          <a class="header__link" href="#about">About</a>
        </li>

        <li class="header__itemList">
          <a class="header__link" href="#bicycle">Bicycle</a>
        </li>
      </ul>
    </div>
  </header>

  <main>

    <div class="main">
      <img class="main__img" src="https://code-step.com/demo/html/profile/img/mainvisual.jpg" alt="テキストテキストテキスト">
    </div>

    <section class="main__itemCenter">

      <h1 id="about" class="main__underline">About</h1>

      <div class="main__item">

        <div>
          <img class="guy" src="https://code-step.com/demo/html/profile/img/about.jpg" alt="テキストテキストテキスト">
        </div>

        <div class="main__contents">
          <h1 class="main__textMargin">SAITO TAKAHIRO</h1>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
        </div>

      </div>

    </section>

    <section class="main__itemCenter">

      <h2 id="bicycle" class="main__underline main__marginBottom">Bicycle</h2>

      <ul class="main__list main__listStyle">

        <li class="main__imgStyle">
          <img src="https://code-step.com/demo/html/profile/img/bicycle1.jpg" alt="テキストテキスト">
          <h3 class="main__imgTitle">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

        <li class="main__imgStyle">
          <img src="https://code-step.com/demo/html/profile/img/bicycle2.jpg" alt="テキストテキスト">
          <h3 class="main__imgTitle">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

        <li class="main__imgStyle">
          <img src="https://code-step.com/demo/html/profile/img/bicycle3.jpg" alt="テキストテキスト">
          <h3 class="main__imgTitle">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

      </ul>

    </section>

  </main>

  <footer class="footer">
    <p>© 2022 Profile</p>
  </footer>

</body>