<?php
$koneksi = mysqli_connect('127.0.0.1', 'root', '', 'dimy');

$iaminterestedin = $_POST['iaminterestedin'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$country = $_POST['country'];
$fullname = $_POST['fullname'];
$project_description = $_POST['project_description'];
$submit = $_POST['submit'];

$query = "INSERT INTO dimy(iaminterestedin, email, phone, company, country, fullname, project_description, submit) VALUES('$iaminterestedin','$email','$phone','$company','$country','$fullname','$project_description','$submit')";
mysqli_query($koneksi, $query);
