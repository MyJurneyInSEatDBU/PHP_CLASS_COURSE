<?php

// Check if form submitted
if(isset($_POST['submit'])) {

    // Sanitize inputs
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $mail  = htmlspecialchars($_POST["email"]);

    // Validate empty fields
    if(empty($fname) || empty($lname) || empty($mail)) {
        die("All fields are required.");
    }
    $fh = fopen("guest.txt", "a");

    if(!$fh) {
        die("Error: Unable to open file.");
    }

    // Write data
    fwrite($fh, $fname."\t".$lname."\t".$mail."\n");
    fclose($fh);
    echo "Your data has been saved successfully!";
}
else {
    echo "Access denied.";
}
?>