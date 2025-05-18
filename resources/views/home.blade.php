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
    <link rel="icon" href="{{asset('my_portfolio/img/og_logo.png')}}"
        type="image/x-icon" />
        <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '53f7fc90a586c29128810d597ccd5130eddd5bac';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
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
                    <li><a href="{{url('/')}}" class="nav-link active"><span>01. </span>Home</a></li>
                    <li><a href="{{route('about')}}" class="nav-link"><span>02. </span>About</a></li>
                    <li><a href="{{route('project')}}" class="nav-link"><span>03. </span>Projects</a></li>
                    <li><a href="{{route('blog')}}" class="nav-link"><span>04. </span>Blogs</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link"><span>05. </span>Contact</a></li>
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
            <li><a href="{{url('/')}}" class="nav-link active"><span>01. </span>Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link"><span>02. </span>About</a></li>
            <li><a href="{{route('project')}}" class="nav-link"><span>03. </span>Projects</a></li>
            <li><a href="{{route('blog')}}" class="nav-link"><span>04. </span>Blogs</a></li>
            <li><a href="{{route('contact')}}" class="nav-link"><span>05. </span>Contact</a></li>
            <li><a href="" class="nav-link"><span>06. </span>Resume</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="title-word title-word-1">Digital</span>
                <span class="title-word title-word-2" id="text2">craftsmanship</span>
                <span class="title-word title-word-3" id="text3">in every line of</span>
                <span class="title-word title-word-4">code.</span>
            </h1>
            <p class="hero-subtitle">I transform ideas into impactful digital experiences, delivering innovative
                solutions that elevate brands and captivate audiences around the world.</p>

            <div class="hero-buttons">
                <a href="https://wa.me/2347067668473" target="_blank" class="cta-button secondary-button">
                    <span>Let's Talk! </span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <a href="#footer">
                <div class="scroll-down">
                    <span>Scroll Down</span>
                    <div class="scroll-arrow"></div>
                </div>
            </a>
        </div>

        <div class="hero-blocks">
            <div class="blockchain-visualization" id="blockchain-visualization">
                <!-- Blocks added via JS -->
            </div>
        </div>
    </section>

    <!-- Little About myself -->
    <section class="aboutmyself" id="home">
        <div class="container">
            <div class="aboutsocial-links">
                <a href="https://x.com/XuccessfulColl1" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/collins-dev1" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://wa.me/2347067668473" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://web.facebook.com/ogtechhub" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/og__collins" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/og-collins" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.tiktok.com/@ogtechhub" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
            <div class="circleline-holder">
                <div class="circle"></div>
                <div class="circle-line"></div>
            </div>
            <div class="abouttext">
                <h2>Hi, I'm <span>Collins</span></h2>
                <p>A skilled Software developer and an Opensource contributor.
                    I build software applications and website interfaces.
                    I'm passionate about creating secure, scalable, and user-friendly software and website applications.
                </p>

                <div class="about-button">
                    <a href="{{route('about')}}">
                        <button>About me <i class="fas fa-arrow-right"></i></button>
                    </a>
                    <img src="{{asset('my_portfolio/img/codepi1.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Blockchain Demo -->
    <section class="blockchain-demo" id="home">
        <div class="container">
            <h2 class="section-title">Blockchain Interactive Demo</h2>
            <p class="section-subtitle">See how decentralized technology works in real-time</p>

            <div class="demo-container">
                <div class="demo-controls">
                    <button id="add-block-btn" class="demo-button">
                        <i class="fas fa-plus-circle"></i> Add Block
                    </button>
                    <button id="tamper-btn" class="demo-button">
                        <i class="fas fa-exclamation-triangle"></i> Try to Tamper
                    </button>
                    <button id="reset-demo-btn" class="demo-button">
                        <i class="fas fa-redo"></i> Reset
                    </button>
                </div>

                <div class="demo-visualization">
                    <div class="centralized-vs-decentralized">
                        <div class="architecture centralized">
                            <h3>Centralized</h3>
                            <div class="server">
                                <i class="fas fa-server"></i>
                                <div class="single-point"></div>
                            </div>
                        </div>
                        <div class="architecture decentralized">
                            <h3>Decentralized</h3>
                            <div class="nodes-container">
                                <!-- Nodes added via JS -->
                            </div>
                        </div>
                    </div>

                    <div class="blockchain-container">
                        <!-- Blocks added via JS -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="home">
        <div class="container">
            <h2 class="section-title">My Services</h2>
            <p class="section-subtitle">Whether it’s a landing page, full website, or mentorship — I’ve got you covered.
            </p>

            <div class="services-grid">
                <div class="service-card" data-tilt>
                    <div class="card-icon">

                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Full Stack Web Development</h3>
                    <p>Building responsive and dynamic websites using modern frontend and backend technologies.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="service-card" data-tilt>
                    <div class="card-icon">

                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3>Frontend Development</h3>
                    <p>Creating sleek, interactive interfaces with HTML, CSS, Bootstrap, and JavaScript(React.JS) for
                        great user experiences.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="service-card" data-tilt>
                    <div class="card-icon">

                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Backend Development</h3>
                    <p>Developing secure and scalable server-side logic using Laravel and a touch of Python.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>

                <div class="service-card" data-tilt>
                    <div class="card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Designing intuitive and user-centered interfaces using tools like Figma.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>
                <div class="service-card" data-tilt>
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Website Maintenance</h3>
                    <p>Regular updates, performance optimization, and bug fixes to keep your site running smoothly.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>
                <div class="service-card" data-tilt>
                    <div class="card-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3>Landing Page Design</h3>
                    <p>Creating high-converting and visually engaging landing pages for products, events, or campaigns.
                    </p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>
                <div class="service-card" data-tilt>
                    <div class="card-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Portfolio & Personal Website Creation</h3>
                    <p>Helping creatives, professionals, and developers build sleek online portfolios.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>
                <div class="service-card" data-tilt>
                    <div class="card-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Tutoring & Mentorship</h3>
                    <p>Offering training and personalized guidance in web development and design for beginners and
                        intermediate learners.</p>
                    <a href="#" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="card-hover-effect"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Check Tool -->
    <section class="security-check" id="home">
        <div class="container">
            <h2 class="section-title">Digital Security Check</h2>
            <p class="section-subtitle">Test your current security practices and get personalized recommendations</p>

            <div class="check-tool">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                </div>

                <div class="question-container">
                    <!-- Questions loaded via JS -->
                </div>

                <div class="tool-buttons">
                    <button id="prev-question" class="tool-button" disabled>
                        <i class="fas fa-arrow-left"></i> Previous
                    </button>
                    <button id="next-question" class="tool-button">
                        Next <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <div class="blockchain-carousel" id="home">
        <div class="carousel-container">
            <div class="carousel-slides">
                <div class="slide active" data-index="0">
                    <h3>API Integration</h3>
                    <p>Connecting websites with third-party tools and services for extra functionality..</p>
                    <button class="learn-more" data-topic="security-fundamentals">Learn More</button>
                </div>
                <div class="slide" data-index="1">
                    <h3>SEO Optimization</h3>
                    <p>Improving site visibility on search engines through performance and content tweaks.</p>
                    <button class="learn-more" data-topic="smart-contracts">Learn More</button>
                </div>
                <div class="slide" data-index="2">
                    <h3>Content Generation Tools</h3>
                    <p>Integrating AI to help generate blog posts, product descriptions, and content ideas on demand.
                    </p>
                    <button class="learn-more" data-topic="consensus">Learn More</button>
                </div>
                <div class="slide" data-index="2">
                    <h3>Personalized User Experience</h3>
                    <p>Tailoring website content and recommendations using AI insights and behavior tracking.</p>
                    <button class="learn-more" data-topic="consensus">Learn More</button>
                </div>
                <div class="slide" data-index="2">
                    <h3>AI Integration</h3>
                    <p>Embedding AI-powered features into websites using APIs like ChatGPT, Google AI, or custom models.
                    </p>
                    <button class="learn-more" data-topic="consensus">Learn More</button>
                </div>
            </div>
            <button class="carousel-btn prev" aria-label="Previous slide">&#10094;</button>
            <button class="carousel-btn next" aria-label="Next slide">&#10095;</button>
            <div class="indicators"></div>
        </div>
    </div>


    <!-- Newsletter Section -->
    <section class="newsletter-section" id="home">
        <div class="container">
            <div class="newsletter-wrapper">
                <div class="newsletter-card">
                    <div class="newsletter-content">
                        <h2>Stay Updated with OG-COLLINS</h2>
                        <p>Get the latest insights on software development, maintainance, mentoring and tutoring
                            delivered to your inbox</p>

                        <form class="newsletter-form">
                            <div class="form-group">
                                <input type="email" placeholder="Enter your email" required>
                                <button type="submit" class="submit-button">
                                    Subscribe Now
                                </button>
                            </div>
                            <p class="form-note">We respect your privacy. Unsubscribe at any time.</p>
                            <div class="form-message"></div>
                        </form>
                    </div>
                    <div class="newsletter-graphic">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                </div>
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
