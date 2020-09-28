<?php
// $pageTitle = "PHP and MySQL";
 require_once "includes/header.php";
// require_once "database/connection.php";
// db_connect();
?>





  <body>
    
        <div class="container-fluid">
            <div class="row justify-content-center ">
               <div class="col-sm-4">
                <form action="process.php" method="POST" >
                    <div class=" ">
                        <h2>Registration Form</h2>
                    </div>
                    <div class="form-group">
                    
                <div><label for="name">Full Name</label><br>
                <input type="text" name="name" id="name" class="form-control"  >
            </div>
                <div><label for="email">Email Address</label><br>
                <input type="email" name="email" id="email" class="form-control"  >
            </div>
            
                <div><label for="name">User name</label><br>
                <input type="text" name="username" id="Id" class="form-control"  >
            </div>
            
                <div><label for="tel">Phone Number</label><br>
                <input type="tel"class="form-control" name="phone"  id="phone"  >
            </div>
                <div><label for="Address">Present Address</label><br>
                <input type="text" id="address" name="address" class="form-control"  >
            </div>
                <div><label for="Address">Permanent Address</label><br>
                <input type="text" id="paddress" name="paddress" class="form-control"  >
            </div>
                <div><label for="">Cnic</label><br>
                <input type="text" name="cnic" id="cnic" placeholder="xxxxx-xxxxxxx-x"   class="form-control">
            </div>
                <div><label for="Date">Date of Birth</label><br>
                <input type="date" id="date " name="date"class="form-control"  > 
            </div>
            <br>
            <input type="submit" name="submit" id="submit" value="Register!" class="form-control btn btn-success">

                    </div>

                </form>
               </div>
            </div>
        </div>





        <?php require_once "includes/footer.php"; ?>

   
  </body>
</html>