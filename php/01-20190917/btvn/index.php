<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- print_r -->
    <?php 
        $array=array("Thach Dang","Thachkk","thachkkk");
        $name="Dang huu Thach";
        echo "<pre>";
            print_r($array);
        echo "</pre>";
        echo "Name:".$name;
    ?>
    <!-- constant -->
    <?php 
        define("MY_NAME","tất nhiên lại là Thạch Đặng rồi :v ", true);
        //echo "<br>".my_name;
        //define("MY_NAME", "NGUYEN HAI 123 NAM", true); //error
        echo "<br>" . MY_NAME;
    ?>
    <!-- data types -->
    <?php 
        $array=array(13,"13","thachkkk",true,array("Thach",123));
        $name="Dang huu Thach";
        echo "<pre>";
            print_r(var_dump($array));
        echo "</pre>";
    ?>
    <!-- 
        $x=$a ?? $b; nếu $a tồn tại thì $x=$a;không tồn tại thì $x=$b;
     -->
     <!-- foreach -->
     <?php 
      $arr = ["name" => "Name", "class" => "PHP", "age" => 18];
      foreach ($arr as $k => $v) {
      echo $k . ' - ' . $v . '<br>';
      }
     ?>
</body>
</html>