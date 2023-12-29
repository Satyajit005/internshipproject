<?php
session_start();
require('db.php');
if(!isset($_SESSION['Arjun'])){
    header("location:index.php");
}
?>
<?php

if(isset($_POST['register']))
{
    $vendor_name=$_POST['vendor_name'];
    $vendor_address=$_POST['vendor_address'];
    $vendor_email=$_POST['vendor_email'];
    $vendor_contact=$_POST['vendor_contact'];
    $gst_type=$_POST['gst_type'];
    
    
    
    //insert into table//
    $ins_query="insert into vendor_master(`vendor_name`,`vendor_address`,`vendor_email`,`vendor_contact`,`gst_type`) values('$vendor_name','$vendor_address','$vendor_email','$vendor_contact','$gst_type')";
    mysqli_query($con,$ins_query);
    echo "<script>alert('Data Inserted Sucessfully.');</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>
<?php
	include 'navbar.php';
	?>
    <section class="dashboard">
    <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="images/profile.jpeg" alt="arjun">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Vendor</span>
                </div>
                <div class="container">
<h1>Insert New Record</h1>
<form name="form" method="POST" > 
<p><input type="text" name="vendor_name" placeholder="Enter Name" required /></p>
    <p><input type="text" name="vendor_address" placeholder="Enter Address" required /></p>
    <p><input type="text" name="vendor_email" placeholder="Enter Email id" required /></p>
    <p><input type="text" name="vendor_contact" placeholder="Enter contact" required /></p>
    
    <select name="gst_type">
        <option value="">--Select gst_type--</option>
        <option value="igst">igst</option>
        <option value="gst">gst</option>
    </select>
    <button name="register">Submit</button> 
</form>
                </div>
            </div>
        </div>
    </section>
<script src="js/script.js"></script>
</body>
</html>

