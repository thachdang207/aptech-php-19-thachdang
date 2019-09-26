
<?php include '../header.php' ?>
<?php include 'connect.php' ?>
<?php
    if(isset($_POST['submit']))
    {
        $errors=array();
        if(empty($_POST['firstname']))
        {
            $errors[]='firstname';
        }
        else{
            $firstname=$_POST['firstname'];
        }
        if(empty($_POST['lastname']))
        {
            $errors[]='lastname';
        }
        else{
            $lastname=$_POST['lastname'];
        }
        if(empty($_POST['email']))
        {
            $errors[]='email';
        }
        else{
            $email=$_POST['email'];
        }
        if(empty($errors))
        {
            $sql="INSERT INTO persons(firstname,lastname,email) VALUES (:firstname,:lastname,:email)";
            $stmt=$conn->prepare($sql);
            $stmt->bindValue(':firstname',$firstname);
            $stmt->bindValue(':lastname',$lastname);
            $stmt->bindValue(':email',$email);
            $stmt->execute();
            $count=$stmt->rowCount();
            if($count==1)
            {
              echo "<p class='text-success'>Thêm mới thành công.</p>";
            }
        }
    }
?>

<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="firstname" value="<?php if(isset($_POST['submit'])){echo $_POST['firstname'];} ?>">
    <?php if(isset($errors)&&in_array('firstname',$errors)){echo "<p class='text-danger'>Vui lòng nhập họ</p>";}?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="lastname" value="<?php if(isset($_POST['submit'])){echo $_POST['lastname'];} ?>">
    <?php if(isset($errors)&&in_array('lastname',$errors)){echo "<p class='text-danger'>Vui lòng nhập Tên</p>";}?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $_POST['email'];} ?>">
    <?php if(isset($errors)&&in_array('email',$errors)){echo "<p class='text-danger'>Vui lòng nhập email</p>";}?>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Insert</button>
  </form>
<?php include '../footer.php' ?>