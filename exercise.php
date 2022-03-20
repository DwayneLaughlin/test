<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "dr2@ameritech.net";
    $headers = "From: ".$email;
    $txt = "You have an email from".$name.".\n\n".$message;

    email($mailTo, $txt, $headers);
    header("Location: index.php?mailend");
}