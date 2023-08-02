<?php
echo "<pre>";
    print_r($_POST);
echo "<pre>";


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baipushi CES | Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/slideshow.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>

    <header>
        <div id="branding">
            <h1><span class="highlight">Baipushi</span>CES</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="team.html">Team</a></li>
                <li class="current "><a href="contact us.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </header>
    <!-- Contact -->
    <section id="contact" class="section bg-light">

        <div class="container">
            <div class="title">
                <h2>Contact Us</h2>
                <hr style="color:#14e414;">
            </div>
            <div class="contact-section">

                <p class="lead">Please leave your name and email address below with some detail of the service you
                    require and we will respond to your request as soon as possible.</p>

                <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" class="contact-form-text" placeholder="Your name">
                    <input type="email" class="contact-form-text" placeholder="Your email">
                    <input type="tel" class="contact-form-text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Your phone">
                    <textarea class="contact-form-text" placeholder="Your message" style="height:200px"></textarea>
                    <input type="submit" class="contact-form-btn" value="Send">
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <h1><span class="highlight">Baipushi</span>CES</h1>
            <h1>Contact Details</h1>

            <div class="contact">
                <span><i class="fas fa-phone"></i> &nbsp; +27 71 520 3922</span>
                <span><i class="fas fa-envelope"></i> &nbsp; info@baipushices.co.za</span>
                <span><i class="fas fa-map-marker"></i> &nbsp; 2332 Duvha Park, Witbank 0763</span>
            </div>

            <div class="socialss">
                <a href="#" class="fab fa-facebook fa-2x"></a>
                <a href="#" class="fab fa-twitter fa-2x"></a>
                <a href="#" class="fab fa-whatsapp fa-2x"></a>
                <a href="#" class="fab fa-linkedin fa-2x"></a>
            </div>
        </div>
        <div class="footer-bottom text-center">
            Copyright &copy; 2020 | Baipushi Civil, Electrical &amp; Security.
        </div>
    </footer>

    <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>

    <!-- toggle menu script -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $('nav').toggleClass('active')
            })
        })
    </script>

</body>

</html>