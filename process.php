<?php 

//require_once "includes/header.php";
require_once "database/connection.php";
//require_once "database/credentials.php";


echo "<P> PRINT</P>";

if (isset($_POST['submit'])) {

$errors=[];
//name 
if (empty($_POST['name'])) {
    $errors[]="Name cannot be empty";
}
else{
    $name=trim($_POST['name']);
}
//email

if (empty($_POST['email'])) {
   $errors[]="Email cannot be Empty";
}
else{
    $email=trim($_POST['email']);
}
if (empty($_POST['username'])) {
    $errors[]="username cannot be empyt";
}
else {
    $username=trim($_POST['username']);

}
if (empty($_POST['phone'])) {
    $errors[]="give a phone number";
}
else{
    $phone=trim($_POST['phone']);
}



if (empty($_POST['address'])) {
       $errors[]="ENTER THE ADDRESS";
}
    else{
        $address=trim($_POST['address']);
    }
    
    
if (empty($_POST['paddress'])) {
    $errors[]="ENTER THE PERMANENT ADDRESS";
}
 else{
     $paddress=trim($_POST['paddress']);
 }
 
 if (empty($_POST['cnic'])) {
        $errors[]="CNIC MISSING";     
}
else{
    $cnic=trim($_POST['cnic']);
}


if (empty($_POST['date'])) {
    $errors[]="fill the date";
}
else{
    $date=trim($_POST['date']);
}


if(empty($errors)){

    $dbc = db_connect();

    $sql = "INSERT INTO form VALUES(NULL,'$name','$email','$username','$phone','$address','$paddress','$cnic','$date')";

    $result=mysqli_query($dbc,$sql);

    if($result){
        echo "<div class='alert alert-success' > data added successfully </div> ";
    }
    else {
        echo "<div class='alert alert-danger' > data not added successfully </div> ";

    }
     db_close($dbc);

}
else {
    # code...
    foreach($errors as $error){
        echo "<div class = 'alert alert-danger'>$error</div>";
    }
}


}


?>