function validateForm() {
    // Clear previous error messages
    document.getElementById('nameError').innerHTML = '';
    document.getElementById('nidError').innerHTML = '';
    document.getElementById('phoneError').innerHTML = '';
    document.getElementById('emailError').innerHTML = '';
    document.getElementById('addressError').innerHTML = '';
    document.getElementById('dobError').innerHTML = '';
    document.getElementById('degreeError').innerHTML = '';
    document.getElementById('companyError').innerHTML = '';
    document.getElementById('jobError').innerHTML = '';
    document.getElementById('durationError').innerHTML = '';
    document.getElementById('passwordError').innerHTML = '';

    // Get form values
    var name = document.getElementById('name').value;
    var nid = document.getElementById('nid').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var dob = document.getElementById('dob').value;
    var degree = document.getElementById('higher degree').value;
    var company = document.getElementById('companyname').value;
    var job = document.getElementById('jobtitle').value;
    var duration = document.getElementById('duration').value;
    var password = document.getElementById('password').value;

    // Name validation (at least 4 characters)
    if (name == "" || name.length < 4) {
        document.getElementById('nameError').innerHTML = "Please enter a valid name (at least 4 characters).";
        return false;
    }

    // NID Number validation (only numbers)
    var nidPattern = /^[0-9]+$/;
    if (nid == "" || !nidPattern.test(nid)) {
        document.getElementById('nidError').innerHTML = "Please enter a valid NID number (only numbers).";
        return false;
    }

    // Phone validation (Bangladeshi phone number pattern)
    var phonePattern = /^01[3-9]\d{8}$/;
    if (phone == "" || !phonePattern.test(phone)) {
        document.getElementById('phoneError').innerHTML = "Please enter a valid Bangladeshi phone number (must start with 01 and be 11 digits long).";
        return false;
    }

    // Email validation (gmail.com domain)
    var emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    if (email == "" || !emailPattern.test(email)) {
        document.getElementById('emailError').innerHTML = "Please enter a valid email address (must contain gmail.com domain).";
        return false;
    }

    // Address validation (required field)
    if (address == "") {
        document.getElementById('addressError').innerHTML = "Please enter a valid address.";
        return false;
    }

    // Date of birth validation (required field)
    if (dob == "") {
        document.getElementById('dobError').innerHTML = "Please enter a valid date of birth.";
        return false;
    }

    // Degree validation (must select one option)
    if (degree == "Select Degree") {
        document.getElementById('degreeError').innerHTML = "Please select your highest degree.";
        return false;
    }

    // Company name validation (required field)
    if (company == "") {
        document.getElementById('companyError').innerHTML = "Please enter your company name.";
        return false;
    }

    // Job title validation (required field)
    if (job == "") {
        document.getElementById('jobError').innerHTML = "Please enter your job title.";
        return false;
    }

    // Duration validation (required field)
    if (duration == "") {
        document.getElementById('durationError').innerHTML = "Please enter the duration of your work experience.";
        return false;
    }

    // Password validation (required field)
    if (password == "") {
        document.getElementById('passwordError').innerHTML = "Please enter a valid password.";
        return false;
    }

    // If everything is valid, return true to allow form submission
    return true;
}
