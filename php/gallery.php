<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery</title>
<link rel="stylesheet" href="../css/gallery.css">

<?php include 'header.php'; ?>



<section class="gallery-banner">

    <div class="banner-overlay"></div>

    <div class="banner-content">
        <span class="banner-line"></span>
        <h1>Our Gallery</h1>
        <p>Where design meets elegance and timeless aesthetics</p>
    </div>

</section>

<section class="gallery-section">

    <!-- TITLE -->
    <div class="gallery-title">
        <h1>— GALLERY</h1>
    </div>

    <!-- FILTER -->
    <div class="gallery-tabs">
        <button class="active" onclick="filterItems(event,'all')">All</button>
        <button onclick="filterItems(event,'residential')">Residential</button>
        <button onclick="filterItems(event,'workspace')">Workspaces</button>
        <button onclick="filterItems(event,'kitchen')">Kitchens</button>
        <button onclick="filterItems(event,'prayer')">Prayer Spaces</button>
    </div>

    <!-- FLEX GALLERY -->
    <div class="gallery-flex" id="galleryFlex">

        <!-- RESIDENTIAL -->
<div class="gallery-card residential">
    <img src="../images/apart5.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Sea Facing Apartment</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart1.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card workspace">
    <img src="../images/work6.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modern Workspace</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work6.jpeg')">+</div>
    </div>
</div>



<div class="gallery-card kitchen">
    <img src="../images/kitchen4.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Luxury Kitchen</h2>
            <p>Kitchen</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/kitchen4.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja4.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Spiritual Corner</h2>
            <p>Prayer</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/pooja4.jpg')">+</div>
    </div>
</div>



<div class="gallery-card workspace">
    <img src="../images/work2.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Corporate Interior</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work2.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja6.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modern Temple</h2>
            <p>Prayer</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/pooja6.jpg')">+</div>
    </div>
</div>

<div class="gallery-card residential">
    <img src="../images/apart6.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Urban Living</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart2.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card residential">
    <img src="../images/apart7.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Luxury Flat</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart1.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card residential">
    <img src="../images/apart8.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modern Home</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart2.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card residential">
    <img src="../images/apart9.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Villa Interior</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart1.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card residential">
    <img src="../images/apart10.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Premium Living</h2>
            <p>Residential</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/apart2.jpeg')">+</div>
    </div>
</div>

<!-- WORKSPACE -->
<!-- WORKSPACE -->

<div class="gallery-card workspace">
    <img src="../images/work2.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Corporate Interior</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work2.jpg')">+</div>
    </div>
</div>

<div class="gallery-card workspace">
    <img src="../images/work3.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Office Setup</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work3.jpg')">+</div>
    </div>
</div>

<div class="gallery-card workspace">
    <img src="../images/work4.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Startup Office</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work4.jpg')">+</div>
    </div>
</div>

<div class="gallery-card workspace">
    <img src="../images/work5.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Tech Workspace</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work5.jpg')">+</div>
    </div>
</div>

<div class="gallery-card workspace">
    <img src="../images/work1.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Meeting Room</h2>
            <p>Workspace</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/work1.jpg')">+</div>
    </div>
</div>

<!-- KITCHEN -->


<div class="gallery-card kitchen">
    <img src="../images/kitchen5.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modern Kitchen</h2>
            <p>Kitchen</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/kitchen5.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card kitchen">
    <img src="../images/kitchen6.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modular Kitchen</h2>
            <p>Kitchen</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/kitchen6.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card kitchen">
    <img src="../images/kitchen7.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Compact Kitchen</h2>
            <p>Kitchen</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/kitchen7.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card kitchen">
    <img src="../images/kitchen8.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Open Kitchen</h2>
            <p>Kitchen</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/kitchen8.jpeg')">+</div>
    </div>
</div>

<div class="gallery-card kitchen">
    <img src="../images/kitchen9.jpeg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Island Kitchen</h2>
            <p>Kitchen</p>
        </div>
     <div class="zoom-icon" onclick="openLightbox('../images/kitchen9.jpeg')">+</div>
    </div>
</div>

<!-- PRAYER -->
<div class="gallery-card prayer">
    <img src="../images/pooja1.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Prayer Space</h2>
            <p>Prayer</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/pooja1.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja2.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Temple Design</h2>
            <p>Prayer</p>
        </div>
      <div class="zoom-icon" onclick="openLightbox('../images/pooja2.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja3.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Pooja Room</h2>
            <p>Prayer</p>
        </div>
 <div class="zoom-icon" onclick="openLightbox('../images/pooja3.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja4.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Spiritual Corner</h2>
            <p>Prayer</p>
        </div>
        <div class="zoom-icon" onclick="openLightbox('../images/pooja4.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja5.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Wooden Mandir</h2>
            <p>Prayer</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/pooja5.jpg')">+</div>
    </div>
</div>

<div class="gallery-card prayer">
    <img src="../images/pooja6.jpg" onclick="openLightbox(this.src)">
    <div class="hover-box">
        <div class="hover-content">
            <h2>Modern Temple</h2>
            <p>Prayer</p>
        </div>
       <div class="zoom-icon" onclick="openLightbox('../images/pooja6.jpg')">+</div>
    </div>
</div>

        <!-- ADD MORE SAME FORMAT -->

  

    <!-- LOAD MORE -->
    <div class="load-box" id="loadBox">
        <button onclick="loadMoreItems()">Load More</button>
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
<!-- LIGHTBOX -->
<div id="lightbox">
    <span class="close-btn" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img">
</div>
<script>

let items = document.querySelectorAll('.gallery-card');
let current = "all";
let visible = 6;

/* SHOW ITEMS */
function showItems() {
    let count = 0;

    items.forEach(item => {
        let match = current === "all" || item.classList.contains(current);

        if (match && count < visible) {
            item.style.display = "block";
            count++;
        } else {
            item.style.display = "none";
        }
    });

    document.getElementById("loadBox").style.display =
        current === "all" ? "block" : "none";
}

/* FILTER */
function filterItems(e, category) {
    current = category;
    visible = 6;

    document.querySelectorAll('.gallery-tabs button').forEach(btn=>{
        btn.classList.remove("active");
    });

    e.target.classList.add("active");

    showItems();
}

/* LOAD MORE */
function loadMoreItems() {
    visible += 3;
    showItems();
}

/* LIGHTBOX */
function openLightbox(src) {
    document.getElementById("lightbox").style.display = "flex";
    document.getElementById("lightbox-img").src = src;
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}

/* INIT */
showItems();

</script>

<script>
window.addEventListener("load", () => {
    let cards = document.querySelectorAll(".gallery-card");

    cards.forEach((card, i) => {
        setTimeout(() => {
            card.classList.add("show");
        }, i * 100); // stagger effect 🔥
    });
});
</script>
<script>
document.querySelectorAll(".gallery-card").forEach(card => {

    card.addEventListener("mousemove", (e) => {
        let rect = card.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;

        let rotateX = -(y / rect.height - 0.5) * 10;
        let rotateY = (x / rect.width - 0.5) * 10;

        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "rotateX(0) rotateY(0)";
    });

});
</script>


<script>
window.addEventListener("load", () => {
    let cards = document.querySelectorAll(".gallery-card");

    cards.forEach((card, i) => {
        setTimeout(() => {
            card.classList.add("show");
        }, i * 100); // smooth delay
    });
});
</script>

<script>
document.querySelectorAll(".gallery-card").forEach(card => {

    card.addEventListener("mousemove", (e) => {
        let rect = card.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;

        let rotateX = -(y / rect.height - 0.5) * 8;
        let rotateY = (x / rect.width - 0.5) * 8;

        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "rotateX(0) rotateY(0) scale(1)";
    });

});
</script>

<script>
    function showItems() {
    let count = 0;

    items.forEach((item, index) => {
        let match = current === "all" || item.classList.contains(current);

        if (match && count < visible) {
            item.style.display = "block";

            // stagger animation
            setTimeout(() => {
                item.classList.add("show");
            }, count * 120); // delay between cards

            count++;
        } else {
            item.style.display = "none";
            item.classList.remove("show"); // reset animation
        }
    });

    document.getElementById("loadBox").style.display =
        current === "all" ? "block" : "none";
}
</script>
<?php include 'footer.php'; ?>
</body>
</html>