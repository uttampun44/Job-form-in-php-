<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registeration</title>

    <link rel="stylesheet" href="./sass/customer.css">
</head>
<body>
    <main>
        <h1>Job Registeration</h1>
        <div class="customer-main-div">
               <div class="customer-form">
                      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                           <div class="parent-form">
                                 <label>FullName:</label>
                                 <input type="text" required name="fullname">
                                 <br>
                                 <label>Email:</label>
                                 <input type="email" required name="email">
                                 <br>
                                 <label>PhoneNumber:</label>
                                 <input type="text" name="phone">
                                 <br>
                                 <div class="gender">
                                 <label>Gender</label>
                                 <label>Male:</label><input type="radio" required value="male" name="gender">
                                 <label>Female:</label><input type="radio" required value="female" name="gender">
                                 </div>
                                 <br>
                                 <label>D.O.B</label>
                                 <input type="date" name="date">
                                 <br>
                                 <label>Address</label>
                                 <input type="text" name="address">
                                 <br>
                                 <button name="submit" value="submit" type="submit">Submit</button>
                           </div> 
                      </form>
               </div>
        </div>
    </main>
    <?php
    require('database.php');
    $db = new Database();
       
      if(isset($_POST['submit'])){
       $fullname = $_POST['fullname'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone'];
       $gender = $_POST['gender'];
       $date = date('Y-m-d', strtotime($_POST['date']));
       $address = $_POST['address'];

       $db->insert($fullname, $email, $phone_number, $gender, $date, $address);
       

       if($db){
          echo("Data Inserted Success");
          header('location: customer.php');
       }else{
        die();
       }
       
      }
    ?>

    <script>
         function refresh(){
            return true;
         }
    </script>
</body>
</html>