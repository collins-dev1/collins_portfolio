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
                    <li><a href="{{ route('about') }}" class="nav-link active"><span>02. </span>About</a></li>
                    <li><a href="{{ route('project') }}" class="nav-link"><span>03. </span>Projects</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link"><span>04. </span>Blogs</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link"><span>05. </span>Contact</a></li>
                    <li><a href="{{ asset('collins_cv/my_resume.pdf') }}" target="_blank" class="nav-link"><span>06.
                            </span>Resume</a></li>
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
            <li><a href="{{ route('about') }}" class="nav-link active"><span>02. </span>About</a></li>
            <li><a href="{{ route('project') }}" class="nav-link"><span>03. </span>Projects</a></li>
            <li><a href="{{ route('blog') }}" class="nav-link"><span>04. </span>Blogs</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link"><span>05. </span>Contact</a></li>
            <li><a href="{{ asset('collins_cv/my_resume.pdf') }}" target="_blank" class="nav-link"><span>06.
                    </span>Resume</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="about-container">
            <div class="intro">
                <h1>About Me</h1>
                <p>My Introduction</p>
            </div>
            <div class="about-img">
                <div>
                    <div class="morphing-frame">
                        <img src="{{ asset('my_portfolio/img/mypicture.jpg') }}" alt="My Photo" />
                    </div>
                </div>
                <div class="about-para">
                    <p>Welcome! I'm Oguno Ikechukwu Collins, a passionate Software, Web, and Mobile App Developer with
                        strong
                        expertise in building dynamic, user-focused digital solutions across multiple platforms.</p>

                    <p>My journey began at <span><a href="https://kodexafrica.com" target="_blank">Kodex
                                Africa</a></span>, where I honed my skills in full-stack development — mastering
                        front-end technologies like HTML, CSS, Bootstrap, JavaScript, React, and expanding into back-end
                        development with Laravel, Python, and more. Over time, I also delved into mobile app development
                        using
                        frameworks like Flutter and React Native to create seamless cross-platform experiences.</p>

                    <p>Beyond development, I have a strong passion for teaching and mentoring others. I started as a Web
                        Development Tutor at <span><a href="https://digitaldreamsng.com" target="_blank">Digital Dreams
                                Limited</a></span>, where I successfully guided aspiring developers through the
                        fundamentals of
                        modern web technologies. Today, I continue this journey at <span><a
                                href="https://solotech-ai-ltd.com" target="_blank">Solotech.ai Limited</a></span>,
                        helping students
                        build
                        strong foundations and real-world problem-solving skills in software and mobile app development.
                    </p>

                    <p>With experience spanning UI/UX design using Figma, building responsive websites, developing
                        mobile
                        applications, and mentoring future developers, I am dedicated to creating impactful digital
                        products
                        and empowering the next generation of tech talent.</p>

                    <p>I am motivated by the challenge of turning ideas into innovative products, growing within the
                        evolving tech landscape, and making meaningful contributions to the global tech community.</p>
                </div>
            </div>

            <div class="tech-skills">
                <h6>Here are a few technologies I’ve been working with recently:</h6>
                <div class="skill-set">
                    <div>
                        <span>&#128073; HTML</span>
                    </div>
                    <div>
                        <span>&#128073; CSS</span>
                    </div>
                    <div>
                        <span>&#128073; SASS</span>
                    </div>
                    <div>
                        <span>&#128073; LESS</span>
                    </div>
                    <div>
                        <span>&#128073; Bootstrap</span>
                    </div>
                    <div>
                        <span>&#128073; TailwindCSS</span>
                    </div>
                    <div>
                        <span>&#128073; JavaScript</span>
                    </div>
                    <div>
                        <span>&#128073; ReactJs</span>
                    </div>
                    <div>
                        <span>&#128073; PHP</span>
                    </div>
                    <div>
                        <span>&#128073; Laravel</span>
                    </div>
                    <div>
                        <span>&#128073; Python</span>
                    </div>
                    <div>
                        <span>&#128073; Git</span>
                    </div>
                    <div>
                        <span>&#128073; Github</span>
                    </div>
                    <div>
                        <span>&#128073; Flutter</span>
                    </div>
                    <div>
                        <span>&#128073; Dart</span>
                    </div>
                    <div>
                        <span>&#128073; C++</span>
                    </div>
                    <div>
                        <span>&#128073; Web3</span>
                    </div>
                </div>
                <div class="tech-button">
                    <a href="https://claude.ai/public/artifacts/b48dd92a-c7ab-4a09-a0fc-f0254be36eda" target="_blank">
                        <button>My Slide <i class="fas fa-scroll"></i></button>
                    </a>
                    <a href="{{ asset('collins_cv/my_resume.pdf') }}" download="collins_resume.pdf">
                        <button>Download CV <i class="fas fa-scroll"></i></button>
                    </a>

                </div>
            </div>

            <!-- Qualifications -->
            <div class="qual">
                <h1>Qualifications</h1>
                <p>My Personal Journey</p>

                <div class="tab-container">
                    <div class="tabs">
                        <div class="finger" id="finger">👇</div>
                        <div class="tab-holder">
                            <span id="educationTab" class="tab active">
                                <i class="fas fa-graduation-cap"></i> Education
                            </span>
                            <span id="experienceTab" class="tab">
                                <i class="fas fa-briefcase"></i> Experience
                            </span>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="educationContent" class="content active">
                            <div class="education-holder">
                                <div>
                                    <div class="tab-circle"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2018</span>
                                        <h6>West African Senior School Certificate Examination(WASSCE)</h6>
                                        <h3>Christ the king College Onitsha, Anambra State Nigeria.</h3>
                                        <p>During my secondary school education, I developed a strong foundation in
                                            critical
                                            thinking, creativity, and adaptability. These formative years nurtured my
                                            intellectual curiosity and discipline, qualities that continue to guide my
                                            personal and professional growth.</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="tab-circle2"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2019 - 2020</span>
                                        <h6>Joint Universities Preliminary Examinations Board(JUPEB) PROGRAM</h6>
                                        <h3>Chukwuemeka Odumegwu Ojukwu University Igbariam, Anambra State Nigeria.</h3>
                                        <p>I completed the Joint Universities Preliminary Examinations Board (JUPEB)
                                            program with a focus on Economics, where I cultivated strong analytical
                                            skills, a disciplined work ethic, and a passion for structured learning.
                                            This academic experience not only strengthened my critical thinking but also
                                            prepared me to approach challenges with clarity and resilience across
                                            various fields.</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="tab-circle3"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 17th September 2022</span>
                                        <h6>Certificate of Participation</h6>
                                        <h3>BADA EDUCATION AUSTRALIA</h3>
                                        <p>I participated in the BADA Education Australia Conference, where I gained
                                            valuable insights into international education systems and the pathways for
                                            studying abroad. This experience broadened my global perspective, deepened
                                            my understanding of academic opportunities, and strengthened my commitment
                                            to continuous learning and personal development.</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="tab-circle4"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2021 - 2023</span>
                                        <h6>Trade Test Certificate of Competence</h6>
                                        <h3>Federal Ministry of Labour and Employment</h3>
                                        <p>Alongside studying software and web development through online courses and
                                            YouTube tutorials, I also attended physical training classes to strengthen
                                            my practical knowledge. To validate my skills, I obtained a Trade Test
                                            Certificate of Competence in Computer Craft from the Federal Ministry of
                                            Labour and Employment. This journey reflects my dedication to continuous
                                            learning, hands-on experience, and achieving formal recognition in the tech
                                            field.</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="tab-circle5"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2022 - 2023</span>
                                        <h6>Full Stack Web Development Certification</h6>
                                        <h3>Kodex Africa, Nigeria.</h3>
                                        <p>I accelerated my journey into the world of web development by completing a
                                            comprehensive Full Stack Web Development program at <a
                                                href="https://kodexafrica.com" target="_blank">Kodex Africa</a>. Over
                                            the course of about one year, I immersed myself in a dynamic
                                            learning environment where I gained hands-on experience in both frontend and
                                            backend technologies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="experienceContent" class="content">
                            <div class="education-holder">
                                <div>
                                    <div class="tab-circle"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2025 - Present</span>
                                        <h6>Software Development / UI/UX Tutor and Engineer</h6>
                                        <h3>SoloTech.AI Limited</h3>
                                        <p>As a Software Development and UI/UX Tutor and Engineer at <a
                                                href="https://solotech-ai-ltd.com/" target="_blank">Solotech.ai
                                                Limited</a>, I am actively contributing to the growth of a new and
                                            ambitious
                                            tech company. In addition to my technical roles, I serve as the Manager,
                                            helping to shape the company's vision, mentor aspiring developers, and drive
                                            innovative projects. My role combines leadership, technical expertise, and a
                                            passion for building a strong foundation for the company's future success.
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <div class="tab-circle6"></div>
                                    <div class="education-text" id="education-text">
                                        <span><i class="fas fa-calendar-alt"></i> 2023 - 2025</span>
                                        <h6>Web Development Tutor / Mentor</h6>
                                        <h3>Digital Dreams ICT Academy, Nigeria.</h3>
                                        <p>At <a href="https://digitaldreamsng.com" target="_blank">Digital Dreams
                                                Limited</a>, a reputable ICT Academy for software development, I have
                                            had
                                            the privilege of working as both a Tutor and Web Development Engineer. This
                                            role has
                                            allowed me to combine my passion for teaching with my expertise in Web
                                            development, creating a dynamic and fulfilling professional experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('project') }}">
                        <div class="downpointer">
                            <div class="arrow">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            <div class="mouse">
                                <span><i class="ri-mouse-line"></i> Projects</span>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
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
                        <li><a href="{{ asset('collins_cv/my_resume.pdf') }}" target="_blank">Resume</a></li>
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
