<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  <?php 
        include ("./conn.php");

        $alert ="";

        if(isset($_POST["submit"])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $image = $_FILES['image']['name'];
            
            
            if(!empty($name) && !empty($email) && !empty($image)){
                $sql = "insert into usama123(name , email , image ) values('$name','$email' , '$image')";
                $result = $conn->query($sql);
                 if(isset($_FILES)){
                  $file_name = $_FILES['image']['name'];
                  $file_type = $_FILES['image']['type'];
                  $file_size = $_FILES['image']['size'];
                  $file_tmp = $_FILES['image']['tmp_name'];
                  
                 move_uploaded_file($file_tmp , "upload/" .$file_name); 
                } 

                if($result == true){
                    $alert = "<div class='alert alert-info'>Your Form Has Been Submitted Succesfully!</div>";
                }
                 else{
                    $alert = "<div class='alert alert-danger'>Error While Submiting The Form!</div>";
                 }
            }
            else{
                $alert = "<div class='alert alert-warning'>Please Fill The Form!</div>";
            }
            echo $alert;
        }
        ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                      <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>


                    <div class="mb-3">
                      <label for="">image</label>
                        <input type="file" name="image" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark w-100" type="submit" value="submit" name="submit">Submit</button>
                    </div>
                </form>
                <?php
                                     
                 echo "<pre>";
                 print_r($_POST);

                 echo "<pre>";
                 print_r($_FILES);
                ?>
            </div>
        </div>
    </div>
</body>
</html>