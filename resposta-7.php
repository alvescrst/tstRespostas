<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
// header('Content-Type: text/html; charset=utf-8');

echo "<h4>R.: 1</h4>";
$str = "hoje %s é o dia do php";
$data = date('d-m-Y');
printf($str, $data);

echo "<h4>R.: 2</h4>";
$str_inv = strlen($str);
for($i=$str_inv-1; $i >=0; $i--){
	printf($str[$i], $data);
}

?>
</body>
</html>