<?php

$db_host = 'localhost';     
$db_user = 'root';          
$db_pass = '';               
$db_name = 'wsrilanka';    

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql_check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql_check_email);
    
    if ($result->num_rows > 0) {
   
        echo "This email is already registered. Please log in.";
    } else {
       
        $sql_insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

        if ($conn->query($sql_insert) === TRUE) {
          
            header("Location: login.php");
            exit(); 
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonder Sri Lanka - Create an Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="login-container">
        <div class="form-section">
            <img src="logo.png" alt="Tourista Logo" class="logo">
            <h2>Create an Account</h2>
            <p>Enter details to sign up for Wonder Sri Lanka</p>

            <!-- Registration Form -->
            <form action="register.php" method="POST" class="registration-form">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="email" name="email" placeholder="Your email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="signup-button">Sign up</button>
            </form>

            <p class="login-link">Already have an account? <a href="login.php">Log in</a></p>
        </div>

        <div class="image-section">
            <img src="./assets/login1.jpg" alt="Scenic Train Journey" class="background-image">
        </div>
    </section>

    <link rel="stylesheet" href="./login.css">
</body>
</html>
