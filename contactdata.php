<?php


if(isset($_POST['name'])){
$con = mysqli_connect('localhost','root');

if(!$con){
    die ("Ooops....Try Again for Booking". mysqli_connect_error());
  }
  //echo "Successfull...";


  //User hit the save button, handle accordingly
mysqli_select_db($con,'moverpacker');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['message'];


$sql = " insert into contactus (NAME, EMAIL, SUBJECT, MESSAGES) values('$name','$email','$subject','$messages')";

//mysqli_query($con, $sql);
if($con->query($sql) == true){
  echo '<script>alert("Contact Confirm")</script>';
}
else{
  echo "ERROR: $sql <br> $con->error";
}

// $con->close();

include 'contact.php';
}

?>

