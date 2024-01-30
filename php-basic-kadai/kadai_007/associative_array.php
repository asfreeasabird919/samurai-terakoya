<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>連想配列を作って値とキーを出力しよう</title>
</head>

<body>

    <?php
      // 連想配列に値を代入する
      $commodity_data = ['name' => 'Array', 'price' => 200, 'weight' => '160'];

 
      // 'name'というキーの値を更新する
      $commodity_data['name'] = 'onion';

      // 連想配列の値を出力する
      print_r($commodity_data);

    ?>
</body>

</html>