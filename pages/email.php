<?php

if (isset($_POST['submit'])) {

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];

    $clubEmail = "freeportdgc@zohomail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name."\n\n".$message;

    mail($clubEmail, $interest, $txt, $headers);
    header("Location: contact.html?mailsend");


}