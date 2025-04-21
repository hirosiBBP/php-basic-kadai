<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編sort</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($arrays, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($arrays);
            } else {
                echo '降順にソートします。<br>';
                rsort($arrays);
            }
        
            foreach ($arrays as $array) {
                echo $array . '<br>';
            }
        }
        
        $arrays = [15, 4, 18, 23, 10];
        sort_2way($arrays, true);
        sort_2way($arrays, false);
        
        ?>
    </p>
</body>

</html>