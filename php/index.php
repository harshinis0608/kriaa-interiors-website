<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    
<!-- HERO SLIDER -->
<section class="hero">
<?php include 'header.php'; ?>
    <div class="slider">

        <!-- SLIDES -->
        <div class="slide active" style="background-image: url('../images/hero1.png');"></div>
        <div class="slide" style="background-image: url('../images/hero12.jpeg');"></div>
        <div class="slide" style="background-image: url('../images/hero10.jpeg');"></div>
        <div class="slide" style="background-image: url('../images/hero8.jpg');"></div>
        <div class="slide" style="background-image: url('../images/hero9.jpeg');"></div>

        <!-- OVERLAY CONTENT -->
        <div class="hero-content">
       <h1>
    Bring home beautiful interiors 
    <span>that fit your</span> budget
</h1>
        </div>

        <!-- ARROWS -->
        <div class="arrow left" onclick="prevSlide()">❮</div>
        <div class="arrow right" onclick="nextSlide()">❯</div>

        <!-- DOTS -->
        <div class="dots">
            <span onclick="goToSlide(0)" class="active"></span>
            <span onclick="goToSlide(1)"></span>
            <span onclick="goToSlide(2)"></span>
            <span onclick="goToSlide(3)"></span>
             <span onclick="goToSlide(4)"></span>
        </div>

    </div>

</section>

<!-- FEATURES -->
<section class="features">
    <div class="feature">
        <i class="fas fa-pencil-ruler"></i>
        <p>Personalised designs</p>
    </div>

    <div class="feature">
        <i class="fas fa-award"></i>
        <p>10-Year Warranty</p>
    </div>

    <div class="feature">
        <i class="fas fa-tags"></i>
        <p>Transparent pricing</p>
    </div>
</section>

<section class="welcome">

    <div class="welcome-container">

        <!-- LEFT CONTENT -->
        <div class="welcome-left">

            <div class="welcome-tag">
                <span>Welcome</span>
                <div class="line"></div>
            </div>

            <h2>
                We craft elegant interior spaces 
                that bring your vision to life
            </h2>

            <p>
                At KRIAA Interiors, we design spaces that reflect your lifestyle, 
                combining creativity with functionality. From concept to execution, 
                we ensure every detail is thoughtfully planned and beautifully delivered.
            </p>

            <!-- SMALL CARDS -->
            <div class="welcome-features">

                <a href="about.php" class="wf-link">
    <div class="wf-item">
        <i class="fas fa-gem"></i>
        <span>Our Story</span>
    </div>
</a>

<a href="our_team.php" class="wf-link">
    <div class="wf-item">
        <i class="fas fa-award"></i>
        <span>Our Team</span>
    </div>
</a>

               

                

            </div>

        </div>

        <!-- RIGHT IMAGES -->
      <div class="welcome-right">

    <!-- MAIN IMAGE -->
    <div class="main-img">
        <img src="../images/hero2.png" alt="">
    </div>

    <!-- SMALL SLIDER -->
    <div class="small-slider">

        <div class="small-slide active">
            <img src="../images/welcome1.jpeg">
        </div>

        <div class="small-slide">
            <img src="../images/welcome2.jpeg">
        </div>

        <div class="small-slide">
            <img src="../images/welcome3.jpeg">
        </div>

        <!-- ARROWS -->
        <div class="small-arrow left" onclick="prevSmall()">❮</div>
        <div class="small-arrow right" onclick="nextSmall()">❯</div>

    </div>

</div>

    </div>

</section>

<section class="services">

    <div class="section-title">
        <h2>Services</h2>
        <p>Crafting functional and elegant spaces tailored to your needs</p>
    </div>

    <div class="services-grid">

        <!-- 1 -->
        <div class="service-card">
            <img src="../images/service1.jpeg">
            <div class="service-content">
                <h3>House Interiors</h3>
                <p>Complete home interior solutions designed for comfort and style.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="service-card">
            <img src="../images/service2.jpeg">
            <div class="service-content">
                <h3>Renovation</h3>
                <p>Transforming existing spaces into modern and functional designs.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="service-card">
            <img src="../images/service3.jpg">
            <div class="service-content">
                <h3>Commercial Interiors</h3>
                <p>Professional interiors for offices, shops, and workspaces.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="service-card">
            <img src="../images/service4.jpg">
            <div class="service-content">
                <h3>Exterior & 3D Design</h3>
                <p>Creative elevation and realistic 3D design concepts.</p>
            </div>
        </div>

        <!-- 5 -->
        <div class="service-card">
            <img src="../images/home4.jpeg">
            <div class="service-content">
                <h3>House Construction</h3>
                <p>End-to-end construction services with quality execution.</p>
            </div>
        </div>

        <!-- 6 -->
        <div class="service-card">
            <img src="../images/service5.jpg">
            <div class="service-content">
                <h3>False Ceiling</h3>
                <p>Stylish ceiling designs to enhance your interiors.</p>
            </div>
        </div>

        <!-- 7 -->
        <div class="service-card">
            <img src="../images/service6.jpg">
            <div class="service-content">
                <h3>Painting</h3>
                <p>Premium painting solutions for a perfect finish.</p>
            </div>
        </div>

        <!-- 8 -->
        <div class="service-card">
            <img src="../images/service7.jpeg">
            <div class="service-content">
                <h3>Electrical Works</h3>
                <p>Safe and efficient electrical solutions for your space.</p>
            </div>
        </div>

    </div>

</section>
<section class="process-section">

    <h2 class="process-title">Work Process</h2>

    <div class="process-container">

        <!-- STEP 1 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-handshake"></i>
                <span>1</span>
            </div>
            <h3>Site Visit</h3>
            <p>Understanding your requirements and space.</p>
        </div>

        <!-- STEP 2 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-comments"></i>
                <span>2</span>
            </div>
            <h3>Discussion</h3>
            <p>Planning design ideas and confirming scope.</p>
        </div>

        <!-- STEP 3 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-drafting-compass"></i>
                <span>3</span>
            </div>
            <h3>Design</h3>
            <p>Creating layouts and getting approvals.</p>
        </div>

        <!-- STEP 4 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-tools"></i>
                <span>4</span>
            </div>
            <h3>Execution</h3>
            <p>Turning design into reality with precision.</p>
        </div>

        <!-- STEP 5 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-industry"></i>
                <span>5</span>
            </div>
            <h3>Production</h3>
            <p>Manufacturing and preparing materials.</p>
        </div>

        <!-- STEP 6 -->
        <div class="process-item">
            <div class="circle">
                <i class="fas fa-home"></i>
                <span>6</span>
            </div>
            <h3>Handover</h3>
            <p>Final delivery of your completed space.</p>
        </div>

    </div>

</section>


<section class="projects">

<h2 class="section-title">Latest Creations</h2>

<div class="project-tabs">
    <button class="active" onclick="filterSelection('all')">View All</button>
    <button onclick="filterSelection('house')">Apartments</button>
    <button onclick="filterSelection('living')">Office</button>
    <button onclick="filterSelection('bedroom')">Bedroom</button>
    <button onclick="filterSelection('kitchen')">Kitchen</button>
    <button onclick="filterSelection('pooja')">Pooja Room</button>
</div>

<div class="project-grid">

<!-- MIXED CARDS -->

<div class="project-card house">
<div class="card-image">
<img src="../images/apart1.jpeg">
<div class="overlay"><h3>Apartment Interior</h3><p>Residential</p></div>
</div></div>

<div class="project-card living">
<div class="card-image">
<img src="../images/office1.jpg">
<div class="overlay"><h3>Office Interior</h3><p>Workspace</p></div>
</div></div>

<div class="project-card bedroom">
<div class="card-image">
<img src="../images/bedroom1.jpg">
<div class="overlay"><h3>Bedroom Interior</h3><p>Bed Chambers</p></div>
</div></div>

<div class="project-card kitchen">
<div class="card-image">
<img src="../images/kitchen1.jpg">
<div class="overlay"><h3>Kitchen Interior</h3><p>Culinary Studio</p></div>
</div></div>

<div class="project-card pooja">
<div class="card-image">
<img src="../images/pooja1.jpg">
<div class="overlay"><h3>Pooja Room Interior</h3><p>Divine Space</p></div>
</div></div>

<div class="project-card house">
<div class="card-image">
<img src="../images/apart2.jpeg">
<div class="overlay"><h3>Apartment Interior</h3><p>Residential</p></div>
</div></div>

<div class="project-card living">
<div class="card-image">
<img src="../images/office2.jpg">
<div class="overlay"><h3>Office Interior</h3><p>Workspace</p></div>
</div></div>

<div class="project-card bedroom">
<div class="card-image">
<img src="../images/bedroom2.jpg">
<div class="overlay"><h3>Bedroom Interior</h3><p>Bed Chambers</p></div>
</div></div>

<div class="project-card kitchen">
<div class="card-image">
<img src="../images/kitchen2.jpg">
<div class="overlay"><h3>Kitchen Interior</h3><p>Culinary Studio</p></div>
</div></div>

<div class="project-card pooja">
<div class="card-image">
<img src="../images/pooja2.jpg">
<div class="overlay"><h3>Pooja Room Interior</h3><p>Divine Space</p></div>
</div></div>

<div class="project-card house">
<div class="card-image">
<img src="../images/apart3.jpeg">
<div class="overlay"><h3>Apartment Interior</h3><p>Residential</p></div>
</div></div>

<div class="project-card living">
<div class="card-image">
<img src="../images/office3.jpg">
<div class="overlay"><h3>Office Interior</h3><p>Workspace</p></div>
</div></div>
<div class="project-card bedroom">
<div class="card-image">
<img src="../images/bedroom3.jpg">
<div class="overlay"><h3>Bedroom Interior</h3><p>Bed Chambers</p></div>
</div></div>


<div class="project-card kitchen">
<div class="card-image">
<img src="../images/kitchen3.jpg">
<div class="overlay"><h3>Kitchen Interior</h3><p>Culinary Studio</p></div>
</div></div>

<div class="project-card pooja">
<div class="card-image">
<img src="../images/pooja3.jpg">
<div class="overlay"><h3>Pooja Room Interior</h3><p>Divine Space</p></div>
</div></div>

</div>

<div class="button-container">
    <a href="gallery.php" id="loadMoreBtn">Load More</a>
</div>

</section>

<script>
let visibleCount = 6;
let currentCategory = "all";

function filterSelection(category) {
    currentCategory = category;
    visibleCount = 6;

    let items = document.getElementsByClassName("project-card");

    // Remove show class first
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("show");
        items[i].style.display = "none";
    }

    let filtered = [];

    for (let i = 0; i < items.length; i++) {
        if (category === "all" || items[i].classList.contains(category)) {
            filtered.push(items[i]);
        }
    }

    // Show with delay (stagger animation 🔥)
    filtered.slice(0, visibleCount).forEach((item, index) => {
        setTimeout(() => {
            item.style.display = "block";
            item.classList.add("show");
        }, index * 100); // delay for each card
    });

    document.getElementById("loadMoreBtn").style.display =
        filtered.length > visibleCount ? "block" : "none";
}
</script>




<script>
let visibleCount = 6;
let currentCategory = "all";

function filterSelection(category) {
    currentCategory = category;
    visibleCount = 6;

    let items = document.getElementsByClassName("project-card");

    // reset
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("show");
        items[i].style.display = "none";
    }

    let filtered = [];

    for (let i = 0; i < items.length; i++) {
        if (category === "all" || items[i].classList.contains(category)) {
            filtered.push(items[i]);
        }
    }

    // SLIDE IN ONE BY ONE 🔥
    filtered.slice(0, visibleCount).forEach((item, index) => {
        setTimeout(() => {
            item.style.display = "block";
            item.classList.add("show");
        }, index * 120); // delay for smooth sequence
    });

    document.getElementById("loadMoreBtn").style.display =
        filtered.length > visibleCount ? "block" : "none";
}
</script>
<script>
let currentCategory = "all";

function filterSelection(category) {
    currentCategory = category;

    const items = document.querySelectorAll(".project-card");

    // STEP 1: Get initial positions
    const firstPositions = [];
    items.forEach(el => {
        firstPositions.push(el.getBoundingClientRect());
    });

    // STEP 2: Apply filter (show/hide)
    items.forEach(el => {
        if (category === "all" || el.classList.contains(category)) {
            el.classList.remove("hide");
        } else {
            el.classList.add("hide");
        }
    });

    // STEP 3: Get new positions
    const lastPositions = [];
    items.forEach(el => {
        lastPositions.push(el.getBoundingClientRect());
    });

    // STEP 4: Animate movement
    items.forEach((el, i) => {
        const first = firstPositions[i];
        const last = lastPositions[i];

        const deltaX = first.left - last.left;
        const deltaY = first.top - last.top;

        if (deltaX || deltaY) {
            el.style.transform = `translate(${deltaX}px, ${deltaY}px)`;

            requestAnimationFrame(() => {
                el.style.transform = "";
            });
        }
    });
}
</script>

<script>
let items = document.getElementsByClassName("project-card");

// show only first 6
for (let i = 0; i < items.length; i++) {
    if (i < 6) {
        items[i].style.display = "block";
    } else {
        items[i].style.display = "none";
    }
}
</script>
<!--- why to choose us-->
<section class="stats">

    <div class="stats-container">

        <div class="stat-box">
            <h2>2022</h2>
            <p>Year Established</p>
        </div>

        <div class="stat-box">
            <h2>30+</h2>
            <p>Successful Projects</p>
        </div>

        <div class="stat-box">
            <h2>15+</h2>
            <p>Expert Team Members</p>
        </div>

        <div class="stat-box">
            <h2>10</h2>
            <p>Years Warranty</p>
        </div>

    </div>

</section>
<!------  testimonials --->
<section class="testimonials">

    <h2 class="section-title">What Our Clients Say</h2>

    <div class="testimonial-container">

        <div class="testimonial-card">
            <p>
                "KRiAA Interiors transformed our home beautifully. 
                The design, execution, and quality exceeded expectations."
            </p>

            <div class="client">
                <img src="../images/team1.jpg" alt="">
                <div>
                    <h4>Rohit Sharma</h4>
                    <span>Home Interior</span>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p>
                "Professional team with excellent planning and execution. 
                Highly recommend for interior and construction work."
            </p>

            <div class="client">
                <img src="../images/team2.jpg" alt="">
                <div>
                    <h4>Anjali Mehta</h4>
                    <span>Villa Project</span>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p>
                "Great experience from design to handover. 
                Everything was handled smoothly and on time."
            </p>

            <div class="client">
                <img src="../images/team3.jpg" alt="">
                <div>
                    <h4>Vikram Reddy</h4>
                    <span>Office Interior</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!---------- faq---->
<section class="faq">

    <h2 class="section-title">Frequently Asked Questions</h2>

    <div class="faq-container">

        <div class="faq-item">
            <button class="faq-question">
                What materials do you use for interiors?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>We use high-quality plywood, laminates, MDF, and premium finishes to ensure durability and aesthetics.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long does a project take?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Project timelines vary depending on size, but most interiors are completed within 30–60 days.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide warranty?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide up to 10 years warranty on selected interior works.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you handle complete home construction?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide end-to-end construction along with interior design and execution.</p>
            </div>
        </div>

    </div>

</section>


<!------cta---->
<section class="cta">

    <div class="cta-container">

        <!-- LEFT CONTENT -->
        <div class="cta-content">
            <h2>Need Help? <span>We’re Here For You!</span></h2>

            <p>
                Have questions about your interior project? 
                Reach out and our team will get in touch shortly.
            </p>

            <a href="contactus.php" class="cta-btn">Contact Us</a>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="cta-image">
            <img src="../images/cta.png" alt="Support">
        </div>

    </div>

</section>

<script>
let index = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dots span");

function showSlide(i){
    slides.forEach(s => s.classList.remove("active"));
    dots.forEach(d => d.classList.remove("active"));

    slides[i].classList.add("active");
    dots[i].classList.add("active");
}

function nextSlide(){
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prevSlide(){
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

function goToSlide(i){
    index = i;
    showSlide(index);
}

/* AUTO SLIDE */
setInterval(nextSlide, 5000);
</script>
<script>
let smallIndex = 0;
const smallSlides = document.querySelectorAll(".small-slide");

function showSmallSlide(index) {
    smallSlides.forEach((slide, i) => {
        slide.classList.remove("active");
    });
    smallSlides[index].classList.add("active");
}

function nextSmall() {
    smallIndex = (smallIndex + 1) % smallSlides.length;
    showSmallSlide(smallIndex);
}

function prevSmall() {
    smallIndex = (smallIndex - 1 + smallSlides.length) % smallSlides.length;
    showSmallSlide(smallIndex);
}
</script>


<script>
  
let counters = document.querySelectorAll(".stat-box h2");

counters.forEach(counter => {
    let target = counter.innerText.replace("+", "");
    let count = 0;

    let update = () => {
        count += Math.ceil(target / 50);
        if (count < target) {
            counter.innerText = count + "+";
            requestAnimationFrame(update);
        } else {
            counter.innerText = target + "+";
        }
    };

    update();
});
</script>
<script>
document.querySelectorAll(".faq-question").forEach(btn => {
    btn.addEventListener("click", () => {

        let item = btn.parentElement;

        // close others
        document.querySelectorAll(".faq-item").forEach(el => {
            if(el !== item) el.classList.remove("active");
        });

        // toggle current
        item.classList.toggle("active");
    });
});
</script>

<?php include 'footer.php'; ?>


</body>
</html>