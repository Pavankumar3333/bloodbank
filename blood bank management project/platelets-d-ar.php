<?php
 require("config.php");
 if(isset($_POST['reject-blood']))
 {
    $id=$_POST['timesss'];
    // echo $date;
    $sq="SELECT * FROM `platelets-donation-form` where id='$id'";
    $sq_run= mysqli_query($con,$sq);
    $row = mysqli_fetch_array($sq_run);

    $username=$row['username'];
    $age=$row['age'];
    $units=$row['units'];
    $group=$row['bloodgrp'];
    $number=$row['number'];
    $recent=$row['recent'];
    $weight=$row['weight'];
    $address=$row['address'];
    $reports=$row['reports'];

    $iq="INSERT INTO `platelets-donation-rejected`(`username`, `age`, `units`, `bloodgrp`, `number`,`recent`, `weight`, `address`, `reports`) VALUES ('$username','$age','$units','$group','$number','$recent','$weight','$address','$reports')";
    $iq_run= mysqli_query($con,$iq);

    $query = "DELETE FROM `platelets-donation-form` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script>alert("data Rejected");</script>';
        header("location:donor-profiles.php");
    }
    else{
        echo '<script>alert("data not deleted");</script>';
    }
}


else if(isset($_POST['approve-blood'])){
    $id=$_POST['timesss'];
    // echo $date;
    $sq="SELECT * FROM `platelets-donation-form` where id='$id'";
    $sq_run= mysqli_query($con,$sq);
    $row = mysqli_fetch_array($sq_run);

    $username=$row['username'];
    $age=$row['age'];
    $units=$row['units'];
    $group=$row['bloodgrp'];
    $number=$row['number'];
    $recent=$row['recent'];
    $weight=$row['weight'];
    $address=$row['address'];
    $reports=$row['reports'];

    $iq="INSERT INTO `platelets-donation-approved`(`username`, `age`, `units`, `bloodgrp`, `number`,`recent`, `weight`, `address`, `reports`) VALUES ('$username','$age','$units','$group','$number','$recent','$weight','$address','$reports')";
    $iq_run= mysqli_query($con,$iq);

    $query = "DELETE FROM `platelets-donation-form` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script>alert("data Approved");</script>';
        header("location:donor-profiles.php");
    }
    else{
        echo '<script>alert("data not Approved");</script>';
    }
}
?>