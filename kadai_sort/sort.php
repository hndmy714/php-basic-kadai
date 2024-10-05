<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order === true) {
                sort($array);
            }else
                rsort($array);
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        $num = [15, 4, 18, 23, 10];

        echo '昇順でソートします。<br>';
        echo sort_2way($num, true);

        echo '降順でソートします。<br>';
        echo sort_2way($num, false);
        ?>
    </p>
</body>

</html>
 