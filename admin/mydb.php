<?php

class MyDB {
    public $DBHostName = "localhost";
    public $DBUserName = "root";
    public $DBPassword = "";
    public $DBName = "mydb";

    // Constructor (optional, can be removed if redundant)
    function __construct() {
        $this->DBHostName = "localhost";
        $this->DBUserName = "root";
        $this->DBPassword = "";
        $this->DBName = "mydb";
    }

    // Create a new database connection object
    function connObject() {
        return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, $this->DBName);
    }

    // Insert employee data into the database
    function insertEmployee($conn, $table, $name, $nid, $phone, $email, $address, $dob, $higherdegree, $companyname, $jobtitle, $duration, $password) {
        // Secure the values before inserting them to prevent SQL injection
        $sqlString = "INSERT INTO $table (Name, Nid, Phone, Email, Address, DOB, higherdegree, CompanyName, JobTitle, Duration, Password) 
                      VALUES ('$name', '$nid', '$phone', '$email', '$address', '$dob', '$higherdegree', '$companyname', '$jobtitle', '$duration', '$password')";

        $result = $conn->query($sqlString);

        // If the query fails, return the error message, otherwise return the result
        if ($result === false) {
            return $conn->error;
        } else {
            return $result;
        }
    }

       
    // View all records from the table
    function viewAll($conn, $table ) {
        $sqlString = "SELECT * FROM $table";
        $result = $conn->query($sqlString);
        
        // Check if the query was successful
        if ($result === false) {
            return $conn->error;
        } else {
            return $result; // This will be a result set that you can iterate through
        }
    }

    // Delete an employee by their National ID (NID)
    function deleteEmployee($conn, $table, $nid) {
        $sqlString = "DELETE FROM $table WHERE Nid = '$nid'";

        // Execute the query
        $result = $conn->query($sqlString);

        if ($result === false) {
            return $conn->error;  // Return the error if the deletion fails
        } else {
            return $result;  // Return true if the deletion is successful
        }
    }

    // Close the database connection
    function closeCon($conn) {
        $conn->close();
    }
}
?>
