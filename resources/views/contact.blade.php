<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OG-COLLINS | Software Developer & Web Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OG-COLLINS | Software Developer & Web Developer</title>
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="OG-COLLINS is a dynamic platform focused on empowering individuals through blockchain education, Software / Web development, and digital security innovation">
    <meta name="keywords"
        content="software development, web development, blockchain education, Web3, digital security, smart contracts, crypto learning, OG-COLLINS">
    <meta name="author" content="OG-COLLINS">
    <meta name="description"
        content="Og Collins (collins-dev1) - Open-source software / web developer, blockchain security & education at OG-COLLINS">
    <meta name="google-site-verification" content="KG_ojaBHmGF5__JCk_5lumdEGjnFN5gpEbMvYiXfci4" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('my_portfolio/css/styles.css')}}">
    <link rel="icon" href="{{asset('my_portfolio/img/og_logo.png')}}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <script>
        window.addEventListener('load', function () {
            setTimeout(() => {
                document.querySelector('.preloader').style.display = 'none';
            }, 1500); // 5000ms = 5 seconds
        });
    </script>


    <!-- preloading -->
    <div class="preloader">
        <div style="margin-top: 20px; color: #fff;">Opening Portfolio...</div>
        <div class="book">
            <div class="page page1"></div>
            <div class="page page2"></div>
            <div class="page page3"></div>
            <div class="page page4"></div>
        </div>

    </div>

    <!-- Background Elements -->
    <div class="particles" id="particles-js"></div>
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Header -->
    <header class="glass-header">
        <div class="container header-container">
            <a href="{{url('/')}}">
                <div class="logo">
                    <span class="pxr">OG-</span><span class="labs">COLLINS</span>
                    <div class="logo-pulse"></div>
                </div>
            </a>

            <nav class="desktop-nav">
                <ul>
                    <li><a href="{{url('/')}}" class="nav-link"><span>01. </span>Home</a></li>
                    <li><a href="{{route('about')}}" class="nav-link"><span>02. </span>About</a></li>
                    <li><a href="{{route('project')}}" class="nav-link"><span>03. </span>Projects</a></li>
                    <li><a href="{{route('blog')}}" class="nav-link"><span>04. </span>Blogs</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link active"><span>05. </span>Contact</a></li>
                    <li><a href="" class="nav-link"><span>06. </span>Resume</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <div class="theme-toggle">
                    <i class="fas fa-moon"></i>
                </div>
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="mobile-menu-close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a href="{{url('/')}}" class="nav-link"><span>01. </span>Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link"><span>02. </span>About</a></li>
            <li><a href="{{route('project')}}" class="nav-link"><span>03. </span>Projects</a></li>
            <li><a href="{{route('blog')}}" class="nav-link"><span>04. </span>Blogs</a></li>
            <li><a href="{{route('contact')}}" class="nav-link active"><span>05. </span>Contact</a></li>
            <li><a href="" class="nav-link"><span>06. </span>Resume</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="contact-container">
            <div class="intro">
                <h1>Get In Touch</h1>
                <p>Contact Me</p>
            </div>
            <div class="contact_cards">
                <div class="card">
                    <div class="card-body">
                        <span><i class="fas fa-map-marker-alt"></i> </span>
                        <h4>Address</h4>
                        <p>Anambra State, Nigeria.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <span><i class="fas fa-envelope"></i></span>
                        <h4>Email</h4>
                        <a href="mailto:collinsxuccessful39@gmail.com" target="_blank">
                            <p>Write Me <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <span><i class="fab fa-whatsapp"></i></span>
                        <h4>WhatsApp</h4>
                        <a href="https://wa.me/2347067668473" target="_blank">
                            <p>Inbox Me <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h4>Phone</h4>
                        <a href="tel:+2347067668473" target="_blank">
                            <p>Call Me <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="intro">
                <h1>Message Me</h1>
            </div>
            <div class="contact-form">
                <form action="https://formsubmit.co/collinsxuccessful39@gmail.com" method="POST">
                    <div class="form-info">
                        <div class="form">
                            <label for="">Name</label>
                            <input type="text" name="full_name" placeholder="Enter your name">
                        </div>
                        <div class="form" id="up">
                            <label for="">Email</label>
                            <input type="email" name="email_address" placeholder="Enter your email ">
                        </div>
                    </div>
                    <div class="form-info">
                        <div class="form">
                            <label for="">Phone Number</label>
                            <input type="tel" name="phone_number" placeholder="Enter your phone number">
                        </div>
                        <div class="form" id="up">
                            <label for="">Subject</label>
                            <input type="text" name="subject" placeholder="Enter your subject">
                        </div>
                    </div>
                    <div class="form">
                        <label for="">Message</label>
                        <textarea name="message" placeholder="Write your message...." id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="contact-button">
                        <button type="submit" class="cta-button">SUBMIT <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="{{url('/')}}">
                        <div class="logo">
                        <span class="pxr">OG-</span><span class="labs">COLLINS</span>
                    </div>
                    </a>
                    <p>Build fast. Build smart. Build clean. I code. You scroll</p>
                    <div class="social-links">
                        <a href="https://x.com/XuccessfulColl1" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/collins-dev1" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://wa.me/2347067668473" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://web.facebook.com/ogtechhub" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/og__collins" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/og-collins" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.tiktok.com/@ogtechhub" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('project')}}">Project</a></li>
                        <li><a href="{{route('blog')}}">Blogs</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="">Resume</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>Contact Me</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> <a
                                href="mailto:collinsxuccessful39@gmail.com" target="_blank">OG-COLLINS</a> </li>
                        <li><i class="fa-solid fa-phone"></i>
                            <a href="tel:+2347067668473" target="_blank">+234 706 766 8473</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i> Decentralized, Everywhere</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2022 OG-COLLINS. All rights reserved.</p>
                <!-- Blockchain Verification Badge -->
                <div class="verification-badge">
                    <span>This portfolio is powered & designed by <a href="https://github.com/collins-dev1"
                            class="cp-log" target="_blank">collins-dev1</a></span>
                    <i class="fas fa-shield-alt"></i>
                </div>
            </div>
        </div>
        <div class="scroll-up" onclick="scrollToTop()">
            <i class="fas fa-arrow-up"></i>
        </div>
        <script>
            function scrollToTop() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        </script>

    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <script src="{{asset('my_portfolio/js/script.js')}}"></script>
</body>

</html>
