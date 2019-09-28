<?php include './header.php'?>
<?php include 'connect.php'?>
<?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="SELECT p.title,p.content, p.description,c.categories
        FROM posts AS p JOIN category AS c
            ON p.category_id = c.id
        WHERE p.id = '{$id}'";
        $stmt=$conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute();
        $r=$stmt->fetchAll();
    }
    else{
        header("Location:index.php?id=1");
    }
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $r[0][0]?></h1>
            <span class="badge badge-primary"><?php echo $r[0][3]; ?></span>
            <p class="mt-5"><?php echo $r[0][1]?> </p>
        </div>
    </div>
</div>
<?php include './footer.php'?>