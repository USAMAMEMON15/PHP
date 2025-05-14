
<?php 

            // CONNECTION

            include("./conn.php");

            // STEP 1

          if(isset($_GET['id'])){
              $sql = "select * from exam where id = " .$_GET['id'];
              $result = $conn->query($sql);
              $user = mysqli_fetch_assoc($result);
          }
          else{
            echo "<h5>Invalid Record!</h5>";
          }

        //   STEP 2

        if(isset($_POST['submit'])){
            extract($_POST);
            $name;
            $email;
            $password;
            $number;

            $sql = "update exam set name = '$name' , email = '$email' , password='$password' , number = '$number' where id = " .$_GET['id'];
            $result = $conn->query($sql);

            if($result == true){
                echo "<h1>Your Record Has Been Updated!</h1>";
            }
            else{
                echo "<h1>No Record Has Been Updated!</h1>";

            }
        }
           
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center fw-bold display-3 p-2 bg-dark text-warning">Update Record </h2>
    <div class="container">


        <div class="row">
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name"  class="form-control" id="" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email"  class="form-control" id=" " value="<?php echo $user['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Your  Password"  class="form-control" id="" value="<?php echo $user['password'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Number</label>
                        <input type="number" name="number" placeholder="Enter Your Number"   class="form-control" id="" value="<?php echo $user['number'] ?>">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark w-100 fw-bold" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>