<?php include 'header.php'; ?>

<link rel="stylesheet" href="../css/contactus.css">

<section class="contact-hero">
    <div class="hero-overlay">
        <h1>CONTACT US</h1>
    </div>
</section>

<section class="contact-section">
    <div class="contact-container">

        <!-- LEFT FORM -->
        <div class="contact-form">
            <p class="subtitle">Start Your Interior Project With Us</p>
            <h2>Let’s Turn Your Vision into Reality</h2>

            <form action="sendmail.php" method="POST">
                <div class="form-row">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>

                <div class="form-row">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" name="mobile" placeholder="Mobile Number" required>
                </div>

                <div class="form-row">
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="state" placeholder="State">
                </div>

                <textarea name="message" placeholder="Your Requirement"></textarea>
                
                <button type="submit">Submit Now →</button>
            </form>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="contact-image">
            <img src="../images/contact3.png" alt="Interior Design">
        </div>

    </div>
</section>
<div class="map-section">

  <div class="map-header">
    <img src="../images/logo.jpeg" alt="logo">
    <h3>Kriaa Interiors</h3>
    <p>Visit our studio in Bangalore</p>
  </div>

  <iframe 
    src="https://www.google.com/maps?q=Kriaa%20Interiors&output=embed"
    loading="lazy">
  </iframe>

</div>
<?php include 'footer.php'; ?>