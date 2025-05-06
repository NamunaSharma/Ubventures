
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/Navbar.php'; ?>
  <section class="blog-section">
    <div class="blog-grid">
      <div class="blog-card">
        <img src="images/blog1.jpg" alt="Stay Hungry, Stay Foolish">
        <div class="blog-content">
          <span class="blog-date">April 22, 2025</span>
          <h3 class="blog-title">Stay Hungry, Stay Foolish</h3>
          <p>Steve Jobs' legendary advice to "stay hungry, stay foolish," delivered during his landmark 2005 Stanford commencement speech, has long served as an anthem for innovators and pioneers.</p>
          <button class="read-more">Read More →</button>
        </div>
      </div>

      <div class="blog-card">
        <img src="images/blog2.jpg" alt="Think Big, Act Smart">
        <div class="blog-content">
          <span class="blog-date">April 15, 2025</span>
          <h3 class="blog-title">Think Big, Act Smart</h3>
          <p>In the fast-paced world of startups, dreaming big is vital—but execution is everything. Learn how to balance ambition with strategic moves.</p>
          <button class="read-more">Read More →</button>
        </div>
      </div>

      <div class="blog-card">
        <img src="images/blog3.jpg" alt="Intro">
        <div class="blog-content">
          <span class="blog-date">April 8, 2025</span>
          <h3 class="blog-title">Intro</h3>
          <p>Needle in a Haystack is UB Ventures’ monthly deep dive into the world of healthcare startups—where innovation meets uncertainty, and data helps guide our decisions.</p>
          <button class="read-more">Read More →</button>
        </div>
      </div>
    </div>
  </section>

  <section class="subscribe-section">
    <div class="subscribe-content">
      <h2>Needle in a Haystack</h2>
      <p>Subscribe to our monthly deep dive into the world of healthcare startups and innovation.</p>
      <form class="subscribe-form">
        <input type="email" placeholder="Enter Your Email" required>
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <p>Copyright © 2025 UB Ventures LLC - All Rights Reserved.</p>
  </footer>

</body>
</html>
