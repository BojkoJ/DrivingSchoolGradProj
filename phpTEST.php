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

echo $name."<br>".$surname."<br>".$age."<br>".$text."<br>".$stars."<br>".$gender."<br>".$date_end."<br>";
?>