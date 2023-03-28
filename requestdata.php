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
$mobileno = $_POST['mnumber'];

$wantservices = $_POST['wantservices'];     //Array
$wantservices2 = implode(" ",$wantservices); //Convert Array to String

$wheremover = $_POST['wheremover'];
$shifting = $_POST['shifting'];
$country = $_POST['country'];
$state = $_POST['state'];

$zip = $_POST['zip'];


$sql = " insert into requestquote (name,email,mobileno,wantservices,wheremover,shiffting,country,state,zip) values('$name','$email','$mobileno','$wantservices2','$wheremover','$shifting','$country','$state','$zip')";

// mysqli_query($con, $sql);
if($con->query($sql) == true){
  echo '<script>alert("Confirm")</script>';
}
else{
  //echo "ERROR: $sql <br> $con->error";
  echo '<script>alert("Please Fill")</script>';
}

$con->close();

include 'request.php';

}

?>
