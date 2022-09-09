<?php

   include_once 'connect.php';

   //if (isset($_GET['item_iD'])) {
   	 $item_id = $_GET["itemID"];

   	 $sql = "DELETE FROM `add_items` WHERE `add_items`.`item_iD` = $item_id";


        $result = mysqli_query($conn , $sql );
        if ( $result == 1) {
        	header("location:home.php?delet=true");
        }
        else {
        	echo "opps Record has not deleted";
        }

//}

?>