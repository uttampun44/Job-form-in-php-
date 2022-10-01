<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Table</title>

    <!-- sass -->
    <link rel="stylesheet" href="datatable.css">

    <!-- fontawesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="table">
         <div class="data">
             <table>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>PhoneNumber</th>
                    <th>Gender</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Delete</th>
                </tr>
                <?php
     
     if(isset($_POST['id'])){
        $id = $_GET['id'];

        $delete = $id->delete();
     }
     ?>
                <?php
                   require('database.php');
                  
                  $displaydata = new Database();
                   $dataresult = $displaydata->show();
                   
                   if($dataresult->num_rows > 0){

                    while($result = mysqli_fetch_assoc($dataresult)){

                 ?>
                <tr>
                    <td><?php echo $result['ID']; ?></td>
                    <td><?php echo $result['Fullname']; ?></td>
                    <td><?php echo $result['Email']; ?></td>
                    <td><?php echo $result['Phonenumber']; ?></td>
                    <td><?php echo $result['Gender']; ?></td>
                    <td><?php echo $result['Date']; ?></td>
                    <td><?php echo $result['Address']; ?></td>
                    <td><a href="delete.php?id=<?php echo $result['ID']; ?>"><i class="fa fa-trash-o" style="font-size:48px;color:red"></i></a></td>
                </tr>
                <?php
         
              }
                 }
           ?>
             </table>
         </div>
    </div>
   
</body>
</html>