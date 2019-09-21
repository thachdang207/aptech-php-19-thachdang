<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
<?php
        $products=[
            'iphone11'=>[
                'price'=>1099,
                'made'=>[
                    'in'=>'China',
                    'by'=>'California'
                ]
            ],

            'note9'=>[
                'price'=>1555,
                'made'=>[
                    'in'=>'Viet Nam',
                    'by'=>'Korean'    
                ]
                ],
            'mua tai'=>'Nhà'
        ];
        
        $arr=array_keys($products);
?>
<table class="table" style="width:calc(100%-100px)!important;">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">in</th>
      <th scope="col">by</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $arr[0] ?></td>
      <td scope="row"><?php echo $products[$arr[0]]['price']; ?></td>
      <td><?php echo $products[$arr[0]]['made']['in']; ?></td>
      <td><?php echo $products[$arr[0]]['made']['by']; ?></td>

    </tr>
    <tr>
      <td><?php echo $arr[1] ?></td>
      <td scope="row"><?php echo $products[$arr[1]]['price']; ?></td>
      <td><?php echo $products[$arr[1]]['made']['in']; ?></td>
      <td><?php echo $products[$arr[1]]['made']['by']; ?></td>
    </tr>
  </tbody>
</table>

<hr>
<table class="table" style="width:calc(100%-100px)!important;">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">in</th>
      <th scope="col">by</th>
    </tr>
  </thead>
  <tbody>
    <?php $total=0; foreach($products as $k=>$v) {
        
             if($k!='mua tai') {
                $total += $v['price'];?>
        <tr>
            <td><?php echo $k; ?></td>
            <td><?php echo $v['price']; ?></td>
            <td><?php echo $v['made']['in']; ?></td>
            <td><?php echo $v['made']['by']; ?></td>
        </tr>
    <?php }else { ?>
        <tr>
            <td><?php echo "Tong : " ?></td>
            <td><?php echo $total; ?></td>
            <td></td>
            <td></td>
        </tr>
    <?php }} ?>
  </tbody>
</table>
<hr>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">in</th>
      <th scope="col">by</th>
    </tr>
  </thead>
  <tbody>
    <?php $total=0; for($i=0;$i<count($products)-1;$i++) { 
        $total+=$products[$arr[$i]]['price'];
        ?>
        <tr>
            <td><?php echo $arr[$i] ?></td>
            <td scope="row"><?php echo $products[$arr[$i]]['price']; ?></td>
            <td><?php echo $products[$arr[$i]]['made']['in']; ?></td>
            <td><?php echo $products[$arr[$i]]['made']['by']; ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td>Tong : </td>
        <td><?php echo $total; ?></td>
        <td></td>
        <td></td>
    </tr>
  </tbody>
</table>

</body>
</html>