<?php 
$koneksi = mysqli_connect('127.0.0.1', 'root', '', 'dimy');

$iaminterestedin = $_POST['iaminterestedin'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$country = $_POST['country'];
$fullname = $_POST['fullname'];
$projectdescription = $_POST['projectdescription'];
$submit = $_POST['submit'];

$query ="INSERT INTO dimy VALUES('$iaminterestedin','$email','$phone','$company','$country','$fullname','$projectdescription','$submit')";
mysqli_query($koneksi,$query);
?>