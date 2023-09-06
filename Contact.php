<?php
 


$server = "localhost";
$username  = "root";
$password = "";
$db = "contact";


$con = mysqli_connect($server, $username, $password, $db) or die(mysqli_error($con));


 if($con){
   echo "database coneected successfuly ";

}
 else{
   echo "Fail to connect";
 }


if(isset($_POST['submit'])){

  $name = $_POST['name'];


$email = $_POST['email'];

$subject = $_POST['subjec'];

$message = $_POST['message'];


$sql = mysqli_query($con, "Insert into teez (name, number, sel_event, date, email, location, venue, budget, info) Values('$name', '$number','$sel_event', '$date', '$email', '$location', '$venue' ,'$budget', '$info' )") or die(mysqli_error($sql));

if($sql){
  echo "Thank You For Your Message ";
  header("location: contact.html");

 
}

else{
  echo "failed";
 
}

}
mysqli_close($con);

?>

