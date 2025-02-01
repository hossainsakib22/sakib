
<?php
session_start();
include '../model/mydb.php';

// Create a new instance of your database class
$mydb = new mydb();

// Get the connection object
$conobj = $mydb->connObject();

// Call the ViewAll method, passing the correct connection object ($conobj)
$result = $mydb->ViewAll($conobj, 'admin');

if ($result->num_rows > 0) {

    echo '<div class="employee-list">';
    // Loop through the result set and display employee details
    while ($row = $result->fetch_assoc()) {
        echo '<div class="employee-item">';
        echo "<h3>" . $row["name"] . "</h3>"; // Employee name as a header
        echo "<p><strong>NID:</strong> " . $row["nid"] . "</p>";
        echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
        echo "<p><strong>DOB:</strong> " . $row["dob"] . "</p>";
        echo "<p><strong>Highest Degree:</strong> " . $row["higherdegree"] . "</p>";
        echo "<p><strong>Company Name:</strong> " . $row["companyname"] . "</p>";
        echo "<p><strong>Job Title:</strong> " . $row["jobtitle"] . "</p>";
        echo "<p><strong>Duration:</strong> " . $row["duration"] . "</p>";
        echo "<p><strong>Password:</strong> " . $row["password"] . "</p>";
        echo '</div>'; 
       //echo "<a href='../view/home.php?nid=" . $row["nid"] . "'>View Details</a><br><br>";
    }
    echo '</div>';
} else {
    echo "No employees found.";
}

// Close the connection
$mydb->closeCon($conobj);
?>
