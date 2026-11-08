// script.js

// ================= TYPING ANIMATION =================
const typingElement = document.querySelector(".typing");

const roles = [
  "Content Creator",
  "Video Editor",
  "Cameraman & Cinematographer",
  "Web Developer",
  "Graphic Designer"
];

let roleIndex = 0;
let charIndex = 0;
let isDeleting = false;
let typeSpeed = 100;

function typeEffect() {
  if (!typingElement) return;

  const currentRole = roles[roleIndex];

  if (isDeleting) {
    typingElement.textContent = currentRole.substring(0, charIndex - 1);
    charIndex--;
    typeSpeed = 45;
  } else {
    typingElement.textContent = currentRole.substring(0, charIndex + 1);
    charIndex++;
    typeSpeed = 95;
  }

  if (!isDeleting && charIndex === currentRole.length) {
    typeSpeed = 1600; // Pause when word is finished
    isDeleting = true;
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    roleIndex = (roleIndex + 1) % roles.length;
    typeSpeed = 350; // Pause before typing next word
  }

  setTimeout(typeEffect, typeSpeed);
}

// ================= DARK / LIGHT MODE TOGGLE =================
const darkModeBtn = document.getElementById("darkModeToggle");

if (darkModeBtn) {
  darkModeBtn.addEventListener("click", () => {
    document.body.classList.toggle("light-mode");
    const icon = darkModeBtn.querySelector("i");
    if (document.body.classList.contains("light-mode")) {
      icon.classList.replace("fa-moon", "fa-sun");
    } else {
      icon.classList.replace("fa-sun", "fa-moon");
    }
  });
}

// ================= MOBILE HAMBURGER MENU =================
const hamburger = document.getElementById("hamburger");
const navbar = document.getElementById("navbar");

if (hamburger && navbar) {
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navbar.classList.toggle("active");
  });

  // Close menu when clicking a navigation link
  document.querySelectorAll(".navbar a").forEach((link) => {
    link.addEventListener("click", () => {
      hamburger.classList.remove("active");
      navbar.classList.remove("active");
    });
  });
}

// ================= PROJECT FILTERING =================
const filterBtns = document.querySelectorAll(".filter-btn");
const projectCards = document.querySelectorAll(".project-card");

filterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    filterBtns.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.getAttribute("data-filter");
    projectCards.forEach((card) => {
      if (filter === "all" || card.classList.contains(filter)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// Run Typing Animation on Load
document.addEventListener("DOMContentLoaded", typeEffect);