<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$massage = filter_input(INPUT_POST, 'massage');

$errors = [];
if (empty($name)||empty($email)||empty($massage)) {
  $errors[] =  "「タイトル」「Eメール」「お問合せ内容」のどれかが記入されてません！";
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
  <title>My work - MyWorkPortfolio</title>
</head>

<body>
  <div>
    <?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error):?>
    <p><?php echo $error . "\n";?></p>
    <?php endforeach;?>
    <a href="index.php">送信画面へ</a>
    <?php endif;?>
    <?php if (empty($errors)): ?>
    <h2>送信完了！！</h2>
    <a href="index.php">送信画面へ</a><br><br>
    <a href="history.php">送信履歴へ</a>
    <?php endif;?>
    <div>
</body>


</html>