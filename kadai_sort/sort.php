<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    
    <p>
    <?php
    function sort_2way($array, $order = 'asc')
    {
        if ($order === 'asc') {
            sort($array);
            echo '昇順にソートします。<br>';
        } elseif ($order === 'desc') {
            rsort($array);
            echo '降順にソートします。<br>';
        }
    
        // ソートされた配列を表示
        foreach ($array as $value) {
            echo "{$value}<br>";
        }
        
}

$nums = [15, 4, 18, 23, 10 ];
sort_2way($nums,'asc');
sort_2way($nums,'desc');


    ?>
    </p>
</body>
</html>