<?php
include "function.chinese_date.php";

$dateinput = isset($_POST['dateinput']) ? $_POST['dateinput'] : '';

if(empty($dateinput))
{
   $dateinput = date("Y-m-d", time());
}

$str_c = chinese_date(strtotime($dateinput));


$html = <<< HEREDOC
<html>
<head>
<meta charset="UTF-8">
<title>中文的日期顯示</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<p>
輸入的日期是：{$dateinput}<br />
中文的表示是：{$str_c}
</p>

<form method="post" action="">
<p>日期：<input type="text" name="dateinput" value="{$dateinput}"></p>
<p><input type="submit" value="換成中文日期"></p>
</form>
</body>
</html>
HEREDOC;

echo $html;
?>