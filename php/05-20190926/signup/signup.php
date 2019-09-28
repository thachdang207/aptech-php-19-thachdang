<?php include "../header.php"?>
<?php include "connect.php"?>
<?php
    if(isset($_POST['submit']))
    {
        $errors=array();
        if(empty($_POST['name']))
        {
            $errors[]='name';
        }
        else{
            $name=$_POST['name'];
        }
        if(empty($_POST['email']))
        {
            $errors[]='email';
        }
        else{
            $email=$_POST['email'];
        }
        if(empty($_POST['password']))
        {
            $errors[]='password';
        }
        else{
            $password=$_POST['password'];
        }

        if(empty($errors))
        {
            
            $sql="SELECT * FROM users WHERE email=:email";
            $stmt=$conn->prepare($sql);
            $stmt->bindValue(':email',$email);
            $stmt->execute();
            $count1=$stmt->rowCount();
            if($count1==1)
            {
                $sql="INSERT INTO users (name, email, password)
                VALUES (:name,:email,:password)";
                $stmt=$conn->prepare($sql);
                $stmt->bindValue(':name',$name);
                $stmt->bindValue(':email',$email);
                $stmt->bindValue(':password',$password);
                $stmt->execute();
                $count=$stmt->rowCount();
                if($count==1)
                {
                    echo "<p class='text-success'>Sign up successfully</p>";
                }
            }
            else{
                $errors[]='exist';
            }
            
        }
        
    }
?>

<form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Name : </label>
        <input type="text" class="form-control" name="name" value="<?php if(isset($_POST['submit'])){echo $_POST['name'];}?>">
        <?php
            if(isset($errors)&&in_array('name',$errors)){
                echo "<p class='text-danger'>Please enter a name</p>";
            }
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $_POST['email'];}?>">
        <?php
            if(isset($errors)&&in_array('email',$errors)){
                echo "<p class='text-danger'>Please enter a name</p>";
            }
            if(isset($errors)&&in_array('exist',$errors)){
                echo "<p class='text-danger'>Email already exists</p>";
            }
        ?>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
        <?php
            if(isset($errors)&&in_array('password',$errors)){
                echo "<p class='text-danger'>Please enter a name</p>";
            }
        ?>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "../footer.php"?>