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
  
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
 
        $user = $result->fetch_assoc();

        
        if (password_verify($password, $user['password'])) {
            
           
            if ($user['user_type'] == 'admin' && $email == 'admin@gmail.com' && $password == '123456') {
                $_SESSION['admin_name'] = $user['name'];
                header('Location: admin_dashboard.php');
                exit(); 
            } else {
                
                $_SESSION['user_name'] = $user['name'];
                header("Location: index.html");
                exit(); 
            }
        } else {
      
            echo "Incorrect password. Please try again.";
        }
    } else {

        echo "No user found with this email. Please sign up.";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourista - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="form-section">
            <img src="logo.png" alt="Tourista Logo" class="logo">
            <h2>Hi there!</h2>
            <p>Welcome to Wonder Sri Lanka</p>

            <div class="divider">
                <span>Or</span>
            </div>

            <!-- Login Form -->
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Your email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#" class="forgot-password">Forgot your password?</a>
                <button type="submit" class="login-button">Log in</button>
            </form>

            <p class="signup-link">Don’t have an account? <a href="register.php">Sign up</a></p>
        </div>

        <div class="image-section">
            <img src="./assets/register1.jpg" alt="Scenic Landscape" class="background-image">
        </div>
    </div>

    <link rel="stylesheet" href="./login.css">
</body>
</html>
