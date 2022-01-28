
<?php
// POSTを受け取る

$name= $_POST['namae'];
$mail= $_POST['mail'];
$ijin = $_POST['ijin'];
$zayuu = $_POST['zayuu'];

// POSTの場合はパスワードも送ってみる。
//無効化する方法（クロスサイトスクリプティング）
$name= htmlspecialchars($name, ENT_QUOTES);
$mail= htmlspecialchars($mail, ENT_QUOTES);
$pass= htmlspecialchars($pass, ENT_QUOTES);
$ijin= htmlspecialchars($ijin, ENT_QUOTES);
$zayuu= htmlspecialchars($zayuu, ENT_QUOTES);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前： <?php echo $name;?></p>
    EMAIL： <?php echo $mail;?></p>
    passward： <?php echo $pass;?></p>
    偉人： <?php echo $ijin;?></p>
    座右の銘： <?php echo $zayuu;?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
