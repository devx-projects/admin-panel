
<?php
session_start();
include "connection.php";  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

try{

    $name = ($_POST["username"]);
    $pass=($_POST["pass"]);
    $error = "username/password incorrect";
     $sql = "SELECT *FROM admin";
     $result = mysqli_query($conn, $sql);
     
       while($row = $result->fetch_assoc()) {
         if($row["id"]==$name&&$row["pass"]==$pass){
          header("Location: Admin.php");
          exit;
    }
    else{
      $_SESSION["error"] = $error;
      header("location: Login.php");
    }
    }
                                      
   }


catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
  
}

?>
