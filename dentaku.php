<!DOCTYPE HTML>
<html lag="ja">
<head >
<meta charset="utf-8">
</head>
<body>
<h1>add test</h1>
<h1>ショウトツテスト</h1>
<form action="" method="POST">
<button type="submit" name="num" value="1">1</button>
<button type="submit" name="num" value="2">2</button>
<button type="submit" name="num" value="3">3</button>
<button type="submit" name="num" value="4">4</button>
<button type="submit" name="num" value="5">5</button>
</form>
<?php
if(isset($_POST['num'])){
$_POST['sum'] = "";
}else{
$_POST['sum'] = $_POST['sum'].$_POST['num'];
echo $_POST['sum'];
}
?>
</body>
</html>
