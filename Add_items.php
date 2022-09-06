<?php
  include_once 'connect.php';


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

          	 $result = mysqli_query($conn , "INSERT INTO `add_items` (`item_iD`, `item_name`, `item_category`, `item_qty`, `item_price`, `total_price`) VALUES ('$ItemiD', '$ItemName', '$Itemcategory', '$ItemQTY', '$Itemprice', '$Totalprice'); ");
                 
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
 	          <title>add item</title>
         </head>
 <body>
           <h2 style="color: green"> <center>Add New Items  </center></h2> <hr/><hr/><br/><br/>

             <table align="center" > 

             	   <form method = "POST">
             	<tr>
             		<td> Item_iD </td>
             		<td> <input type="number" name="Item_iD"> </td>
             	</tr>
             	<tr>
             		<td> Item_Name </td>
             		<td> <input type="text" name="Item_Name"> </td>
             	</tr>
             	<tr>
             		<td> Item_category </td>
             		<td> <input type="text" name="Item_category"> </td>
             	</tr>
             	<tr>
             		<td> Item_QTY </td>
             		<td> <input type="number" name="Item_QTY"> </td>
             	</tr>
             	<tr>
             		<td> Item_price</td>
             		<td> <input type="number" name="Item_price"> </td>
             	</tr>
             	<tr>
             		<td> Total price </td>
             		<td> <input type="text" name="Total_price"> </td>
             	</tr>
             	<tr>
             		<td>  </td>
             		<td> <input type="Submit" name="Submit" value=" Save New_items " style="color: blue"> </td>

             	</tr>
              <tr>
                <td> </td>
                <td>  <a href="home.php"><input type="button" name="button" value="GO To Home page" style="color: blue"></a> </td>
              </tr>

                 </form>
             </table>
 </body>
 </html>