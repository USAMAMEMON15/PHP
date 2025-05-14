<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php 
        include ("./conn.php");

        $alert ="";

        if(isset($_POST["submit"])){
            $name = $_POST['name'] ?? "" ;
            $email = $_POST['email'] ?? "" ;
            $password = $_POST['password'] ?? "" ;
            $number = $_POST['number'] ?? "" ;
            
            // VALIDATION
            if(!empty($name) && !empty($email) && !empty($password) && !empty($number)){
                $sql = "insert into exam(name , email , password , number) values('$name','$email' , '$password' , '$number')";
                $result = $conn->query($sql);

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
        <div class="row">
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="mb-3">
                      <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                      <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>


                    <div class="mb-3">
                      <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>


                    <div class="mb-3">
                      <label for="">Number</label>
                        <input type="number" name="number" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-dark w-100" type="submit" value="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>