<?php
if ($_GET["email"] != null){
    echo "Hello," . $_GET["email"];
    $subject = "Space App Newsletter";
    $message = "This is the first (and last) newsletter from my site. Good bye";
    $mail = mail($_GET["email"], $subject, $message);
    if ($mail){
        echo "Success";
    }
}