<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$massage = filter_input(INPUT_POST, 'massage');

$errors = [];
if (empty($name)||empty($email)||empty($massage)) {
  $errors[] =  "「タイトル」「Eメール」「お問合せ内容」のどれかが記入されてませんので、もう一度ご確認ください(^^;)";
}

$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
  'mysql:host=mysql; dbname=MyWorkPortfolio; charset=utf8',$dbUserName, $dbPassword);
  $stmt = $pdo->prepare("INSERT INTO MyWorkPortfolio (name, email, massage)
   VALUES (:name, :email, :massage)");
   
  $stmt->bindParam( ':name', $name, PDO::PARAM_STR);
  $stmt->bindParam( ':email', $email, PDO::PARAM_STR);
  $stmt->bindParam( ':massage', $massage, PDO::PARAM_STR);
  $stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>My Life - Portfolio</title>
  <link rel="shortcut icon" href="../reproductionImg/カメラアイコン8.jpeg">
  <link rel="stylesheet" href="../MyWorkPortfolioCSS/MyWorkPortfolio.css">
</head>

<body class="body__text">
  <div>
    <img class="complete__img" src="../MyWorkPortfolioImg/島牧歌島.JPG">
  </div>
  <div>
    <div class="body_message__margin">
      <?php if (!empty($errors)): ?>
      <?php foreach ($errors as $error):?>
      <p><?php echo $error . "\n";?></p>
      <?php endforeach;?>
    </div>
    <div class="body__link__send">
      <a href="MyWorkPortfolio.php">戻る</a>
    </div>
    <?php endif;?>

    <?php if (empty($errors)): ?>
    <h2 class="body_message__margin">メッセージありがとうございます！</h2>
    <div>今後も気軽にご連絡いただけると嬉しいです✨</div>
    <div class="body__link__send">
      <a href="MyWorkPortfolio.php">戻る</a>
    </div>
    <?php endif;?>


</body>


</html>