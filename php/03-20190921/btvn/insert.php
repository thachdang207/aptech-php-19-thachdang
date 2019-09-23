<?php include './connect.php'?>
<?php
    $sql="INSERT INTO persons(firstname,lastname ,email) VALUES('Thach','Dang','danghuuthach2@gmail.com')";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    echo "Inserted successfully";
?>