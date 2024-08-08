<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題16</title>
</head>
<body>
    <p>
    <?php

    // クラスを定義する
    class Food {

         // プロパティを定義する
        private $name;
        private $price;

        //メソッドを定義する
        public function set_price(int $price){
            $this -> price = $price;
        }

        //メソッドを定義する
        public function show_price(){
            echo $this->price . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price,) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
 
    // インスタンス$userの各プロパティの値を出力する
    print_r($food);

    
    ?>

    
    </p>

    <p>
   <?php
// クラスを定義する
class Animal {

    // プロパティを定義する
   private $name;
   private $weight;
   private $height;

   //メソッドを定義する
   public function set_height(int $height){
    $this -> height = $height;
}

   //メソッドを定義する
   public function show_height(){
       echo $this->height . '<br>';
   }

   // コンストラクタを定義する
   public function __construct(string $name,int $weight, int $height,) {
       $this->name = $name;
       $this->height = $height;
       $this->weight = $weight;
   }
}

// インスタンス化する
$animal = new Animal('dog', 60 , 5000);

// インスタンス$userの各プロパティの値を出力する
print_r($animal);


   ?>
    </p>
    <p>
    <?php
    //メソッドにアクセスして実行する
    $food->set_price(250);
    $food->show_price();

    //メソッドにアクセスして実行する
    $animal->set_height(60);
    $animal->show_height();
    ?>
   </p>
</body>
</html>