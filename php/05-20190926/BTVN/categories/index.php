<?php include './header.php'?>
<?php include 'connect.php'?>
<?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="SELECT p.id,p.title,p.content, p.description,c.categories
        FROM posts AS p JOIN category AS c
            ON p.category_id = c.id
        WHERE c.id = '{$id}'";
        $stmt=$conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $r=$stmt->fetchAll();
    }
    else{
        header("Location:index.php?id=1");
    }
?>
<div class="container First-container">
    <div class="row row-1">
        <?php
        foreach($r as $k=>$v){ ?>
        <div class="col-4 col-4-1 mt-2">
            <div class="card h-100" style="width: 20rem;">
                <img src=".././image/pexels-photo-1382731.jpeg" class="card-img-top bg-image" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $v['title']; ?></h5>
                    <p class="card-text"><?php echo $v['description']; ?></p>
                </div>
                <div class="mb-2 justify-content-between">
                        <a href="read.php?id=<?php echo $v['id'] ?>" class="btn btn-primary mr-5 ml-3 w-50">Read</a>
                        <span class="badge badge-success ml-3"><?php echo $v['categories']; ?></span>
                    </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include './footer.php' ?>