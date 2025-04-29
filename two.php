<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center fw-bold bg-dark text-info p-2 display-3">Contact Form</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="four.php" method="post">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class ="form-control" name="name" placeholder="Enter Your Name" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email"class ="form-control"  name="email" placeholder="Enter Your Email" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Number</label>
                        <input type="number"class ="form-control"  name="number" placeholder="Enter Your Number" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Select Your Course</label>
                        <br>
                        <input type="radio" value="CSS" name="course" id="">CSS
                        <input type="radio" value="PHP" name="course" id="">PHP
                        <input type="radio" value="JS" name="course" id="">JS
                    </div>
                    <div class="mb-3">
                        <label for="">Select Your Food</label>
                        <br>
                        <input type="checkbox" value="Biryani" name="food[]" id="">Biryani
                        <input type="checkbox" value="Chinese" name="food[]" id="">Chinese
                        <input type="checkbox" value="Steak" name="food[]" id="">Steak
                        <input type="checkbox" value="Pasta" name="food[]" id="">Pasta
                    </div>

                    <div class="mb-3">
                        <label for="">Select Your Date Of Birth</label>
                        <input type="date" name="date" id="">
                    </div>
                    <div class="mb-3">
                        <label for="">Message</label> 
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="btn btn-dark w-100 fw-bold" type="submit" name="submit">Submit</button>
                </form>

                <a href="four.php">Home</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php

    if(isset($_POST["submit"])){
        echo "<pre>";
        print_r($_POST);
    }
    else{
        echo "<h1>NO DATA FOUND!</h1>";
    }

?>