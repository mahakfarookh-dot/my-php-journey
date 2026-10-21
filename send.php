<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your_email@gmail.com";//change this
    $subject = "New Portfolio Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if(mail($to, $subject, $body)){
        echo "Message sent! i'll reply soon.";
    }
    else{
        echo "Error sending message.";
    }
}
?>
<a href = "contact.php">Go Back</a>
