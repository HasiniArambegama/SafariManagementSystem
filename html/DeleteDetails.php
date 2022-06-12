<?php
include_once 'config.php';
?>

<?php
		$recordemployee_id = $_GET['employee_id'];
		$sql= "DELETE FROM employee WHERE employee_id= '$recordemployee_id'";
		
		if($conn-> query($sql)){
			echo "<script> alter('Record deleted successfully')</script>";
			header("Location:ReadEmployeeDetails.php");
		
		}
		else{
			echo"<script> alter('ERROR: Could not execute $sql.')</script>";
			
		}
		
		mysqli_close($conn);
?>
