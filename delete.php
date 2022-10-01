<?php
require('database.php');

 
$delete = new Database();

$id = $_REQUEST['id'];
$del = $delete->delete($id);

if($del){
    echo("Delete Successfull");
}else{
    
}
?>