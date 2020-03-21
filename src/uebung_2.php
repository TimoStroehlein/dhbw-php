<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for ($i = 0; $i <= 10; $i++) {
    echo "Current: $i<br>";
    if ($i % 3 == 0) {
        echo "I can divide it by 3!!<br>";
    }
}
echo "did I not confuse you?";
?>
</body>
</html> 