<?php
  include_once 'connect.php';

  $itemId = $_GET['itemID'];


  if (isset($_POST['Submit'])) {
  	   $ItemiD = $_POST["Item_iD"];
  	   $ItemName = $_POST["Item_Name"];
  	   $Itemcategory = $_POST["Item_category"];
  	   $ItemQTY = $_POST["Item_QTY"];
  	   $Itemprice = $_POST["Item_price"];
  	   $Totalprice =  $_POST["Total_price"];

          
         if ($ItemiD =="" || $ItemName == "" || $Itemcategory == "" || $ItemQTY == "" || $Itemprice == "" || $Totalprice == "" ) {
         	echo "Please fill all the feildes";
          	
                                                         }
         else  {

          	 $result = mysqli_query($conn , "UPDATE `add_items` SET `item_ID` = '$ItemiD',`item_name` = '$ItemName', `item_category` = '$Itemcategory', `item_qty` = '$ItemQTY', `item_price` = '$Itemprice', `total_price` = '$Totalprice' WHERE `add_items`.`item_iD` = $itemId;");
                 
               if ( $result == 1 ) {
        	        echo "Record successfully submitted ...";
                 // header("location:home.php");

                                  }
               else {
        		  echo "connection problems ";
        	      }
        	     }
  }


 ?>
 <!DOCTYPE html>
     <html>
         <head>
 	          <title>update item</title>
         </head>
 <body>
           <h2 style="color: green"> <center>Update Items Form  </center></h2> <hr/><hr/><br/><br/>

             <table align="center" > 

<?php 

    $query = "SELECT * FROM `add_items` WHERE add_items.item_iD = $itemId";

    $result = mysqli_query($conn, $query);

    $rows = mysqli_fetch_assoc($result);

?>


             	   <form method = "POST">
             	<tr>
             		<td> Item_iD </td>
             		<td> <input type="number" name="Item_iD" value="<?php echo $rows['item_iD'] ?>"> </td>
             	</tr>
             	<tr>
             		<td> Item_Name </td>
             		<td> <input type="text" name="Item_Name" value="<?php echo $rows['item_name'] ?>"> </td>
             	</tr>
             	<tr>
             		<td> Item_category </td>
             		<td> <input type="text" name="Item_category" value="<?php echo $rows['item_category'] ?>"> </td>
             	</tr>
             	<tr>
             		<td> Item_QTY </td>
             		<td> <input type="number" name="Item_QTY" value="<?php echo $rows['item_qty'] ?>"> </td>
             	</tr>
             	<tr>
             		<td> Item_price</td>
             		<td> <input type="number" name="Item_price" value="<?php echo $rows['item_price'] ?>"> </td>
             	</tr>
             	<tr>
             		<td> Total price </td>
             		<td> <input type="text" name="Total_price" value="<?php echo $rows['total_price'] ?>"> </td>
             	</tr>
             	<tr>
             		<td>  </td>
             		<td> <input type="Submit" name="Submit" value=" Update " style="color: blue"> </td>

             	</tr>
              <tr>
                <td> </td>
                <td>  <a href="home.php"><input type="button" name="button" value="Go to home" style="color: blue"></a> </td>
              </tr>

                 </form>
             </table>
 </body>
 </html>