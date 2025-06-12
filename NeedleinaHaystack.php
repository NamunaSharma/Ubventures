
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog Page</title>
  <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="favicon.jpg">

</head>
<body>
<?php include 'includes/Navbar.php'; ?>

<!-- ✨ New Hero Header -->
<section class="hero-header">
  <h1>Needle in a Haystack</h1>
  <p>Explore insights, stories, and ideas that shape the future.</p>
</section>

<section class="blogpage-section">
  <div class="blogpage-grid">
        <div class="blogpage-row" id="blog4">
      <div class="blogpage-image">
        <img src="images/blog4.jpg" alt="The Smartest Guy in the Room Usually Loses">
      </div>
      <div class="blogpage-content">
        <span class="blogpage-date">May 17, 2025</span>
        <h3 class="blogpage-title">The Smartest Guy in the Room Usually Loses</h3>
        <p>One of the biggest mistakes a venture capitalist can make is trying to be the smartest person at the table. It’s tempting. VCs are trained to analyze, to pattern-match, to spot trends and apply frameworks. </p>
          <button class="read-more"><a href="blog1.php" style="text-decoration: none; color:white;">Read More →</a></button>

      </div>
    </div>
    <!-- Existing Blog Rows -->
    <div class="blogpage-row" id="blog1">
     
      <div class="blogpage-content">
        <span class="blogpage-date">April 22, 2025</span>
        <h3 class="blogpage-title">Stay Hungry, Stay Foolish</h3>
        <p>Steve Jobs' legendary advice to "stay hungry, stay foolish," delivered during his landmark 2005 Stanford commencement speech, has long served as an anthem for innovators and pioneers.</p>
        <button class="read-more"><a href="stayhungry.php" style="text-decoration: none; color:white;">Read More →</a></button>

      </div>
       <div class="blogpage-image">
        <img src="images/blog1.jpg" alt="Stay Hungry, Stay Foolish" style="text-decoration: none; color:white;">
      </div>
    </div>

    <div class="blogpage-row" id="blog2">
      <div class="blogpage-image">
        <img src="images/blog2.jpg" alt="Think Big, Act Smart">
      </div>
      <div class="blogpage-content">
        <span class="blogpage-date">April 15, 2025</span>
        <h3 class="blogpage-title">Think Big, Act Smart</h3>
        <p>In the fast-paced world of startups, dreaming big is vital—but execution is everything. Learn how to balance ambition with strategic moves.</p>
        <button class="read-more"><a href="Thinkbigthinksmart.php " style="text-decoration: none; color: white;">Read More →</a></button>
      </div>
    </div>

    <div class="blogpage-row" id="blog3">
      
      <div class="blogpage-content">
        <span class="blogpage-date">April 8, 2025</span>
        <h3 class="blogpage-title">Intro</h3>
        <p>Needle in a Haystack is UB Ventures’ monthly deep dive into the world of healthcare startups—where innovation meets uncertainty, and data helps guide our decisions.</p>
          <button class="read-more"><a href="needlepage.php" style="text-decoration: none; color:white;">Read More →</a></button>

      </div>
      <div class="blogpage-image">
        <img src="images/blog3.jpg" alt="Intro">
      </div>
    </div>
  </div>
</section>


<?php include 'includes/Form.php'; ?>

<footer class="footer">
  <p>Copyright © 2025 UB Ventures LLC - All Rights Reserved.</p>
</footer>
</body>
</html>
