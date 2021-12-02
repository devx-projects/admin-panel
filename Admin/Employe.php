<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Employee</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container">
          <div class="row">
            <!-- sidebar start -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Adminstration</a>
              <div class="bottom-border pb-3">
                 <a href="#" class="text-white">Farhan</a>  <!--Name Give there Dynamacally -->
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="Admin.php" method="post" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                <li class="nav-item"><a href="Product.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Product</a></li>
                <li class="nav-item"><a href="inbox.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
                <li class="nav-item"><a href="sales.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Sales</a></li>
                <li class="nav-item"><a href="Customer.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Customer</a></li>
                <li class="nav-item"><a href="charts.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a></li>
                <li class="nav-item"><a href="Employe.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Employe</a></li>
                
            </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Employee</h4> <!--  Name phase -->
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                  <li class="nav-item icon-parent ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out" class="nav-link icon-bullet"><i class="fas fa-users-cog text-danger"></i></i></a></li>
                  <li class="nav-item ml-md-auto"><a href="#"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
               
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
      <!-- end of activities / quick post -->
      <section>
    <div class="container-fluid" >
    <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center mt-5">
              <div class="col-xl-11">
                <div id="accordion">
<table class="table table-light table-hover" id="First_table">
		<tr>
          <th>Sr</th>
			<th>Id</th>
			<th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Addres</th>
      <th>city</th>
      <th>Salary</th>
		
		</tr> 
		<tbody>
        <?php
        include "connection.php";
     
        $sql = "SELECT * FROM emp";
        $records = mysqli_query($conn, $sql);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $recordId = $record->eid;
                $name = $record->ename;
                $email = $record->email;
                $phone= $record->ephone;
                $address= $record->address;
                $salary=$record->salary;
                $city=$record->city;
                ?>
                <form action="remove.php" method="POST">
                <tr>
                <input type="hidden" name="id_director" value="<?=$recordId  ?>" />
                <input type="hidden" name="table_name" value="emp" />
                    <th><?php echo $sr;?></th>
                    <th><?php echo $recordId;?></th>
                    <th><?php echo $name;?></th>
                    <th><?php echo $email;?></th>
                    
                    <th><?php echo $phone;?></th>
                    <th><?php echo $address;?></th>
                    <th><?php echo $salary;?></th>
                    <th><?php echo $city;?></th>
                    <td><button type="submit" class="btn btn-danger btn-sm">Delete</td>
                </tr>
                </form>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>
	
		
   </table> 
   <button type="button"   class="btn btn-success"  data-toggle="modal" data-target="#Add-Items" >Add New</button>
  
   



    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    
   <!-- Modle for add items -->
               <!-- modal -->
    <div class="modal fade" id="Add-Items"   >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add New Items </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body"  >
              <form action="upload.php" method="post" enctype="multipart/form-data">
              
              <input class="form-control" type="text" name="name" placeholder="Emp Name " required>
              <br>
              <input  type="text" name="Email" class="form-control" placeholder="Email " required>
              <br><br>
              <input class="form-control" type="number" name="phone" placeholder="Phone"required>
              <br>
              <input class="form-control" type="text" name="addres" placeholder="addres"required>
              <br>
              <input class="form-control" type="text" name="city" placeholder="city"required>
              <br>
               <input class="form-control" type="number" name="salary" placeholder="salary"required>
              <input type="hidden" name="table_name" value="emp" />
                <br>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button>
              <button type="submit" class="btn btn-success">Add Employee</button>    
              </form>
            
          </div>
         
      </div>
    </div>
    <!-- end of modal -->
                
 </div>

       







  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>