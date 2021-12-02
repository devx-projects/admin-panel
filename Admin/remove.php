<?php 

$id =$_POST['id_director'];
$table=$_POST['table_name'];

include "connection.php";  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($table=='product')
{
 

        $sql = "SELECT *FROM card where pid='$id'";
        $result = mysqli_query($conn, $sql);
               
        $sql = "DELETE FROM card WHERE pid='$id'";//delete form card
        mysqli_query($conn, $sql);
         
        $sql = "SELECT *FROM order where pid='$id'";
        $result = mysqli_query($conn, $sql);

        $sql = "DELETE FROM order WHERE pid='$id'";  //delete from order
        mysqli_query($conn, $sql);

          $sql = "SELECT *FROM '$table' where pid='$id'";
          $result = mysqli_query($conn, $sql);
                                                             //delete from product
          $sql = "DELETE FROM product WHERE pid='$id'";
          if(mysqli_query($conn, $sql)){echo "deleted";

            header("Location: Product.php");
          exit;
          }
  

      

        


        
}
else if($table=='customer')
{
  $sql = "SELECT *FROM '$table' where cusid='$id'";
$result = mysqli_query($conn, $sql);

        $sql = "DELETE FROM customer WHERE cusid='$id'";
        if(mysqli_query($conn, $sql)){echo "deleted";
        header("Location: customer.php");
        exit;
        }
}
else if($table=='emp')
{
  $sql = "SELECT *FROM '$table' where eid='$id'";
$result = mysqli_query($conn, $sql);

        $sql = "DELETE FROM emp WHERE eid='$id'";
        if(mysqli_query($conn, $sql)){echo "deleted";
        header("Location: Employe.php");
        exit;
        }
}
else{
  echo "<script type='text/javascript'>alert('Error to select tables values in reomve.php ');</script>";
}

    
  $conn->close();


?>