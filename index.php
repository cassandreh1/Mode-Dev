<?php

$db= mysqli_connect('localhost', 'root', 'root', 'sign_in');

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit'])) {
$userEmail = $_POST['email'];
$timestamp = date('Y-m-d G:i:s');
$message = "";

$select ="SELECT * FROM signinform WHERE email = '$userEmail'";
$result = mysqli_query($db, $select);
if(mysqli_num_rows($result) > 0) {
    $message = 'This email is already being used';
    $userEmail = "";
}

if(!empty($userEmail)) {
    $sql = "INSERT INTO signinform (email, created_on) VALUES('$userEmail', '$timestamp')";
    if(mysqli_query($db, $sql)){
        $message = "Thanks for signing up! You'll recieve an email with your invititation";
    } else{
        $message = "There was a problem with your request: valid email address not provided";
    }
} else {
    $message;
}
    
}
mysqli_close($db);
?>