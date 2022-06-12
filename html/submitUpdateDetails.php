<?php
    include_once 'config.php';


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$designation=$_POST["designation"];
$mobile_num=$_POST["mobile_num"];
$landline_num=$_POST["landline_num"];
$email=$_POST["email"];
$employee_id=$_POST["employee_id"];




$sql="UPDATE employee
     SET first_name='$first_name',last_name='$last_name',designation='$designation',mobile_num='$mobile_num',landline_num='$landline_num',email='$email'
     WHERE employee_id='$employee_id'";

if($conn->query($sql)){
   
    header("Location:ReadEmployeeDetails.php");
}
else{
    echo "<script> alert('ERROR: Could not execute $sql')</script>" ;
   
}
mysqli_close($conn);

?>