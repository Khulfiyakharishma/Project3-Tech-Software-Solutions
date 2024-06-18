<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tech Software Solutions</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
        
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#showcase">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <h1 class="logo">NEXUS INFO</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase" style="background-color: black;">
        <div class="showcase-container">
            <h1 class="main-title"><b>Innovative Software for Modern Solutions</h1>
            <p>Transforming businesses with cutting-edge technology.</p>
    
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We Provide Innovative Software Solutions</h2>
                <p>Welcome to Tech Software Solutions! Since 2010, we have been at the forefront of software innovation, delivering bespoke solutions that drive success for our clients. Our experienced team combines technical expertise with a deep understanding of industry trends to create software that not only meets your needs but exceeds your expectations.</p>
            </div>
            <div class="about-img">
                <img src="images/download.jpeg" alt="About Us">
            </div>
        </div>
        <h2 class="section-title">Meet Our Team</h2>
        <div class="member-container">
            <div class="member">
                <img src="images/team3.jpeg" alt="Member 1">
                <h3>John Doe</h3>
                <p>CEO</p>
                <i class="fa fa-github" style="font-size:36px; color:black"></i>
            </div>
            <div class="member">
                <img src="images/team2.webp" alt="Member 2">
                <h3>Jane Smith</h3>
                <p>CTO</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/company/nexus-software-pvt-ltd/posts/?feedView=all" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/janesmith" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="member">
                <img src="images/team.jpeg" alt="Member 3">
                <h3>Michael Brown</h3>
                <p>Lead Developer</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/michaelbrown" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/michaelbrown" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <h2 class="section-title">Our Services</h2>
        <div class="services-container container">
            <div class="service-item">
                <div class="service-image">
                    <img src="images/csd.jpeg" alt="Custom Software Development">
                </div>
                <div class="service-description">
                    <h3>Custom Software Development</h3>
                    <p>We create tailored software solutions to meet your business needs.</p>
                </div>
            </div>
            <div class="service-item">
                <div class="service-image">
                    <img src="images/mad.jpeg" alt="Mobile App Development">
                </div>
                <div class="service-description">
                    <h3>Mobile App Development</h3>
                    <p>Our team develops user-friendly mobile applications for various platforms.</p>
                </div>
            </div>
            <div class="service-item">
                <div class="service-image">
                    <img src="images/cs.jpeg" alt="Cloud Solutions">
                </div>
                <div class="service-description">
                    <h3>Cloud Solutions</h3>
                    <p>Scalable and flexible cloud solutions for your business.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <h2 class="testimonial-title">What Our Clients Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <p class="testimonial-text">"Tech Software Solutions transformed our business with their custom software. Highly recommend!"</p>
                <div class="customer-detail">
                    <p class="customer-name">— John Doe, CEO of ExampleCorp</p>
                </div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"The mobile app developed by Tech Software Solutions has significantly improved our customer engagement."</p>
                <div class="customer-detail">
                    <p class="customer-name">— Jane Smith, Marketing Director at MarketFlow</p>
                </div>
            </div>
            <div class="testimonial-box">
                <p class="testimonial-text">"Their cloud solutions have provided the scalability we needed for our growing business."</p>
                <div class="customer-detail">
                    <p class="customer-name">— Michael Brown, CTO of CloudNet</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-container container">
            <div class="contact-image">
                <img src="images/contact.jpeg" alt="Contact Us">
            </div>
            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="E-Mail">
                <textarea cols="30" rows="10" placeholder="Type Your Message Here"></textarea>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </section>

    <footer id="footer">
        <h2>Tech Software Solutions &copy; 2024. All rights reserved.</h2>
        <a href="https://www.linkedin.com/company/nexus-software-pvt-ltd/posts/?feedView=all" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="linkedin-icon">
    </a>
        <div class="footer">
  <a href="https://www.linkedin.com/company/nexus-software-pvt-ltd/posts/?feedView=all" class="fa fa-linkedin"></a>
  <a href="https://github.com" class="fa fa-github"></a>
  <a href="mailto:example@example.com" class="fa fa-envelope"></a>
</div>
    </footer>

    <!-- ############for smooth scrolling############### -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }
      });
    });
    </script>
</body>
</html>
