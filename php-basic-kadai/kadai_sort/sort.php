<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>

    <?php
      
      function sort_2way($array, $order) {
      
          if ($order == TRUE) {
            echo "昇順にソートします。<br>";
            sort($array);
          } else {
              echo "降順にソートします。<br>";
              rsort($array);
          }
          
          foreach ($array as $num) {
            echo $num . '<br>';
          }
      }

          $nums = [15, 4, 18, 23, 10];
          sort_2way($nums, TRUE);
          sort_2way($nums, FALSE);
    ?>
</body>

</html>