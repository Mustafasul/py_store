<?php 
    include_once 'connect.php';


     $recordset = mysqli_query($conn , "SELECT * FROM `add_items` ");
     $row = mysqli_fetch_assoc($recordset);

     if (isset($_GET['add_items'])) {
     	echo "Record has sucessfully submittid ";
        }
     if (isset($_GET["delete"])) {
     	echo "record has sucessfully deleted ";
         }
      if (isset($_GET["update"])) {
      	echo "Record has sucessfully updated ";
      }


 ?>



<!DOCTYPE html>
   <html>
       <head>
	      <title>home</title>
          </head>
             <body>
	           <h2 style="color: blue"><center> Welcome to Home page </center></h2> <hr><hr>
	           <a href="add_items.php" style="float: right;"> Add item</a>
	           <table style="padding: 4px " border="3" align="center">
	           	<tr>
	           	  <th style="padding: 12px"> item_iD </th>
	           	  <th> item_Name </th>
	           	  <th> item_Category </th>
	           	  <th> item_QTY </th>
	           	  <th> item_price </th>
	           	  <th> Total_price </th>
	           	  <th> Delete </a> </th>
	           	  <th> Update </a></th>
	           	</tr>
	  <tr>
	  <?php do{ ?>
	       <td> <?php echo $row["item_iD"]; ?> </td>
	       <td> <?php echo $row["item_name"]; ?> </td>
	       <td> <?php echo $row["item_category"]; ?> </td>
	       <td> <?php echo $row["item_qty"]; ?> </td>
	       <td> <?php echo $row["item_price"]; ?> </td>
	       <td> <?php echo $row["total_price"]; ?> </td>
	       <td> <a href="delete.php?itemID=<?php echo $row['item_iD']; ?>" > Delete </a> </td>
	       <td> <a href="update.php?itemID=<?php echo $row['item_iD'];?> "> Update </a> </td>    		
	   </tr>
	   <?php }while  ($row = mysqli_fetch_assoc($recordset)) ;?>

	           </table>


</body>
</html>