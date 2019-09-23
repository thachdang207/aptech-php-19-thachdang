<?php include './connect.php'?>
<?php
    $sql="CREATE TABLE persons (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    echo "Table persons created successfully.";
?>