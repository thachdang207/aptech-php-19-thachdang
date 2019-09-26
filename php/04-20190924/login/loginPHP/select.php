<?php include './connect.php'?>
<?php 
    $sql="SELECT id,firstname,lastname,email FROM persons";
    $stmt=$conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $r=$stmt->fetchAll();
?>
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
    <table class="table" style="width:calc(100%-10px);">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col"class="text-center">First</th>
                <th scope="col"class="text-center">Last</th>
                <th scope="col"class="text-center">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($r as $k=>$v){?>
            <tr>
                <th scope="row"class="text-center"><?php echo $v['id']; ?></th>
                <td class="text-center"><?php echo $v['firstname']; ?></td>
                <td class="text-center"><?php echo $v['lastname']; ?></td>
                <td class="text-center"><?php echo $v['email']; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>

</html>