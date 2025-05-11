<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
<nav class="navbar">
  <div class="logo">
    <img src="./images/Logo.png" alt="Logo" />
  </div>

  <ul class="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="InvestmentThesis.php">Investment Thesis</a></li>
    <li><a href="PitchEttique.php">Pitch Etiquette</a></li>
    <li><a href="NeedleinaHaystack.php">Needle in a Haystack</a></li>
  </ul>

  <div class="social-icons">
    <a href="https://www.linkedin.com/company/assabet-technologies-official/" class="linkedin-icon">
      <i class="fa-brands fa-linkedin-in"></i>
    </a>
  </div>
</nav>


  <script>
    function toggleMenu() {
      const nav = document.querySelector('.nav');
      nav.classList.toggle('active');
    }
  </script>
</body>
</html>
