<?php

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];

$header = "From: ".$name."<".$email.">\r\n";

$club_email = "freeportdgc@zohomail.com";

mail($club_email, $interest, $message, $header)
or die("Sorry, there was an error.");
?>