<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My work - Portfolio</title>
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

        <li class="header__list">About</li>
        <li class="header__list">Works</li>
        <li class="header__list">News</li>
        <li class="header__list" href="#contact">Contact</li>
        <li class="header__list">
          <a href="https://www.instagram.com/" target="_blank">
            <img class="icon" src="https://code-step.com/demo/html/portfolio1/img/icon-instagram.png">
          </a>
        </li>

      </ul>
    </nav>
  </header>



  <main>
    <section id="contact">
      <form action="complete.php" method="post">
        <h2 size="5"><b>Contact</b></h2>

        <div class="main__wrapper">
          <div>
            NAME
          </div>
          <div>
            <input type="text" name="title" value="" placeholder="タイトル">
          </div>
        </div>

        <div>
          <div>
            Email
          </div>
          <div>
            <input type="email" name="email" value="" placeholder="Email">
          </div>
        </div>

        <div>
          <div>
            MASSAGE
          </div>
          <div>
            <textarea cols="40" rows="8" name="content" placeholder="お問合せ内容(1000文字までをお書きください。)"></textarea>
          </div>
        </div>
        <div>
          <input type="submit" name="confirm" value="送信"><br>
        </div>
      </form>
      <main>
    </section>
</body>

</html>