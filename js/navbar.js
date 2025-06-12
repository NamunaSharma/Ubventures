document.addEventListener("DOMContentLoaded", function () {
  const navItems = document.querySelectorAll(".nav li");
  const currentPath = window.location.pathname.split("/").pop(); // e.g. 'services.php'

  navItems.forEach((li, index) => {
    if (index === navItems.length) return;

    const link = li.querySelector("a");
    const href = link.getAttribute("href");

    if (
      (href === "/" && (currentPath === "" || currentPath === "Index.php")) ||
      href === currentPath
    ) {
      li.classList.add("active");
    }
  });
});

function toggleMenu() {
  document.querySelector(".nav").classList.toggle("active");
}

// Close mobile menu on nav link click (for screens ≤ 768px)
document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".nav li a");
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (window.innerWidth <= 768) {
        toggleMenu();
      }
    });
  });
});
