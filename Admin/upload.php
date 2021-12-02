  
<?php
 include "connection.php";  
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
echo "connected . . 0";
$table=$_POST['table_name'];
if($table=='emp')
{
    $name=$_POST['name'];
    $Email=$_POST['Email'];
    $phone=$_POST['phone'];
    $addres=$_POST['addres'];
    $salary=$_POST['salary'];
    $city=$_POST['city'];
  
    
   
    $sql = "SELECT eid FROM emp";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      while($row = $result->fetch_assoc()) {
        $x+=1;
      }
      
      $x+=10;
     
    $sql = "INSERT INTO emp (eid,ename, email, ephone, address,salary,city) VALUES('$x','$name','$Email','$phone','$addres','$salary','$city')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    header("Location: Employe.php");
                    exit;
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

}
else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $target_dir = "images/";
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        echo "<img src='" .$target_file . "' />";
        $name=$_POST['name'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $Quantity=$_POST['Quantity'];
        //Combobox values get 
        $brand = $_POST['Brand'];
        $cata=$_POST['catagiory'];
     
    $sql = "SELECT pid FROM product";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      while($row = $result->fetch_assoc()) {
        $x+=1;
      }
      
      $x+=10;
    
     
    $sql = "INSERT INTO product (pid,name, price, description, img , quantity, bid, cid) VALUES('$x','$name','$price','$description','$target_file','$Quantity',2,3)";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                   header("Location: Product.php");
                   
                } else {
                    echo "Error:  $sql <br> $conn->error";
                }
    
    
              
               
    
                
    
    
    
    
                }
                
    
            }

}

?>

