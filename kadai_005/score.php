<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題005</title>
</head>
<body>
    <?php 
    $score_1 = 80;
    $score_2 = 60;
    $score_3 = 55;
    $score_4 = 40;
    $score_5 = 100;
    $score_6 = 25;
    $score_7 = 80;
    $score_8 = 95;
    $score_9 = 30;
    $score_10 = 60;


    //変数、合計に合計点を代入
    $score_sum = $score_1 + $score_2 + $score_3 + $score_4 + 
    $score_5 + $score_6 + $score_7 + $score_8 + 
    $score_9 + $score_10;

    //変数、合計を出力
    echo $score_sum;

    //改行
    echo '<br>';

    //変数、平均に代入
    $score_avg = $score_sum / 10; 

    //変数、平均を出力
    echo $score_avg;

    ?>
</body>
</html>