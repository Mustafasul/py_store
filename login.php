<?php 
    include_once 'connect.php';

      if (isset($_POST["Submit"])) {
      	$username = $_POST['username'];
      	$Password = $_POST["Password"];
      	if ($username == "" || $Password == "") {
      		echo " Enter Your Name and Password...";
      	}
      	elseif ($username !== "ali" || $Password !== "123") {
      		echo "Please Enter Your correct user name and Password...";
      	}
      	elseif ($username == "ali" && $Password == "123") {
      	 	header("location:home.php");
      	 
      	}

      }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> login form</title>
</head>
<body>
	<h2><center> Welcome to login page </center></h2>
	   <hr/><hr/> <br/><br/>
	   <table align="center"> 
	   	   <form method="POST">
	   	   	  <tr>
	   	   	  	<td style="font-size: 20px"> User Name </td>
	   	   	  	<td> <input type="text" name="username" placeholder="Enter Your Name" style="font-size: 18px"> </td>
	   	   	  </tr>
	   	   	  <tr>
	   	   	  	<td style="font-size: 20px"> Password </td>
	   	   	  	<td> <input type="Password" name="Password" placeholder="Enter Your Password" style="font-size: 18px"> </td>
	   	   	  </tr>
	   	   	  <tr>
	   	   	  	<td>  </td>
	   	   	  	<td> <input type="Submit" name="Submit" value=" Save " style="font-size: 18px"> </td>
	   	   	  </tr>

	     </form> 
	</table>

</body>
</html>