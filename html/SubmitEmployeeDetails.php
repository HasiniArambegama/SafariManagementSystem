<?php
include_once 'config.php';

		
		$first_name =$_POST["first_name"];
		$last_name =$_POST["last_name"];
		$designation =$_POST["designation"];
		$mobile_num =$_POST["mobile_num"];
		$landline_num =$_POST["landline_num"];
		$email =$_POST["email"];
		
		$sql= "INSERT INTO employee( first_name , last_name, designation,mobile_num, landline_num, email)
		
		VALUES('$first_name','$last_name','$designation','$mobile_num','$landline_num','$email')";
		
				if($conn-> query($sql))
					{
						echo "Successfully Inserted";
					
					}
					else 
					{
						echo "Error Inserting".$conn->error;
					}
					
					
					
					$conn->close();
?>
