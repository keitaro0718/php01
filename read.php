<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>レビュー集計結果</h1>
<table border="1">
<tr>
<th>登録時刻（年月日・時刻）</th>
<th>名前</th>
<th>メールアドレス</th>
<th>居住地</th>
<th>性別</th>
<th>評価（５点満点）</th>
<th>評価ポイント</th>
</table>
    <?php
    $file = "./data/data.txt";
    if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
        echo "<table>\n";
        while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) {
            echo "\t<tr>\n";
            for ( $i = 0; $i < count( $data ); $i++ ) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
        fclose ( $handle );
    }
// http://mensbrand.blog110.fc2.com/blog-entry-40.html
// グラフは上記サイトを参照
    ?>
    <style>
    table,tr,td,th{
        border: solid 1px black; border-collapse: collapse;
    }
    td,th{
        min-width: 60px;
    }
    th{
        background: silver;
    }
    </style>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>
