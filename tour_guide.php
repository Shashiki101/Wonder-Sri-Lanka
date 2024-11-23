<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="./page.css">
</head>
<body>

    <!-- Header Section Start -->
    <header>
        <nav class="navbar">
            <div class="logo-container">
                <img src="./assets/logoimg.jpeg" alt="Website Logo" class="logo-image">
                <div class="logo-text">Wonder Sri Lanka</div>
            </div>
            <ul class="nav-links">
                <li><a href="#">Destinations</a></li>
                <li><a href="#">Tour Guide</a></li>
                <li><a href="#">Transportation</a></li>
                <li><a href="#">Travel Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#" class="sign-up">Sign Up</a>
                <a href="#" class="login">Login</a>
            </div>
        </nav>
    </header>
    <!-- Header Section End -->

    <!-- Register Short Bar Section Start -->
    <section class="register-short-bar">
        <p class="slogan">Be the Compass for Travelers</p>
        <a href="tg_register_form.php" class="tour-guide-register">Tour Guide Register</a>
    </section>
    <!-- Register Short Bar Section End -->

    <!-- Tour Guide Listing Section Start -->
    <section class="tour-guide">
        <div class="section-wrapper">
            <h2>Meet Our Tour Guides</h2>
            <p class="subtitle">Explore Sri Lanka with our experienced guides!</p>
            <div class="testimonial-container">
                
                <!-- Tour Guide 1 -->
                <div class="testimonial-card">
                    <div class="card-image">
                        <img src="./assets/tg1.jpg" alt="Indunil Wijekoon">
                    </div>
                    <h3>Indunil Wijekoon</h3>
                    <p class="designation">Tour Guide</p>
                    <p class="review">Hi, I’m Indunil Wijekoon, an experienced tour guide passionate about Sri Lanka’s culture and beauty. From serene beaches to ancient landmarks, I’ll make your adventure unforgettable. Let’s explore together!</p>
                    <div class="availability available">Available</div>
                    <div class="rating">★★★★★</div>
                    <button class="booking-button">Book Now</button>
                </div>

                <!-- Tour Guide 2 -->
                <div class="testimonial-card">
                    <div class="card-image">
                        <img src="./assets/tg2.jpg" alt="Madushan Neranjan">
                    </div>
                    <h3>Madushan Neranjan</h3>
                    <p class="designation">Tour Guide</p>
                    <p class="review">Hi, I’m Madushan Neranjan, an experienced tour guide passionate about showcasing Sri Lanka’s wonders. From stunning landscapes to cultural treasures, I’ll make your adventure unforgettable. Let’s explore together!</p>
                    <div class="availability available">Available</div>
                    <div class="rating">★★★★★</div>
                    <button class="booking-button">Book Now</button>
                </div>

                <!-- Tour Guide 3 -->
                <div class="testimonial-card">
                    <div class="card-image">
                        <img src="./assets/tg3.jpg" alt="Stephi Wimalasinghe">
                    </div>
                    <h3>Stephi Wimalasinghe</h3>
                    <p class="designation">Tour Guide</p>
                    <p class="review">Hi, I’m Stephi Wimalasinghe, a tour guide with years of experience showcasing Sri Lanka’s charm. From stunning landscapes to cultural treasures, I’ll craft an unforgettable adventure for you. Let’s explore!</p>
                    <div class="availability available">Available</div>
                    <div class="rating">★★★★★</div>
                    <button class="booking-button">Book Now</button>
                </div>

            </div>
        </div>
    </section>
    <!-- Tour Guide Listing Section End -->

    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3 class="footer-heading">Wonder Sri Lanka</h3>
                <p>Sign up for exclusive <br> offers and updates.</p>
                <input type="email" placeholder="Enter your email">
                <button class="subscribe-btn">Subscribe</button>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">About Us</h3>
                <p>Why Choose Us</p>
                <p>Travel Blog</p>
                <p>Destinations</p>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Tours</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 class="footer-heading">Contact Us</h3>
                <p>Email: info@travelwebsite.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Travel Lane, Wanderlust City</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Wonder Sri Lanka. All rights reserved.</p>
        </div>
    </footer>
    <!-- Footer Section End -->

</body>
</html>
