<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact – EarthBound Co.</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<!-- ===== HEADER ===== -->
<header>
    <h1>EarthBound Co.</h1>
    <h2>Sustaining Tomorrow Starts Today</h2>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="volunteer.html">Get Involved</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="hero"></div>

<!-- ===== MAIN CONTENT ===== -->
<main style="padding: 40px; text-align: center;">

    <h1 style="color: var(--pine); font-size: 36px; margin-bottom: 10px;">
        Contact Us
    </h1>

    <p style="font-size: 18px; max-width: 650px; margin: 0 auto 30px;">
        Have questions or want to get involved with EarthBound Co.?  
        Contact any member of our team below!
    </p>

    <!-- ===== TEAM CONTACTS ===== -->
    <section>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2em;">

            <div style="text-align:center; width: 220px;">
                <img src="images/Angela.jpg" alt="Angel Madison" class="team-photo">
                <p><strong>Angel Madison</strong></p>
                <p>
                    <a href="mailto:amadison199523@troy.edu?subject=EarthBound%20Co.%20Inquiry">
                        amadison199523@troy.edu
                    </a>
                </p>
            </div>

            <div style="text-align:center; width: 220px;">
                <img src="images/Malek.png" alt="Malek Stafford" class="team-photo">
                <p><strong>Malek Stafford</strong></p>
                <p>
                    <a href="mailto:mstafford196937@troy.edu?subject=EarthBound%20Co.%20Inquiry">
                        mstafford196937@troy.edu
                    </a>
                </p>
            </div>

            <div style="text-align:center; width: 220px;">
                <img src="images/Kearvin.jpeg" alt="Kearvin Blount" class="team-photo">
                <p><strong>Kearvin Blount</strong></p>
                <p>
                    <a href="mailto:kblount195653@troy.edu?subject=EarthBound%20Co.%20Inquiry">
                        kblount195653@troy.edu
                    </a>
                </p>
            </div>

            <div style="text-align:center; width: 220px;">
                <img src="images/Scotty.jpeg" alt="Scotty Lindsey Jr." class="team-photo">
                <p><strong>Scotty Lindsey Jr.</strong></p>
                <p>
                    <a href="mailto:slindsey234624@troy.edu?subject=EarthBound%20Co.%20Inquiry">
                        slindsey234624@troy.edu
                    </a>
                </p>
            </div>

        </div>
    </section>

    <!-- ===== CONTACT FORM ===== -->
    <section style="max-width: 600px; margin: 40px auto; text-align:left;">

        <h2 style="text-align:center; margin-bottom: 1em; color: var(--pine);">
    Send Us a Message
</h2>

        <form action="send_message.php" method="POST">

            <label><strong>Your Name:</strong></label><br>
            <input type="text" name="name" required><br><br>

            <label><strong>Your Email:</strong></label><br>
            <input type="email" name="email" required><br><br>

            <label><strong>Your Message:</strong></label><br>
            <textarea name="message" rows="5" required style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc;"></textarea><br><br>

            <button type="submit" class="donate-btn" style="width:100%;">Send Message</button>

        </form>
    </section>

</main>
<!-- ==================== FOOTER ==================== -->

<footer class="mt-5 p-4 text-center">
    <div class="row">
        <div class="col-md-4">© 2025 EarthBound Co.</div>
        <div class="col-md-4"><a href="contact.php">Contact Us</a></div>
        <div class="col-md-4">Troy University</div>
    </div>
</footer>

</body>
</html>
