<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<title>POST練習</title>

</head>
<body>
<div class="header_inner">
	<h1 class="header_title">レビューを書く</h1>
</div>
<form action="write.php" method="post">
	<p class="form_title">お名前:<input type="text" name="name" class="form_item"></p>
	<p class="form_title">EMAIL: <input type="text" name="mail" class="form_item"></p>
	<p class="form_title">居住地（都道府県）:<input type="text" name="address"class="form_item"></p>
	<p class="form_title">性別：
		<input id="male" type="radio" name="sex" value="male"><label for="male">男性</label>
		<input id="female" type="radio" name="sex" value="female"><label for="female">女性</label>
		<input id="none" type="radio" name="sex" value="none"><label for="none">答えたくない</label>
	</p>
	
	<p class="form_title">点数（5点満点）
		<select name="rating" id="rating">
			<option value="0"></option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
	</p>
	<p class="form_title">特によかったポイント
		<select name="reason" id="reason">
			<option value="clean">清潔さ</option>
			<option value="kind">オーナーが親切</option>
			<option value="location">リスティングの立地</option>
			<option value="response">迅速な対応</option>
			<option value="facility">十分な設備</option>
		</select>
		</p>
	<input type="submit" value="送信" class="btn">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
<script>
	let rateHTML = '';
for(let i = 1; i<11; i++){
    rateHTML += `<option value"${i}">${i}</option>`
}
$('#rating').html(rateHTML);
</script>
</body>
</html>
