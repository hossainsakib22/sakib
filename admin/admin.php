<?php 
include '../control/admin_reg_control.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ABC BUS COMPANY</title>
        <link rel="stylesheet" href="../css/mystyle.css"> 
        <script src="../js/validationRequest.js"></script>
    </head>
               
    <body>
        <h1>Admin Registration</h1>
        <form action="" method="POST" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name"></td>
                    <td><span id="nameError" class="error-message"><?php echo $nameError; ?></span></td>
                </tr>
                <tr>
                    <td>NID Number:</td>
                    <td><input type="text" id="nid" name="nid"></td>
                    <td><span id="nidError" class="error-message"><?php echo $nidnumberError; ?></span></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" id="phone" name="phone"></td>
                    <td><span id="phoneError" class="error-message"><?php echo $phoneError; ?></span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id="email" name="email"></td>
                    <td><span id="emailError" class="error-message"><?php echo $emailError; ?></span></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea id="address" name="address"></textarea></td>
                    <td><span id="addressError" class="error-message"><?php echo $addressError; ?></span></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" id="dob" name="dob"></td>
                    <td><span id="dobError" class="error-message"><?php echo $dobError; ?></span></td>
                </tr>
                <tr>
                    <td>Highest Degree:</td>
                    <td>
                        <select id="higher degree" name="higherdegree">
                            <option value="Select Degree">Select Degree</option>
                            <option value="ssc">SSC</option>
                            <option value="hsc">HSC</option>
                            <option value="bsc">BSC</option>
                            <option value="master">MASTER</option>
                        </select>
                    </td>
                    <td><span id="degreeError" class="error-message"><?php echo $highestdegreeError; ?></span></td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" id="companyname" name="companyname"></td>
                    <td><span id="companyError" class="error-message"><?php echo $companynameError; ?></span></td>
                </tr>
                <tr>
                    <td>Job Title:</td>
                    <td><input type="text" id="jobtitle" name="jobtitle"></td>
                    <td><span id="jobError" class="error-message"><?php echo $jobtitleError; ?></span></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td><input type="text" id="duration" name="duration"></td>
                    <td><span id="durationError" class="error-message"><?php echo $durationError; ?></span></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password"></td>
                    <td><span id="passwordError" class="error-message"><?php echo $passwordError; ?></span></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Clear Form">
                    </td>
                </tr>
            </table>

            <div id="responseMessage"></div>
            
            <h6>
                1. Name should be at least 4 characters.<br>
                2. Email address must contain the gmail.com domain.<br>
                3. Please validate drop-down/select fields which the user must select one option.<br>
                4. Phone number must contain only numbers.<br>
            </h6>
        </form>

        <script>
        // Submit form using AJAX
        function submitForm() {
            // Clear previous errors
            document.getElementById('responseMessage').innerHTML = '';

            // Validate form
            if (!validateForm()) {
                return false;
            }

            var form = document.getElementById('adminForm');
            var formData = new FormData(form); // Collect form data

            // Create AJAX request
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Display response from the PHP script
                    document.getElementById("responseMessage").innerHTML = this.responseText;
                }
            };

            // Send POST request with form data
            xhttp.open("POST", "admin_reg_process.php", true);
            xhttp.send(formData);

            // Prevent form from submitting traditionally
            return false;
        }
    </script>

    </body>
</html>
