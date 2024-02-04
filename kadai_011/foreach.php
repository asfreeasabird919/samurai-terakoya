<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>

    <?php
      // 連想配列に値を代入する
      $commodity_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      // 連想配列$commodity_dataのキーと値を1つずつ順番に出力する
      foreach ($commodity_data as $key => $value) {
        echo "{$key}：{$value}<br>";
      }
    ?>
</body>

</html>