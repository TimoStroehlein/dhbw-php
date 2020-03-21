<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
ob_start();
echo "Hello World!<br />";
$out1 = ob_get_clean();
echo "I am PHP<br />";
$out2 = ob_get_contents();
echo "I do dynamic Web<br />";
$out3 = ob_get_contents();
echo "And I am the last one<br />";
ob_flush();
echo "<br />";
var_dump($out1);
echo "<br />";
var_dump($out2);
echo "<br />";
var_dump($out3);
?>
</body>
</html>