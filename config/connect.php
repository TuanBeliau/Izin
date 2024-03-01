<?php 
 
   $Username = "root"; 
   $Password = "12345"; 
   $Host = "localhost"; 
 
    $is_connect = mysqli_connect($Host, $Username, $Password);
  
     if($is_connect) {
      mysqli_select_db($is_connect, "Izin");
      #echo "program not available";
    } else {
      echo "Gak";
    }
?>