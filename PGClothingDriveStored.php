<?php
$con = mysqli_connect("whprojectgraduationo.startlogicmysql.com ", "cd1_user", "detrick1_");
    
if(!$con)
{
    echo 'Not Connceted to Database';
}

if(!mysqli_select_db($con, 'cd1_form'))
{
    echo 'Database Not Selected';
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$volunteer = $_POST['volunteer'];
$comment = $_POST['comment'];


$sql = "INSERT INTO ClothingDrive (FirstName, LastName, Email, Phone, Volunteer, Comment) VALUES ('$firstname', '$lastname', '$email', '$phone', '$volunteer', '$comment')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Registered';
}
else
{
    echo 'Thank you for signing up!';
}

header("refresh:5; url=PGHome.html");


?>