<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "stud_reg";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

//echo "Connection";
if(isset ($_POST['Submit']))
{
  $Fname = $_POST["Fname"];
  $Lname = $_POST["Lname"];
  $birthday = $_POST["birthday"];
  $PAddress = $_POST["PAddress"];
  $PAcity = $_POST["PAcity"];
  $PAcountry = $_POST["PAcountry"];
  $email = $_POST["email"];
  $AEmail = $_POST["AEmail"];
  $Cnumber = $_POST["Cnumber"];
  $ACnumber = $_POST["ACnumber"];
  $CName = $_POST["CName"];
  $CCity = $_POST["CCity"];
  $CZip = $_POST["CZip"];
  $PFname = $_POST["PFname"];
  $PCNumber = $_POST["PCNumber"];
  $PACNumber = $_POST["PACNumber"];
  $PEmail = $_POST["PEmail"];
  $PAEmail = $_POST["PAEmail"];
  $gender = $_POST["gender"];


    $qry = "INSERT INTO student_info  (first_name , last_name , bod , p_add , city_state_zip , country , email , alt_email , s_no , s_alt_no , college_name , col_city_state , col_zip , p_name , p_no , p_alt_no ,p_email , p_alt_email , gender ) VALUES ('$Fname','$Lname','$birthday','$PAddress','$PAcity','$PAcountry','$email','$AEmail','$Cnumber','$ACnumber','$CName','$CCity','$CZip','$PFname','$PCNumber','$PACNumber','$PEmail','$PAEmail' , '$gender')";
   
  $result = mysqli_query($conn,$qry) or die(error);
  if($result!=null)
  {
    echo "New record created successfully";
    header('location: index.html');
  }
  else
  { 
    echo "Error: " . $result . "<br>" . $conn->error;
  }
  


}


?>