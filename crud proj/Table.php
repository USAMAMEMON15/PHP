<?php 

    include("./conn.php");
    
    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM exam where id = $id";
            $result = $conn->query($sql);

            if($result == true){
                echo "<h3>Your Record has been Deleted</h3>";
                header("Location: Table.php");
                exit();
            }
            else{
                echo "<h3>No Record has been Deleted</h3>";

            }
        }
    
    
    
    $sql = "select * from exam";
    $result = $conn->query($sql);

  
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
    <h2 class="text-center fw-bold bg-dark text-info display-3 p-3"> TABLE DATA</h2>
   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
             <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NUMBER</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        <?php 
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                 ?>   
                        
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["password"] ?></td>
                        <td><?php echo $row["number"] ?></td>
                        <td><a href="adit delete.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Edit</a></td>
                        <td><a href="Table.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
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

