<?php
include '../control/viewallemployees_control.php';
?>

<!DOCTYPE html>
<html>
    <head>

        <title>

            ABC BUS COMPANY   

        </title>


        <style>

/* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    padding: 20px;
    text-align: center;
}

/* Employee List Container */
.employee-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Space between employee cards */
}

/* Individual Employee Item */
.employee-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    width: 280px; /* Adjust width based on design needs */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    transition: transform 0.3s ease;
}

/* Hover Effect on Employee Item */
.employee-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Styling for Employee Details */
.employee-item h3 {
    color: #229ba1;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.employee-item p {
    font-size: 1em;
    margin-bottom: 8px;
}

/* Strong label for fields */
.employee-item p strong {
    font-weight: bold;
    color: #333;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .employee-item {
        width: 100%; /* Full width on smaller screens */
    }
}


</style>

    </head>

    <body>
           <h1>Employee Details</h1>
        <form action="" method="post">
            
        </form>
    </body>
</html>