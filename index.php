<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery 5+2</title>
    <style>
        body {
            background-color: black;
            color: gray;
        }
    </style>
</head>
<body>

<?php

// 输出生成的五组数字
for ($i = 0; $i < 5; $i++) {
    // 生成前区数字（1-35）
    $frontNumbers = range(1, 35);
    shuffle($frontNumbers);
    $selectedFrontNumbers = array_slice($frontNumbers, 0, 5);
    sort($selectedFrontNumbers);

    // 生成后区数字（1-12）
    $backNumbers = range(1, 12);
    shuffle($backNumbers);
    $selectedBackNumbers = array_slice($backNumbers, 0, 2);
    sort($selectedBackNumbers);

    $frontString = implode(", ", $selectedFrontNumbers);
    $backString = implode(", ", $selectedBackNumbers);

    echo "<p>前区：{$frontString}； 后区：{$backString}</p>";
}

?>

</body>
</html>