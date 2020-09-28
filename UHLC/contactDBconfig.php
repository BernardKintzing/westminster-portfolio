<?php
    include_once(contactupdated.php');
$conn = mysqli_connect('cs.westminstercollege.edu', 'uhlcadmin','uhlc2019', 'uhlc');

//username: uhlcadmin, password: uhlc2019

if (!$conn){
    echo "Can't connect" . mysqli_connect_error();
}


$name = mysqli_real_escape_string($conn,$_POST['name']);
$Organization = mysqli_real_escape_string($conn,$_POST['Organization']);
$EMail = mysqli_real_escape_string($conn,$_POST['EMail']);
$Phone =mysqli_real_escape_string($conn,$_POST['Phone']);
$PMethod = mysqli_real_escape_string($conn,$_POST['PMethod']);
$Message=mysqli_real_escape_string($conn,$_POST['Message']);


$sql = "INSERT INTO contact (name, Organization, EMail, Phone ,PMethod, Message)
 VALUES ('$name','$Organization','$EMail', '$Phone','$PMethod','$Message')";

$emailfr = 'EMAILGOESHERE@email.com';
$emailsub= "New Contact Form submitted";
$emailmess = "You have received a message from the contact form from $name. \n".
	"Message:\n $Message".
$to = "EMAILGOESHERE@email.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply to: $EMail \r\n";
mail($to,$emailsub,$emailmess,$headers);

if($conn->query($sql)== TRUE){
    echo "The request was successfully added";
 	header('Location: http://cs.westminstercollege.edu/uhlc/uhlc/index.php/contact/contactconfirm');
}
else{
    echo "Error".$sql."<br/>". $conn->error;
}



    //closing the connection
    mysqli_close($conn);
    ?>