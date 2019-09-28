<?php include 'connect.php'?>
<?php include './header.php'?>
<?php
    if(isset($_POST['submit']))
    {
        $errors=array();
        if(empty($_POST['title']))
        {
            $errors[]='title';
        }
        else{
            $title=$_POST['title'];
        }
        if(empty($_POST['category_id']))
        {
            $errors[]='category_id';
        }
        else{
            $category_id=$_POST['category_id'];
        }
        if(empty($_POST['content']))
        {
            $errors[]='content';
        }
        else{
            $content=$_POST['content'];
        }
        if(empty($_POST['description']))
        {
            $errors[]='description';
        }
        else{
            $description=$_POST['description'];
        }
        if(empty($errors))
        {
            $sql="INSERT INTO posts(title,content,description,category_id) VALUES (N'{$title}',N'{$content}',N'{$description}','{$category_id}')";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $count=$stmt->rowCount();
            if($count==1){
                $messenger="<p class='text-success'>Add a successful post</p>";
            }
            else{
                $messenger="<p class='text-danger'>Adding posts failed</p>";
            }
        }
        
    }


?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form method="POST">
                <?php if(isset($messenger)){echo $messenger;}?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" name='title'>
                    <?php if(isset($errors) && in_array('title',$errors)){
                        echo "<p class='text-danger'>Please Enter a title</p>";
                    } ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <option value="1">Thời sự</option>
                        <option value="2">Pháp luật</option>
                        <option value="3">Thế giới</option>
                        <option value="4">Xuất bản</option>
                        <option value="5">Kinh doanh</option>
                        <option value="6">Công nghệ</option>
                        <option value="7">Thể thao</option>
                        <option value="8">Giải trí</option>
                        <option value="9">Thời trang</option>
                        <option value="10">Sống trẻ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control" rows="3" name="content"></textarea>
                    <?php if(isset($errors) && in_array('content',$errors)){
                        echo "<p class='text-danger'>Please Enter a content</p>";
                    } ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                    <?php if(isset($errors) && in_array('description',$errors)){
                        echo "<p class='text-danger'>Please Enter a description</p>";
                    } ?>
                </div>
                <button class="btn btn-success" name="submit">Add Post</button>
            </form>
        </div>
    </div>
</div>
<?php include './footer.php'?>