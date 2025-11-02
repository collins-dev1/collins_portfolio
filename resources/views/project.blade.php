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
    <link rel="stylesheet" href="{{ asset('my_portfolio/css/styles.css') }}">
    <link rel="icon" href="{{ asset('my_portfolio/img/og_logo.png') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <script>
        window.addEventListener('load', function() {
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
            <a href="{{ url('/') }}">
                <div class="logo">
                    <span class="pxr">OG-</span><span class="labs">COLLINS</span>
                    <div class="logo-pulse"></div>
                </div>
            </a>

            <nav class="desktop-nav">
                <ul>
                    <li><a href="{{ url('/') }}" class="nav-link"><span>01. </span>Home</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link"><span>02. </span>About</a></li>
                    <li><a href="{{ route('project') }}" class="nav-link active"><span>03. </span>Projects</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link"><span>04. </span>Blogs</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link"><span>05. </span>Contact</a></li>
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
            <li><a href="{{ url('/') }}" class="nav-link"><span>01. </span>Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link"><span>02. </span>About</a></li>
            <li><a href="{{ route('project') }}" class="nav-link active"><span>03. </span>Projects</a></li>
            <li><a href="{{ route('blog') }}" class="nav-link"><span>04. </span>Blogs</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link"><span>05. </span>Contact</a></li>
            <li><a href="" class="nav-link"><span>06. </span>Resume</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="project-hero">
        <div class="project-container">
            <div class="intro">
                <h1>Projects</h1>
                <p>Some Things I’ve Built</p>
            </div>

            <div class="project-cards">
                <div class="card-holder">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/domiland.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="https://domiclinic.net/" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Domi Clinic</h5>
                            <p class="card-text">
                                Designed and developed a responsive website for Domi Clinic, a modern healthcare center
                                dedicated to providing quality medical services and patient care. The website features
                                an intuitive UI/UX design, online appointment booking, service listings, and a
                                patient-centered layout for easy navigation. Built with HTML, CSS, JavaScript, and
                                Laravel, the site ensures fast loading, mobile optimization, and a professional digital
                                presence that enhances trust and accessibility for patients seeking medical care.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/solotech.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="https://solotech-ai-ltd.com/" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Solotech.AI Limited – Tech Academy</h5>
                            <p class="card-text">
                                Designed and developed a responsive website for Solotech.AI Limited, a technology
                                academy and IT solutions company specializing in AI, software development, and tech
                                education. The website features a modern UI/UX, course enrollment functionality, and
                                seamless navigation to showcase their training programs and corporate services. Built
                                with [mention tech stack, e.g., HTML, CSS, JavaScript, laravel and more], the site
                                ensures
                                fast loading, mobile optimization, and an engaging user experience to attract students
                                and clients.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/uprisecity.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="https://www.uprisecity.com/" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">UpriseCity Global Business Summit - Premium Conference Platform</h5>
                            <p class="card-text">Designed and developed the official digital hub for UpriseCity's
                                flagship international business conference, hosting 5,000+ executives and thought
                                leaders annually. The platform streamlined attendee engagement while elevating brand
                                prestige through cutting-edge digital experiences.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/xpert.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="https://xpertodds.com/" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">XpertOdds - Sports Prediction Platform</h5>
                            <p class="card-text">Developed a data-driven sports betting analytics platform that
                                delivers AI-generated predictions with proven accuracy across football, basketball, and
                                tennis markets. The system processes 10,000+ data points per match using machine
                                learning models to give subscribers a competitive edge.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/bsi.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bs'I Molokwu – Personal Portfolio Website</h5>
                            <p class="card-text">Designed and developed a sleek, modern portfolio website for Bs'I
                                Molokwu, showcasing their professional work, creative projects, and expertise. The site
                                blends minimalist aesthetics with dynamic interactions to highlight their brand while
                                ensuring seamless navigation across devices. Built with [mention tech stack, e.g.,
                                HTML/CSS, JavaScript, laravel and more], the portfolio
                                prioritizes performance, accessibility, and visual storytelling.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/ado-rental.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ado Rental – Event Equipment Rental Platform</h5>
                            <p class="card-text">Designed and developed a dynamic website for Ado Rental, an event
                                service company specializing in equipment rentals (e.g., sound systems, lighting, and
                                decor). The platform enables customers to browse inventory, check availability, and book
                                rentals seamlessly. Built with [HTML/CSS, bootstrap, JavaScript, laravel and more], the
                                site features an intuitive admin dashboard for managing bookings and
                                a responsive UI for optimal user experience.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/booksite.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ReadBook – Online Reading Platform</h5>
                            <p class="card-text">Designed and developed ReadBook, an immersive digital reading platform
                                that allows users to discover, read, and manage books online. The website features a
                                curated library with search functionality, personalized reading lists, and a
                                user-friendly interface optimized for seamless reading across devices. Built with [Tech
                                Stack: e.g., HTML/CSS, bootstrap, JavaScript, laravel and more], the platform ensures
                                fast loading, secure authentication, and an engaging reader experience.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/somcol_foods.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Somcol Foods – E-Commerce & Food Delivery Website</h5>
                            <p class="card-text">Designed and developed a high-performance e-commerce platform for
                                Somcol Foods, a food processing and distribution company. The website enables customers
                                to browse products, place orders, and schedule deliveries with an intuitive user
                                interface. Built with [Tech Stack: e.g., HTML/CSS, bootstrap, JavaScript, laravel and
                                more], the platform includes secure payment
                                gateways (e.g., Stripe, Flutterwave) and real-time order tracking.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/sprezza.ai.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sprezza.AI – Tech Academy & Robotics Platform</h5>
                            <p class="card-text">Designed and developed a cutting-edge educational platform for
                                Sprezza.AI, a tech academy specializing in AI, robotics, and STEM training. The website
                                showcases their courses, robotics kits, and hands-on learning approach with an
                                immersive, interactive interface. Built with [Tech Stack: e.g., HTML/CSS, bootstrap,
                                JavaScript, laravel and
                                more], the platform features student dashboards, course
                                enrollment, and a robotics e-commerce section.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('my_portfolio/img/stmary.png') }}" alt="">
                        </div>
                        <div class="icon">
                            <a href="#" target="_blank"><i class="fas fa-rocket"></i></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">St. Mary the Virgin Anglican Church - Modern Parish Website</h5>
                            <p class="card-text">Designed and developed a welcoming digital home for St. Mary the
                                Virgin Church, combining spiritual reverence with modern functionality. This responsive
                                website serves as both an informational hub for parishioners and a community-building
                                tool, featuring elegant design elements that reflect the church's heritage while
                                offering contemporary conveniences.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <a href="" target="_blank">
                <div class="projectpointer">
                    <div class="arrow">
                        <i class="fas fa-arrow-down"></i>
                    </div>
                    <div class="mouse">
                        <span><i class="ri-mouse-line"></i> More on <p><i class="fab fa-github"></i></p></span>
                    </div>
                </div>
            </a>
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="{{ url('/') }}">
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
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('project') }}">Project</a></li>
                        <li><a href="{{ route('blog') }}">Blogs</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="">Resume</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>Contact Me</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:collinsxuccessful39@gmail.com"
                                target="_blank">OG-COLLINS</a> </li>
                        <li><i class="fa-solid fa-phone"></i>
                            <a href="tel:+2347067668473" target="_blank">+234 706 766 8473</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i> Decentralized, Everywhere</li>
                    </ul>
                </div>

                <!-- WhatsApp Floating Icon -->
            <a href="https://wa.me/2347067668473" class="whatsapp-float" target="_blank"
                title="Chat with me on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>

            <style>
                .whatsapp-float {
                    position: fixed;
                    bottom: 100px;
                    right: 20px;
                    background-color: #25d366;
                    color: white;
                    border-radius: 50%;
                    font-size: 28px;
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                    z-index: 1000;
                    transition: all 0.3s ease;
                }

                .whatsapp-float:hover {
                    background-color: #20b957;
                    transform: scale(1.1);
                }
            </style>
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
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>

    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <script src="{{ asset('my_portfolio/js/script.js') }}"></script>
</body>

</html>
