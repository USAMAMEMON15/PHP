<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
       <style>
        body{
            background-color:black;
            color:wheat;
            font-weight:bold;
        
        
        }
        </style>
</head>
<body>
     <div class="container">
        <div class="row ">
            <div class="col-lg-8 ">
                <table class="table table-boderded text-light">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>image</th>
                    </tr>
                    <?php
                    //Connection
                    include("./conn.php");
                    $sql = "select * from usama123";
                    $result =$conn->query($sql);
                    
                    if($result->num_rows > 0) {
                         while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                          <?php
                          echo "<td><img src=\"upload/${row['image']}\" height=300px 
                          width=300px /></td>"
                          ?>

                    <?php
                        }
                    }
                    ?>
                    
                    
                </table>
            </div>
        </div>
     </div>    

</body>
</html>