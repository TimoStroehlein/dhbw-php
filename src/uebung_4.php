<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $numbers = array(1,3,0,2,7,5,4);
        sort($numbers);
        $newNumbers = array_slice($numbers, 0, 3);
        rsort($newNumbers);

        $str = "Hello World";
        $newArray = explode(" ", $str);
        $newArray[1] = "Universe";
        list($hello, $universe) = $newArray;
        echo "$hello $universe";
    ?>
</body>
</html>