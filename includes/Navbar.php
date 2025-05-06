<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="./images/Logo.png" alt="Logo">
    </div>
    <div class="menu-icon" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <ul class="nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="InvestmentThesis.php">Investment Thesis</a></li>
      <li><a href="PitchEttique.php">PitchEttique</a></li>
      <li><a href="NeedleinaHaystack.php">Needle in a Haystack</a></li>
    </ul>
  </nav>

  <script>
    function toggleMenu() {
      const nav = document.querySelector('.nav');
      nav.classList.toggle('active');
    }
  </script>
</body>
</html>
