<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Demo';
    $to = 'emiratesbp@gmail.com';
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\n E-mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        /* Anything that goes in here is only performed if the form is submitted */
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something wnt wrong, go back and try again!</p>';
        }
    }

    if($_POST['submit'] && $human == '7') {
        if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something wnt wrong, go back and try again!</p>';
        }
    } else if ($_POST['submit'] && $human !='7') {
        echo '<p>>ou answered the anti-spam question incorrectly!</p>';
    } echo '<p>You need to fill in all required fields!</p>';
?>