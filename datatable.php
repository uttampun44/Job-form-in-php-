<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Table</title>

    <!-- sass -->
    <link rel="stylesheet" href="datatable.css">
</head>
<body>
    <div class="table">
         <div class="data">
             <table>
                <tr>
                    <td>ID</td>
                    <td>FullName</td>
                    <td>Email</td>
                    <td>PhoneNumber</td>
                    <td>Gender</td>
                    <td>Date</td>
                    <td>Address</td>
                </tr>
                
                <?php
                   require('database.php');
                   
                 ?>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
             </table>
         </div>
    </div>
</body>
</html>