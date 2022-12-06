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

  <header class="flex">
    <div>
      <a href="reproduction.php"> <img class="profile" src="https://code-step.com/demo/html/profile/img/logo.svg"
          alt="profile"></a>
    </div>

    <ul class="flex2">
      <li>
        <a class="underline" href="#about">About</a>
      </li>

      <li class="margin-left30px">
        <a class="underline" href="#bicycle">Bicycle</a>
      </li>
    </ul>

  </header>

  <main>

    <div class="margin-bottom100">
      <img class="bicycle" src="https://code-step.com/demo/html/profile/img/mainvisual.jpg" alt="テキストテキストテキスト">
    </div>

    <section class="center">

      <h1 id="about" class="text-underline">About</h1>

      <div class="flex3">

        <div>
          <img class="guy" src="https://code-step.com/demo/html/profile/img/about.jpg" alt="テキストテキストテキスト">
        </div>

        <div class="nameAndText">
          <h1 class="Margin-10-0">SAITO TAKAHIRO</h1>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
          <div>テキストテキストテキストテキストテキストテキストテキスト</div>
        </div>

      </div>

    </section>

    <section class="center">

      <h2 id="bicycle" class="text-underline margin-bottom">Bicycle</h2>

      <ul class="flex4 li">

        <li class="bicycle-li">
          <img src="https://code-step.com/demo/html/profile/img/bicycle1.jpg" alt="テキストテキスト">
          <h3 class="title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

        <li class="bicycle-li">
          <img src="https://code-step.com/demo/html/profile/img/bicycle2.jpg" alt="テキストテキスト">
          <h3 class="title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

        <li class="bicycle-li">
          <img src="https://code-step.com/demo/html/profile/img/bicycle3.jpg" alt="テキストテキスト">
          <h3 class="title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>

      </ul>

    </section>

  </main>

  <footer class="footer">
    <p>© 2022 Profile</p>
  </footer>

</body>