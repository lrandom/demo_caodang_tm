<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $mang = [1,2,3,4,5];
    
      foreach ($mang as $v) {
         echo $v; //12345
      }

      $manghaichieu = [
          [1,2,3],
          [2,3,4]
      ];
      $manghaichieu[0][0] ;//1
      $manghaichieu[0][1];
      $manghaichieu[1][2];
      
      $mangbachieu = [
          [
              [1,2,3,4],
              [2,3,4,5]
          ],
          [
              [2,3,4,5],
              [3,4,5,8]
          ]
          ];
      $mangbachieu[0][0][0];//0
      $mangbachieu[0][0][1];//2
      $mangbachieu[1][1][3];//8

      $manglienhop = array(
          "name"=>"Luan",
          "nghe_nghiep"=>"Lap trinh vien"
      );

      foreach ($manglienhop as $key => $value) {
        echo $key . $value . '<br>'; 
      }
    ?>
</body>
</html>