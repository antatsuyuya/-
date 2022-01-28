<?php


$name= $_POST['name'];
$birthPlace= $_POST['birthPlace'];
$ijin= $_POST['ijin'];
$zayuu= $_POST['zayuu'];

// ファイルに書き込み
$date=date("Y/m/d H:i:s");
$str=$date.$name.$birthPlace.$ijin.$zayuu;
$file=fopen("./data/data.txt","a");
fwrite($file,$str . "\n");
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
