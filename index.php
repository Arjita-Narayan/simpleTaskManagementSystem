<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        .password-input {
            display: none;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form id="signinForm" action="" method="POST">

                <div id="signin-form">
                    <label for="userid">Userid:</label>
                    <input type="text" id="userid" name="userid" required><br><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br><br>

                    <button type="submit" id="signin-btn">LOG IN</button><br><br>
                    
                    <button type="button" onclick="toggleForm()">CREATE NEW ACCOUNT</button>
                </div>

                <div id="signup-form" style="display: none;">
                    <!-- Sign Up form elements go here -->
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required><br><br>

                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required><br><br>

                    <label for="mobile_number">Mobile Number:</label>
                    <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" required><br><br>

                    <label for="new_password">New Password:</label>
                    <input type="password" id="new_password" name="new_password" required><br><br>

                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

                    <button type="submit" onclick="toggleForm()">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleForm() {
            var signinForm = document.getElementById("signin-form");
            var signupForm = document.getElementById("signup-form");

            signinForm.style.display = (signinForm.style.display === "none") ? "block" : "none";
            signupForm.style.display = (signupForm.style.display === "none") ? "block" : "none";
        }
    </script>
</body>
</html>
