<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>String invertida</title>
	<meta charset="utf-8" />
</head>
<body>
<?php

// Variaveis String Normal
$str = "hoje %s é o dia do php";
$data = date('d/m/Y');

// String Invertida
echo "<h4>String normal</h4>";
printf($str, $data);

// String Invertida
echo "<h4>String invertida</h4>";

$tamanho_str = strlen($str);
$exp = explode(' ', $str);

for ($i=sizeof($exp)-1; $i >= 0; $i--) {
 	echo str_replace('%s', $data, $exp[$i].' ');
}

?>
</body>
</html>