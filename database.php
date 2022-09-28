
<!-- creating database connection -->
<?php

class Database{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "jobregisteration";
    
    private $connection;
    
    private $table = "job";

    function __construct()
    {
       
       $this->connection = new mysqli($this->server, $this->username, $this->password, $this->database);
       
    if($this->connection){
     ?> 
       <script>
          alert("Connection Successfull");
          </script>
     <?php
    }else{
        echo("Connection Success");
    }

  }

//   inserting database object
  function insert($fullname, $email, $phone_number, $gender, $date, $address){
     $insert = "INSERT INTO $this->table (Fullname, Email, Phonenumber, Gender, Date, Address)VALUES('$fullname', '$email', '$phone_number', '$gender', '$date', '$address')";
     $query = $this->connection->query($insert);
   
     if($query){
      return true;
     }else{
      return false;
     }
   
    }
   
             function data(){

              }
           }

?>