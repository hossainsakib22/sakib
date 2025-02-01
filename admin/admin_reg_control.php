<?php
include '../model/mydb.php';

$nameError="";
$nidnumberError="";
$phoneError="";
$emailError="";
$addressError="";
$dobError="";
$highestdegreeError="";
$companynameError="";
$jobtitleError="";
$durationError="";
$passwordError="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $hasError = 0;

    $name=$_POST["name"];
    $nid=$_POST["nid"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $dob=$_POST["dob"];
    $higherdegree=$_POST["higherdegree"];
    $companyname=$_POST["companyname"];
    $jobtitle=$_POST["jobtitle"];
    $duration=$_POST["duration"];
    $password=$_POST["password"];

    
    // Name validation
   if (empty($name)) {
        $nameError="Name is required.<br>";
        $hasError++;
    } elseif (!preg_match("/^[a-zA-Z\s]{4,50}$/", $name)) {
        $nameError="Name must only contain alphabets and be between 4 to 50 characters.<br>";
        $hasError++;
    } else {
        echo "Name: $name";
    }
    echo  "<br>";


    // National ID validation
    if (empty($nid)) {
        $nidnumberError="National ID is required.<br>";
        $hasError++;
    } elseif (!preg_match("/^[0-9]{6,10}$/", $nid)) {
        $nidnumberError="Invalid National ID Number";
        $hasError++;
    } else {
        echo "NID Number: $nid";
    }
    echo  "<br>";

    // Phone validation
    if (empty($phone)) {
        $phoneError="Phone number is required.<br>";
        $hasError++;
    } elseif (!preg_match("/^0[0-9]{10}$/", $phone)) {
        $phoneError="Phone number must start with 0 and contain exactly 11 digits";
        $hasError++;
    } else {
        echo "Phone: $phone";
    }
    echo  "<br>";

    // Email validation
    if (empty($email)) {
        $emailError="Email is required.<br>";
        $hasError++;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError="Invalid email address.<br>";
        $hasError++;
    } else {
        echo "Email: $email";
    }
    echo  "<br>";


    // Address validation
    if (empty($address)) {
        $addressError="Address is required.<br>";
        $hasError++;
    } else {
        echo "Address: $address";
    }
    echo  "<br>";

    // Date of Birth validation
    if (empty($dob)) {
        $dobError="Date of Birth is required.<br>";
        $hasError++;
    } elseif (!strtotime($dob)) {
        $dobError="Please enter a valid date.<br>";
        $hasError++;
    } else {
        echo "Date of Birth: $dob";
    }
    echo  "<br>";

       
    // Dropdown validation (Degree)
    if ($higherdegree === "Select Degree") {
         $highestdegreeError="Please select a degree.<br>";
         $hasError++;
    } 
    else {
         echo "Higher Degree: $higherdegree";
    }
    echo  "<br>";


    //
    if (empty($companyname)) {
        $companynameError="Company Name is required.<br>";
        $hasError++;
    } else {
        echo "Company Name: $companyname";
    }
    echo  "<br>";


    //
    if (empty($jobtitle)) {
        $jobtitleError="Job Title is required.<br>";
        $hasError++;
    } else {
        echo "Job Title: $jobtitle";
    }
    echo  "<br>";

    //
    if (empty($duration)) {
        $durationError="Duration is required.<br>";
        $hasError++;
    } else {
        echo "Duration: $duration";
    }
    echo  "<br>";


    // Password validation
    if (empty($password)) {
        $passwordError="Password is required";
        $hasError++;
    }
    elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$&]).{8,}$/", $password)) {
        $passwordError="Password must be at least 6 characters long, contain one uppercase, one lowercase, one numeric character, and one special character (@, #, $, &).<br>";
        $hasError++;
    } 
    else {
        echo "Password is valid.";
    }
    echo  "<br>";

    // Final check
    if ($hasError>0) {
        echo "Please insert correct data.";
    } 
    else 
    {
        //JSON 
        $data = 
        [
            "name" => $name,
            "password" => $password,
            "email" => $email,
            "NID" => $nid       
        ];

        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents("../json/userdata.json", $json);
        echo "";



    }

     //Database
        $mydb= new mydb();
        $conobj= $mydb-> connObject();
        
        //if($conn->connect_error) {die("Connection failed: ".$conn->connect_error);}
        $insert=$mydb->insertEmployee($conobj, 'admin', $name, $nid, $phone,$email,$address,$dob,$higherdegree,$companyname,$jobtitle,$duration,$password);
        if( $insert)
        {
            echo " <span style='color: green;'>Registration successful!</span>   ";
        }
        else{
            echo "<span style='color: red;'>There was an error saving the data.</span>";
        }
        $mydb->closeCon($conobj);

    }


?>