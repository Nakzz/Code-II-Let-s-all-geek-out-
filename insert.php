<?php

include("./includes/connect.inc.php");


// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$img = mysqli_real_escape_string($conn, $_REQUEST['img']);
$bio = mysqli_real_escape_string($conn, $_REQUEST['bio']);
$fun = mysqli_real_escape_string($conn, $_REQUEST['fun']);
$other = mysqli_real_escape_string($conn, $_REQUEST['other']);


// Attempt insert query execution
$sql = "INSERT INTO ITEMS  (name, img, bio, fun, other) VALUES
            ('$name', '$img', '$bio', '$fun', '$other')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>