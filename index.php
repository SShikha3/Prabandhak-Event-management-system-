<?php
    include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prabandhak - Home</title>
    <link rel="stylesheet" href="assets/css/style.css"> <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="assets/css/EMS.png" alt="Prabandhak Logo">
            </div>
            <ul>
                <li><a href="index.php">Home  </a></li>
                <li><a href="#">About Us  </a></li>
                <li><a href="login.html" class="login-btn">Log In</a>  /  <a href="login.html" class="register-btn">Register</a></li>
            </ul>
        </nav>
    </header>

    <section class="event">
        <div class="event-content">
            <h2>WELCOME TO </h2>
            <h1>PRABANDHAK</h1>
            <h3>Plan, Execute & Analyze Seamlessly!</h3>
            <div class="hero-buttons">
                <a href="login.html" class="btn primary">Get Started</a>
                <a href="#" class="btn secondary">Learn More</a>
            </div>
        </div>
    </section>
    
    <section class="features">
        <h2>About Us</h2>
        <p>
            Prabandhak is an advanced event management system designed to streamline event planning, 
            task assignments, and real-time analytics. Our platform ensures efficient coordination, 
            financial tracking, and seamless execution of events, empowering managers and teams to deliver 
            successful experiences effortlessly.
        </p>
        <h3 class="feature-text">KEY FEATURES</h3>
        <div class="feature-content">
            <h4 class="feature-text">Event Management | Task Assignments | <br> Real-Time Analytics | Financial Tracking</h4>
            <img src="assets/css/image.png" alt="Features Image">
        </div>
    </section>
    

    <section class="events">
        <h2>Upcoming & Ongoing Events</h2>
        <div class="event-container">
            <div class="event-box">
                <img src="assets/css/event1.JPG" alt="Corporate Meetup">
                <h3>Corporate Meetup</h3>
                <p><strong>Date:</strong> TBD</p>
                <p><strong>Venue:</strong> Grand Hall</p>
                <p><strong>Status:</strong> Upcoming</p>
            </div>
            <div class="event-box">
                <img src="assets/css/event2.jpg" alt="Tech Conference">
                <h3>Tech Conference</h3>
                <p><strong>Date:</strong> TBD</p>
                <p><strong>Venue:</strong> Tech Park</p>
                <p><strong>Status:</strong> Upcoming</p>
            </div>

            <div class="event-box">
                <img src="assets/css/event3.jpg" alt="Web Summit">
                <h3>Web Summit</h3>
                <p><strong>Date:</strong> TBD</p>
                <p><strong>Venue:</strong> Tech Park</p>
                <p><strong>Status:</strong> Upcoming</p>
            </div>

            <div class="event-box">
                <img src="assets/css/event4.jpg" alt="Cultural Event">
                <h3>Cultural Event</h3>
                <p><strong>Date:</strong> TBD</p>
                <p><strong>Venue:</strong> Orient Park</p>
                <p><strong>Status:</strong> Upcoming</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-box">
                <h3>Reservations Office</h3>
                <p>Dhanbad</p>
                <p>&#9742; 123-456-789</p>
                <p>📧support@prabandhak.com</p>
            </div>
            <div class="footer-box">
                <h3>Office Hours</h3>
                <p>Monday to Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 9:00 AM - 12:00 PM</p>
            </div>
            <div class="footer-box">
                <h3>Get Social</h3>
                <p>Follow us on:</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram"></a>
                    <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

