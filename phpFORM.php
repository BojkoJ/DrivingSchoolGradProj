<html>
    <header('Content-type: text/plain; charset=utf-8');</html>
<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$text = $_POST['text'];
$stars = $_POST['stars'];
$gender = $_POST['gender'];
$date_end = $_POST['date_end'];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "autoskola";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into recenze(jmeno,prijmeni,věk,text,hodnoceni,pohlavi,datum_ukonceni) 
values('$name','$surname','$age','$text','$stars','$gender','$date_end')";

if ($conn->query($sql) === TRUE)
{
    header("Location:website_recenze_done.html");
}
else
{
    header("Location:website_recenze_done0.html");
}
$conn->close();
?>