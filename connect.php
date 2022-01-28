<?php
$conn=new mysqli ($dbserver,$dbuser,$dbpassword);
if(mysqli_connect_error()){
        echo ("DATABASE CONNECTION FAILED:" . mysqli_connect_error();
        else{
                echo ("DATABASE CONNECTION SUCCEDD.");
