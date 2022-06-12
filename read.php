<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>アンケート集計結果</h1>
<table border="1">
<tr>
<th>日付(西暦)</th>
<th>登録時刻</th>
<th>名前</th>
<th>メールアドレス</th>
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

    ?>

</body>
</html>
