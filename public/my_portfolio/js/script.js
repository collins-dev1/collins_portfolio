// ===== THEME TOGGLE =====
function initThemeToggle() {
    const themeToggle = document.querySelector('.theme-toggle');
    const icon = themeToggle.querySelector('i');
    let currentTheme = localStorage.getItem('theme') || 'dark';
    
    document.documentElement.setAttribute('data-theme', currentTheme);
    icon.className = currentTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
    
    themeToggle.addEventListener('click', () => {
        currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        
        icon.style.transform = 'scale(0.8)';
        setTimeout(() => {
            icon.className = newTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
            icon.style.transform = 'scale(1.1)';
            setTimeout(() => {
                icon.style.transform = 'scale(1)';
            }, 150);
        }, 150);
    });
}

// ===== MOBILE MENU =====
function initMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    
    const toggleMenu = () => {
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };
    
    mobileMenuBtn.addEventListener('click', toggleMenu);
    mobileMenuClose.addEventListener('click', toggleMenu);
    
    document.querySelectorAll('.mobile-menu .nav-link').forEach(link => {
        link.addEventListener('click', toggleMenu);
    });
}

// ===== SMOOTH SCROLLING =====
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.glass-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            }
        });
    });
}

// ===== HEADER SCROLL EFFECT =====
function initHeaderScroll() {
    const header = document.querySelector('.glass-header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        const sections = document.querySelectorAll('section');
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            const headerHeight = header.offsetHeight;
            
            if (window.scrollY >= sectionTop - headerHeight - 50 && 
                window.scrollY < sectionTop + sectionHeight - headerHeight - 50) {
                currentSection = section.getAttribute('id');
            }
        });
        
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
    });
}

// ===== PARTICLES.JS =====
function initParticles() {
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#4CC9F0" },
                shape: { type: "circle" },
                opacity: { value: 0.3, random: true },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#3A0CA3",
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "window",
                events: {
                    onhover: { enable: true, mode: "grab" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                },
                modes: {
                    grab: { distance: 140, line_linked: { opacity: 0.5 } },
                    push: { particles_nb: 4 }
                }
            },
            retina_detect: true
        });
    }
}

// ===== HERO BLOCKCHAIN VISUALIZATION =====
function initBlockchainVisualization() {
    const blockchainVisualization = document.getElementById('blockchain-visualization');
    const languages = ['HTML', 'CSS', 'Bootstrap', 'JavaScript', 'Laravel', 'Python', 'React', 'Figma']; // 8 languages
    const blockCount = languages.length;

    for (let i = 0; i < blockCount; i++) {
        const block = document.createElement('div');
        block.className = 'block';
        block.style.left = `${50 + i * 60}px`;
        block.style.top = `${100 + Math.sin(i * 0.5) * 50}px`;

        const index = document.createElement('div');
        index.className = 'block-index';
        index.textContent = `${i}`;

        const hash = document.createElement('div');
        hash.className = 'block-hash';
        hash.textContent = languages[i]; // Show different language per block

        block.appendChild(index);
        block.appendChild(hash);
        blockchainVisualization.appendChild(block);
    }
}


// ===== SERVICE CARDS =====
function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            card.style.setProperty('--x', `${x}px`);
            card.style.setProperty('--y', `${y}px`);
        });
    });
    
    if (typeof VanillaTilt !== 'undefined') {
        VanillaTilt.init(document.querySelectorAll(".service-card"), {
            max: 15,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });
    }
}

// ===== BLOCKCHAIN DEMO =====
function initBlockchainDemo() {
    const addBlockBtn = document.getElementById('add-block-btn');
    const tamperBtn = document.getElementById('tamper-btn');
    const resetDemoBtn = document.getElementById('reset-demo-btn');
    const blockchainContainer = document.querySelector('.blockchain-container');
    const nodesContainer = document.querySelector('.nodes-container');
    let blockCounter = 0;
    
    for (let i = 0; i < 5; i++) {
        const node = document.createElement('div');
        node.className = 'node';
        node.innerHTML = '<i class="fas fa-circle-notch"></i>';
        node.style.transform = `translateY(${Math.random() * 20 - 10}px)`;
        nodesContainer.appendChild(node);
    }
    
    const addBlock = () => {
        if (blockCounter >= 8) {
            addBlockBtn.disabled = true;
            return;
        }
        
        const block = document.createElement('div');
        block.className = 'demo-block';
        block.style.opacity = '0';
        block.style.transform = 'translateY(20px)';
        
        const index = document.createElement('div');
        index.className = 'demo-block-index';
        index.textContent = `#${blockCounter}`;
        
        const hash = document.createElement('div');
        hash.className = 'demo-block-hash';
        hash.textContent = `${Math.random().toString(36).substring(2, 10)}...`;
        
        block.appendChild(index);
        block.appendChild(hash);
        blockchainContainer.appendChild(block);
        
        setTimeout(() => {
            block.style.opacity = '1';
            block.style.transform = 'translateY(0)';
        }, 50);
        
        blockCounter++;
        
        const nodes = document.querySelectorAll('.node');
        nodes.forEach((node, i) => {
            setTimeout(() => {
                node.innerHTML = '<i class="fas fa-check"></i>';
                node.style.color = '#00F5D4';
                node.style.transform = 'scale(1.1)';
                
                setTimeout(() => {
                    node.innerHTML = '<i class="fas fa-circle-notch"></i>';
                    node.style.color = '';
                    node.style.transform = `translateY(${Math.random() * 20 - 10}px)`;
                }, 800);
            }, i * 200);
        });
    };
    
    const tamperBlock = () => {
        if (blockCounter === 0) return;
        
        const blocks = document.querySelectorAll('.demo-block');
        const randomBlockIndex = Math.floor(Math.random() * blocks.length);
        const blockToTamper = blocks[randomBlockIndex];
        
        blockToTamper.classList.add('tampered');
        blockToTamper.querySelector('.demo-block-hash').textContent = 'TAMPERED!';
        
        const nodes = document.querySelectorAll('.node');
        nodes.forEach((node, i) => {
            setTimeout(() => {
                node.innerHTML = '<i class="fas fa-times"></i>';
                node.style.color = '#dc3545';
                node.style.transform = 'scale(1.1)';
                
                setTimeout(() => {
                    node.innerHTML = '<i class="fas fa-sync-alt"></i>';
                    node.style.animation = 'spin 1s linear infinite';
                    
                    setTimeout(() => {
                        node.innerHTML = '<i class="fas fa-circle-notch"></i>';
                        node.style.color = '';
                        node.style.animation = '';
                        node.style.transform = `translateY(${Math.random() * 20 - 10}px)`;
                    }, 1000);
                }, 800);
            }, i * 200);
        });
    };
    
    const resetDemo = () => {
        blockchainContainer.innerHTML = '';
        blockCounter = 0;
        addBlockBtn.disabled = false;
        
        const nodes = document.querySelectorAll('.node');
        nodes.forEach(node => {
            node.innerHTML = '<i class="fas fa-circle-notch"></i>';
            node.style.color = '';
            node.style.animation = '';
            node.style.transform = `translateY(${Math.random() * 20 - 10}px)`;
        });
    };
    
    addBlockBtn.addEventListener('click', addBlock);
    tamperBtn.addEventListener('click', tamperBlock);
    resetDemoBtn.addEventListener('click', resetDemo);
}

// ===== SECURITY CHECK TOOL =====
function initSecurityCheck() {
    const securityQuestions = [
        {
            question: "Do you use unique passwords for each of your online accounts?",
            answers: [
                "Yes, always with a password manager",
                "Most of the time",
                "I reuse a few passwords",
                "I use the same password everywhere"
            ],
            weights: [4, 3, 2, 1],
            tips: [
                "Great! Password managers are essential for security.",
                "Consider using a password manager to generate and store unique passwords.",
                "Try to eliminate password reuse - it's a major security risk.",
                "This is very dangerous. Please start using unique passwords immediately."
            ]
        },
        {
            question: "Do you enable two-factor authentication (2FA) when available?",
            answers: [
                "Yes, everywhere it's available",
                "Only on important accounts",
                "Rarely",
                "No, I don't use 2FA"
            ],
            weights: [4, 3, 2, 1],
            tips: [
                "Excellent! 2FA is one of the best security measures.",
                "Expand 2FA to more accounts - it's worth the extra step.",
                "You're missing important protection. Enable 2FA on at least email and banking.",
                "This leaves you extremely vulnerable. Enable 2FA starting with your most important accounts."
            ]
        },
        {
            question: "How often do you update your software and apps?",
            answers: [
                "As soon as updates are available",
                "Within a week of release",
                "When I remember to",
                "Almost never"
            ],
            weights: [4, 3, 2, 1],
            tips: [
                "Perfect! Keeping software updated is crucial for security.",
                "Good, but try to update immediately when security patches are released.",
                "Set reminders to update regularly - outdated software is vulnerable.",
                "This is a major security risk. Enable automatic updates where possible."
            ]
        },
        {
            question: "Do you know how to identify phishing attempts?",
            answers: [
                "Yes, I'm very confident",
                "I know the basics",
                "I'm somewhat familiar",
                "No, not really"
            ],
            weights: [4, 3, 2, 1],
            tips: [
                "Excellent! Stay vigilant against evolving phishing techniques.",
                "Good start - consider taking our security awareness training.",
                "Phishing is constantly evolving - our resources can help you stay current.",
                "This makes you highly vulnerable. Please educate yourself immediately."
            ]
        },
        {
            question: "Do you use a password manager?",
            answers: [
                "Yes, and I love it!",
                "I've tried one but don't use it consistently",
                "No, but I'm considering it",
                "No, I don't trust them"
            ],
            weights: [4, 3, 2, 1],
            tips: [
                "Great! You're using one of the most effective security tools.",
                "Try to use it consistently - the benefits far outweigh any inconvenience.",
                "We highly recommend starting - our resources can help you choose one.",
                "Modern password managers are very secure and essential for good security."
            ]
        }
    ];
    
    const questionContainer = document.querySelector('.question-container');
    const prevQuestionBtn = document.getElementById('prev-question');
    const nextQuestionBtn = document.getElementById('next-question');
    const progressFill = document.querySelector('.progress-fill');
    
    let currentQuestionIndex = 0;
    let userAnswers = Array(securityQuestions.length).fill(null);
    
    const showQuestion = (index) => {
        if (index < 0 || index >= securityQuestions.length) return;
        
        currentQuestionIndex = index;
        const question = securityQuestions[index];
        
        questionContainer.style.opacity = '0';
        
        setTimeout(() => {
            let answersHTML = '';
            question.answers.forEach((answer, i) => {
                const isChecked = userAnswers[index] === i ? 'checked' : '';
                answersHTML += `
                    <label class="option">
                        <input type="radio" name="answer" value="${i}" ${isChecked}>
                        <span class="checkmark"></span>
                        ${answer}
                    </label>
                `;
            });
            
            questionContainer.innerHTML = `
                <div class="question">${question.question}</div>
                <div class="answer-options">${answersHTML}</div>
            `;
            
            questionContainer.style.opacity = '1';
            
            const progress = ((index + 1) / securityQuestions.length) * 100;
            progressFill.style.width = `${progress}%`;
            
            prevQuestionBtn.disabled = index === 0;
            // nextQuestionBtn.textContent = index === securityQuestions.length - 1 ? 
            //     'See Results <i class="fas fa-chart-bar"></i>' : 
            //     'Next <i class="fas fa-arrow-right"></i>';
            // Update in your script.js - initSecurityCheck() function
nextQuestionBtn.innerHTML = index === securityQuestions.length - 1 
    ? 'See Results <i class="fas fa-chart-bar"></i>' 
    : 'Next <i class="fas fa-arrow-right"></i>';
              
        }, 300);
    };
    
    const saveAnswer = () => {
        const selectedAnswer = document.querySelector('input[name="answer"]:checked');
        if (selectedAnswer) {
            userAnswers[currentQuestionIndex] = parseInt(selectedAnswer.value);
            return true;
        }
        return false;
    };
    
    const showResults = () => {
        let totalScore = 0;
        let maxScore = 0;
        
        userAnswers.forEach((answerIndex, questionIndex) => {
            if (answerIndex !== null) {
                const question = securityQuestions[questionIndex];
                totalScore += question.weights[answerIndex];
                maxScore += 4;
            }
        });
        
        const percentage = Math.round((totalScore / maxScore) * 100);
        let message, color, icon;
        
        if (percentage >= 80) {
            message = "Excellent Security!";
            color = "#28a745";
            icon = "fas fa-shield-alt";
        } else if (percentage >= 60) {
            message = "Good, But Could Improve";
            color = "#17a2b8";
            icon = "fas fa-user-shield";
        } else if (percentage >= 40) {
            message = "Needs Improvement";
            color = "#ffc107";
            icon = "fas fa-exclamation-triangle";
        } else {
            message = "Security Risk!";
            color = "#dc3545";
            icon = "fas fa-skull-crossbones";
        }
        
        let recommendationsHTML = '<ul class="recommendations-list">';
        userAnswers.forEach((answerIndex, questionIndex) => {
            if (answerIndex !== null && answerIndex < 2) {
                recommendationsHTML += `
                    <li>
                        <i class="fas fa-lightbulb"></i>
                        ${securityQuestions[questionIndex].tips[answerIndex]}
                    </li>
                `;
            }
        });
        recommendationsHTML += '</ul>';
        
        questionContainer.innerHTML = `
            <div class="results" style="text-align: center;">
                <div class="result-icon" style="font-size: 3rem; color: ${color}; margin-bottom: 15px;">
                    <i class="${icon}"></i>
                </div>
                <h3 style="color: ${color};">${message}</h3>
                <div class="result-score" style="font-size: 2rem; font-weight: bold; margin: 15px 0; color: ${color};">
                    ${percentage}%
                </div>
                <p style="margin-bottom: 25px;">${getResultDescription(percentage)}</p>
                
                <div class="recommendations">
                    <h4 style="margin-bottom: 15px; color: var(--secondary);">Personalized Recommendations:</h4>
                    ${recommendationsHTML}
                </div>
                
                <button id="retake-quiz" class="tool-button" style="margin-top: 30px;">
                    <i class="fas fa-redo"></i> Retake Quiz
                </button>
            </div>
        `;
        
        progressFill.style.width = '100%';
        nextQuestionBtn.style.display = 'none';
        prevQuestionBtn.style.display = 'none';
        
        document.getElementById('retake-quiz').addEventListener('click', () => {
            userAnswers = Array(securityQuestions.length).fill(null);
            currentQuestionIndex = 0;
            showQuestion(0);
            nextQuestionBtn.style.display = 'flex';
            prevQuestionBtn.style.display = 'flex';
        });
    };
    
    const getResultDescription = (percentage) => {
        if (percentage >= 80) {
            return "You have excellent security habits! Keep up the good work and stay vigilant.";
        } else if (percentage >= 60) {
            return "Your security practices are good, but there are areas where you could improve to better protect yourself.";
        } else if (percentage >= 40) {
            return "Your security needs attention. Follow our recommendations to significantly improve your protection.";
        } else {
            return "You're at high risk of security breaches. Please take immediate action to improve your security.";
        }
    };
    
    prevQuestionBtn.addEventListener('click', () => {
        saveAnswer();
        showQuestion(currentQuestionIndex - 1);
    });
    
    nextQuestionBtn.addEventListener('click', () => {
        if (!saveAnswer() && userAnswers[currentQuestionIndex] === null) {
            const errorMsg = document.createElement('div');
            errorMsg.className = 'error-message';
            errorMsg.textContent = 'Please select an answer to continue';
            questionContainer.appendChild(errorMsg);
            
            setTimeout(() => {
                errorMsg.remove();
            }, 900);
            return;
        }
        
        if (currentQuestionIndex === securityQuestions.length - 1) {
            showResults();
        } else {
            showQuestion(currentQuestionIndex + 1);
        }
    });
    
    showQuestion(0);
}

// ===== RESOURCES CAROUSEL =====
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.slide');
  const btnPrev = document.querySelector('.prev');
  const btnNext = document.querySelector('.next');
  const indicatorsContainer = document.querySelector('.indicators');
  let currentIndex = 0;
  
  // Create indicators
  slides.forEach((_, index) => {
    const indicator = document.createElement('div');
    indicator.classList.add('indicator');
    if(index === 0) indicator.classList.add('active');
    indicator.addEventListener('click', () => goToSlide(index));
    indicatorsContainer.appendChild(indicator);
  });
  
  const indicators = document.querySelectorAll('.indicator');
  
  function updateCarousel() {
    document.querySelector('.carousel-slides').style.transform = 
      `translateX(-${currentIndex * 100}%)`;
    
    // Update active classes
    slides.forEach((slide, index) => {
      slide.classList.toggle('active', index === currentIndex);
    });
    
    indicators.forEach((indicator, index) => {
      indicator.classList.toggle('active', index === currentIndex);
    });
  }
  
  function goToSlide(index) {
    currentIndex = index;
    updateCarousel();
  }
  
  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
  }
  
  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel();
  }
  
  btnNext.addEventListener('click', nextSlide);
  btnPrev.addEventListener('click', prevSlide);
  
  // Auto-advance (optional)
  let interval = setInterval(nextSlide, 5000);
  
  // Pause on hover
  document.querySelector('.carousel-container').addEventListener('mouseenter', () => {
    clearInterval(interval);
  });
  
  document.querySelector('.carousel-container').addEventListener('mouseleave', () => {
    interval = setInterval(nextSlide, 5000);
  });
  
  // Learn more button functionality
  document.querySelectorAll('.learn-more').forEach(button => {
    button.addEventListener('click', function() {
      const topic = this.getAttribute('data-topic');
      // Add your custom logic here for each topic
      alert(`Loading more information about: ${topic}`);
      // Example: window.location.href = `/learn/${topic}`;
    });
  });
});



// ===== NEWSLETTER FORM =====
function initNewsletterForm() {
    const newsletterForm = document.querySelector('.newsletter-form');
    const formMessage = document.querySelector('.form-message');
    
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const emailInput = newsletterForm.querySelector('input[type="email"]');
        const submitButton = newsletterForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;
        
        if (!emailInput.value || !emailInput.value.includes('@') || !emailInput.value.includes('.')) {
            showFormMessage('Please enter a valid email address', 'error');
            return;
        }
        
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        
        setTimeout(() => {
            showFormMessage('Thank you for subscribing!', 'success');
            emailInput.value = '';
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
        }, 1500);
    });
    
    function showFormMessage(message, type) {
        formMessage.textContent = message;
        formMessage.className = 'form-message';
        formMessage.classList.add(type);
        
        setTimeout(() => {
            formMessage.textContent = '';
            formMessage.className = 'form-message';
        }, 3000);
    }
}

// ===== LAZY LOADING =====
function initLazyLoading() {
    const lazyImages = document.querySelectorAll('[data-src]');
    
    const lazyLoad = () => {
        lazyImages.forEach(img => {
            if (img.getBoundingClientRect().top < window.innerHeight + 100) {
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
            }
        });
    };
    
    window.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);
    lazyLoad();
}

// ===== INITIALIZE EVERYTHING =====
document.addEventListener('DOMContentLoaded', function() {
    initThemeToggle();
    initMobileMenu();
    initSmoothScrolling();
    initHeaderScroll();
    initParticles();
    initBlockchainVisualization();
    initServiceCards();
    initBlockchainDemo();
    initSecurityCheck();
    initResourcesCarousel();
    initNewsletterForm();
    initLazyLoading();
    
    // Scroll-down button
    const scrollDownBtn = document.querySelector('.scroll-down');
    if (scrollDownBtn) {
        scrollDownBtn.addEventListener('click', () => {
            const nextSection = document.querySelector('section:nth-of-type(2)');
            if (nextSection) {
                window.scrollTo({
                    top: nextSection.offsetTop - document.querySelector('.glass-header').offsetHeight,
                    behavior: 'smooth'
                });
            }
        });
    }
});


// Date update 
document.addEventListener('DOMContentLoaded', function() {
    const copyrightParagraph = document.querySelector('.footer-bottom p');
    if (copyrightParagraph) {
        copyrightParagraph.textContent = copyrightParagraph.textContent.replace('2022', new Date().getFullYear());
    }
});

const educationTab = document.getElementById('educationTab');
const experienceTab = document.getElementById('experienceTab');
const educationContent = document.getElementById('educationContent');
const experienceContent = document.getElementById('experienceContent');
const finger = document.getElementById('finger');

educationTab.addEventListener('click', () => {
    educationTab.classList.add('active');
    experienceTab.classList.remove('active');
    educationContent.classList.add('active');
    experienceContent.classList.remove('active');
    // Move finger above Experience tab
    finger.style.left = `${experienceTab.offsetLeft + (experienceTab.offsetWidth / 2) - 10}px`;
});

experienceTab.addEventListener('click', () => {
    experienceTab.classList.add('active');
    educationTab.classList.remove('active');
    experienceContent.classList.add('active');
    educationContent.classList.remove('active');
    // Move finger above Education tab
    finger.style.left = `${educationTab.offsetLeft + (educationTab.offsetWidth / 2) - 10}px`;
});

// Initialize finger position
window.onload = () => {
    finger.style.left = `${experienceTab.offsetLeft + (experienceTab.offsetWidth / 2) - 10}px`;
};

