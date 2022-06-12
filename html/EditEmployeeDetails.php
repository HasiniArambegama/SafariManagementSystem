<?php
		
					$employee_id = "";
					$first_name = "";
					$last_name = "";
					$designation = "";
					$mobile_num = "" ;
					$landline_num = "";
					$email = "";
?>

<html>
<head>
<link rel="stylesheet" href="../css/Styles.css"/>
<link rel="stylesheet" href="../css/Styles1.css"/>

<script src="../js/Java.js"></script>
<title>
Our Team
</title>
</head>
<body>
<header>	
<table border=0 width=100%>
<tr>
<td> <h2 id=head>CEYLON WILDLIFE SAFARI</h2></td>

<th><h4 id=h4>
<ul class="option">
<li class="option"><a href="#help">HELP |</a></li>
<li class="option"><a href="#terms">TERMS |</a></li>
<li class="option"><a href="#privacy">PRIVACY |</a></li>
<li class="option"><a href="login.html">SIGN IN</a></li>
</ul>
</h4></br>

<a href="register.html"><button type="button" id=bt><b>Create an Account</b></button></a>
</th>
</tr>
<tr>
<td><img class="logo" src="../images/logo.png" width="200" height="250"></td>
</tr>
</table>

<br><br><br><br><br>
<ul class="menu">
<li class="menu"><a href="Home.html"><b>HOME</b></a></li>
<li class="menu"><a href="about.html"><b>ABOUT US</b></a></li>
<li class="menu"><a href="details.html"><b>PARK DETAILS</b></a></li>
<li class="menu"><a href="register.html"><b>REGISTRATION</b></a></li>
<li class="menu"><a href="Packages.html"><b>PACKAGES</b></a></li>
<li class="menu"><a href="Discount and Offers.html"><b>DISCOUNT & OFFERS</b></a></li>
<li class="menu"><a href="Payment.html"><b>PAYMENT</b></a></li>
<li class="menu"><a href="Payment Form.html"><b>PAYMENT FORM</b></a></li>
<li class="menu"><a href="Time Tables.html"><b>TIME TABLE</b></a></li>
<li class="menu"><a href="Contact Us.html"><b>CONTACT US</b></a></li>
<li class="menu"><input type="text" placeholder="Search.."></li>
</ul>

</header>
<?php
		        include 'config.php';
?>

           
            <?php
			 if (isset ($_GET['employee_id']))
			 {
			
			 
            $recordID = $_GET['employee_id'];

            $sql = "SELECT * FROM employee where employee_id=$recordID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) 
				{
                    $employee_id = $row ["employee_id"];
					$first_name = $row["first_name"];
					$last_name = $row["last_name"];
					$designation = $row["designation"];
					$mobile_num = $row["mobile_num"];
					$landline_num = $row["landline_num"];
					$email = $row["email"];
                }
            } mysqli_close($conn);

			 }
            ?>
            <br><br>

            <!-- displaying already existing values -->


            <form method="POST" action="submitUpdateDetails.php">

Employee ID<br>
<input type="text" name="employee_id" value=<?php echo $employee_id ?> readonly >
<br><br>
First Name
<br>
<input type="text" name="first_name" value=<?php echo $first_name ?>>
<br><br>
Last Name
<br>
<input type="text" name="last_name" value=<?php echo $last_name ?> >
<br><br>

Employee Designation
<br>
<input type="text" name="designation" value=<?php echo $designation ?> >
<br><br>

Mobile Number
<br>
<input type="phone1" name="mobile_num"  value=<?php echo $mobile_num?> >
<br><br>
Landline Number
<br>
<input type="phone" name="landline_num"  value=<?php echo $landline_num ?> >
<br><br>
E-mail
<br>
<input type="email" name="email" value=<?php echo $email ?>  >
<br><br><br>
<input type="submit" name="Submit" value="Submit updated details"><br>

</form>
    














<footer>
<hr id="line1">

<div class="down" id=tb1 style"border-style: groove; border-color: white;">
<table border=0 width=100%>
<tr>
<table border=0 width=100%>
<tr>
<td>Location:</td>
<td>Email:</td>  
<td>Telrphone:</td> 
</tr>
<tr>
<td>Ceylon Wild Safari,</br>No 23,</br>Kandy Road,</br>Colombo.</td>
<td>abs@gmail.com</br>des@gmail.com</td>
<td>011-294384</br>021-2304201</br>071-1394564</td>
<td>
<a href="facebook.com"><img src="../images/fb.jpg" width="60" height="60"></a>
<a href="twitter.com"><img src="../images/tw.png" width="60" height="60"></a>
<a href="instagram.com"><img src="../images/ins.jpg" width="60" height="60"><a>
<a href="gplus.com"><img src="../images/gpl.jpg" width="60" height="60"></a>

</td>
</tr>	
<tr>
<th colspan=3>
<a href="Contact us.html">Contact Us </a>
<a href="#privacy" >| Privacy Policy</a>
</th>
</tr>
</table>
<br><br><br>			
</div>		
<hr id="line1">

<table border=0 width=100%>	
<tr>
<th><h6 id=last>All Rights Reserved.</h6></th>
</table>
</footer>

</body>
</html>


<?php
include_once 'config.php';

		if(isset($_POST['Submit']))
		{
		$first_name =$_POST["first_name"];
		$last_name =$_POST["last_name"];
		$designation =$_POST["designation"];
		$mobile_num =$_POST["mobile_num"];
		$landline_num =$_POST["landline_num"];
		$email =$_POST["email"];
		
		$sql= "INSERT INTO employee( first_name , last_name, designation,mobile_num, landline_num, email)
		
		VALUES('$first_name','$last_name','$designation','$mobile_num','$landline_num','$email')";
		
		$result=mysqli($conn,$sql);
		if($result)
		{
			echo "done";
		}
		
		mysqli_close($conn);
		}
		
?>


