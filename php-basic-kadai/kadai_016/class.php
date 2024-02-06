<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>

    <?php
      // クラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // メソッドを定義する
        public function show_price() {
          echo $this->price . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
      }


      // クラスを定義する
      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // メソッドを定義する
        public function show_height() {
            echo $this->height . '<br>';
        }
        
        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }


       // インスタンス化する
       $food = new Food('potato', 250);
       // インスタンス$foodの各プロパティの値を出力する
       print_r($food);

       echo '<br>';

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);
      // インスタンス$foodの各プロパティの値を出力する
      print_r($animal);

      //メソッドの出力
      echo '<br>';
      $food->show_price();
      $animal->show_height();

    ?>
</body>

</html>