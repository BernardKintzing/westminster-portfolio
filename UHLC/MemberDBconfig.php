<?php
    include_once 'Join.php';
$conn = mysqli_connect('cs.westminstercollege.edu', 'uhlcadmin','uhlc2019', 'uhlc');

if (!$conn){
    echo "Can't connect" . mysqli_connect_error();
}
$fname =mysqli_real_escape_string($conn,$_POST['fname']);
$lname =mysqli_real_escape_string($conn,$_POST['lname']);
$Email = mysqli_real_escape_string($conn,$_POST['EMail']);
$Organization = mysqli_real_escape_string($conn,$_POST['Organization']);
$Address = mysqli_real_escape_string($conn,$_POST['Address']);
$City = mysqli_real_escape_string($conn,$_POST['City']);
$State = mysqli_real_escape_string($conn,$_POST['State']);
$ZIP = mysqli_real_escape_string($conn,$_POST['ZIP']);
$Phone = mysqli_real_escape_string($conn,$_POST['Phone']);
if (!empty($fname)){
if (!empty($lname)){

}

else{
    
        echo "Last name cannot be empty";
        die();
    }
}
else{
    echo "First name can't be empty";
    die();
}

$sql = "INSERT INTO members (fname, lname, Email, Organization, Address, City, State, ZIP, Phone)
 VALUES ('$fname','$lname','$Email','$Organization','$Address','$City','$State','$ZIP','$Phone')";

if($conn->query($sql)== TRUE){
    echo "The Record has been added successfully";
}
else{
    echo "Error".$sql."<br/>". $conn->error;
}

    //closing the connection
    mysqli_close($conn);
    ?>