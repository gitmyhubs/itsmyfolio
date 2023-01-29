<?php 
    
    // ****************************** USER REGISTRATION  ***************************************
 
    if(isset($_POST['register'])) //fetching data from input boxes
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    //connecting to the database
    include("connect.php");

    mysqli_query($con, "INSERT into users(name,email,subject,mobile,message) values('$name','$email','$subject','$mobile','$message')");
    
    if (mysqli_affected_rows($con)==1)
     {
        echo "<center style='color:green; font-size:20px;'><b>Thank You!! Your data send Successfully.</b></center>";
     }
     else 
     {
        echo "<center style='color:red; font-size:20px;'>Sorry!! Unable To Send data, Please Try Again...</center>";   
     }

 }
?>