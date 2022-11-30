<?php

if (isset($_POST['submit'])) {

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];

    $club_email = "freeportdgc@zohomail.com";
    $header = "From: ".$email;
    $txt = "You have received an email from ".$fullname."\n\n".$message;

    mail($club_email, $interest, $txt, $header);
    header("Location: email.php?mailsend");


}