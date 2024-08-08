<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
<?php

class SampleClass
{
  //プロパティの宣言
  public $var = 'This is Sample Class.';

}

//インスタンスの生成
$sample = new SampleClass();

echo $ample->var;

?>
</p>
</body>
</html>