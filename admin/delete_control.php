<?php
session_start();
include '../model/mydb.php';

if (isset($_POST["deleteEmployee"])) {

  
    $name = $_POST["name"];
    $nid = $_POST["nid"];


    if (empty($name) || empty($nid)) {
        // Display error message if fields are empty
        echo "Both Employee Name and NID Number are required!";
    } else {

    // Create a new database connection object
    $mydb = new mydb();
    $conobj = $mydb->connObject();

    // Call the delete method (assuming it returns the number of affected rows)
    $result = $mydb->deleteEmployee($conobj, 'admin',  $name, $nid);
    
    if ($result > 0) {
        // Employee deleted successfully, redirect to the home page
        header("Location: ../view/home.php");
        exit();
    } else {
        echo "User not found or deletion failed.";
    }

    // Close the connection
    $mydb->closeCon($conobj);
}
}
?>
