<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前： <?= $name?>
Mail: <?= $mail?>
<!-- <?php echo $mail; ?> 14行目はこれの省略形。１行しか書かないときは、セミコロンも省略可能-->
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>