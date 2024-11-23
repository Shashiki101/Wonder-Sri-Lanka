<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide Registration</title>
    <link rel="stylesheet" href="./register.css">
</head>
<body>
    <div class="form-container">
        <h1>Tour Guide Registration</h1>
        <p class="form-description">Join our team and guide travelers to the best destinations!</p>

        <form action="submit_registration.php" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="experience">Years of Experience:</label>
                <input type="number" id="experience" name="experience" min="0" max="50" required>
            </div>

            <div class="form-group">
                <label for="languages">Languages Spoken:</label>
                <input type="text" id="languages" name="languages" placeholder="E.g., English, Sinhala, Tamil" required>
            </div>

            <div class="form-group">
                <label for="expertise">Areas of Expertise:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="expertise[]" value="nature"> Nature Tours</label><br>
                    <label><input type="checkbox" name="expertise[]" value="history"> Historical Tours</label><br>
                    <label><input type="checkbox" name="expertise[]" value="adventure"> Adventure Tours</label><br>
                    <label><input type="checkbox" name="expertise[]" value="cultural"> Cultural Tours</label><br>
                    <label><input type="checkbox" name="expertise[]" value="city"> City Tours</label>
                </div>
            </div>

            <div class="form-group">
                <label for="bio">Short Bio:</label>
                <textarea id="bio" name="bio" rows="4" placeholder="Tell us about yourself..." required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Upload Profile Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>

            <button type="submit" class="submit-button">Register</button>
        </form>

        <!-- Logout Button Below Register -->
        <a href="tour_guide.php" class="logout-button">Log Out</a>
    </div>
</body>
</html>
