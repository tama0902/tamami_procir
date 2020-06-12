<?php
if (!empty($_GET)) {
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	if (is_numeric($num1) && is_numeric($num2)) {
		echo $num1 + $num2;
	} else {
		echo '数字以外が含まれています';
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>git3</title>
</head>
<body>
<form action="" method="GET">
<input type="text" name="num1">
<input type="text" name="num2">
<input type="submit" value="送信">
</form>
</body>
</html>
