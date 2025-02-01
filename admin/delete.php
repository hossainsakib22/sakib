<?php
include '../control/delete_control.php';
?>

<!DOCTYPE html>
<html>
    <head>

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

/* Styling for the main heading */
h1 {
    text-align: center;
    color: #333;
    margin-top: 30px;
    font-size: 28px;
}

/* Styling for the form container */
form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    font-weight: bold;
}

/* Styling the fieldset (form group container) */
fieldset {
    border: 2px solid #4CAF50;
    padding: 20px;
    border-radius: 8px;
}

/* Table styling for the form fields */
table {
    width: 100%;
    margin-top: 10px;
    border-collapse: collapse;
}

td {
    padding: 8px;
    font-size: 16px;
    color: #333;
}

/* Input field styling */
input[type="text"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Error message styling */
.error-message {
    color: red;
    font-size: 14px;
    margin-top: 10px;
    text-align: center;
}

/* Additional padding and styling for the page */
body {
    background-color: #e8f5e9;
}

table {
    margin: 0 auto;
}

fieldset {
    border-radius: 10px;
}

</style>


        <title>
            ABC BUS COMPANY    
        </title>
    </head>
    <body>
        <h1>Employee Details Delete</h1>
        <form action="" method="post">
            <fieldset>
                <table>

                <tr><td>EMPLOYEE NAME:</td><td><input type="text" name="name" ></td></tr>  
                <tr><td>NID NUMBER:</td><td><input type="text" name="nid" ></td></tr>
                


                <tr>
                        <td>
                        <input type="submit" name="deleteEmployee" value="delete">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>