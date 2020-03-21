<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    for ($i = 1; $i < 101; $i++) {
        if ($i % 2 == 0) {
            echo "gerade: ".$i."<br>";
        } else {
            echo "ungerade: ".$i."<br>";
        }
    }
    for ($i = 1; $i < 101; $i=$i+2) {
        echo $i."<br>";
    }
    ?>
</body>
</html>