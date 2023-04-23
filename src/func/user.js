/*==================== SHOW MENU ====================*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);
  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show-menu");
    });
  }
};
showMenu("nav-toggle", "nav-menu");
const navLink = document.querySelectorAll(".nav__link");
function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));
const sections = document.querySelectorAll("section[id]");
function scrollActive() {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active-link");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active-link");
    }
  });
}

// CAROUSEL SLIDER
var imgList = document.getElementById("img-list");
var caroBtns = document.getElementsByClassName("caro-btn");
var status = 0;
var positionUnit = -100;
var slideInterval = null; // holds reference to the auto slide interval

function slideImg(x) {
  var i;

  for (i = 0; i < caroBtns.length; i++) {
    caroBtns[i].style.backgroundColor = "#ffffff44";
  }
  caroBtns[x].style.backgroundColor = "#fff";
  position = x * positionUnit;
  imgList.style.left = position + "%";

  // Clear any existing auto slide interval
  clearInterval(slideInterval);

  // Start a new auto slide interval
  slideInterval = setInterval(function () {
    x = (x + 1) % caroBtns.length; // move to next slide
    slideImg(x);
  }, 5000); // slide every 5 seconds
}

// Start auto slide on page load
slideImg(0);

var i = 0,
  text;
text = "Contact JRSPEED PH.";
function typing() {
  if (i < text.length) {
    document.getElementById("text").innerHTML += text.charAt(i);
    i++;
    setTimeout(typing, 50);
  }
}
typing();

$(document).ready(function () {
  $(".btn_nav_home").click(function () {
    $(".page").hide();
    $("#div_home").show();
    $('.nav__link').removeClass('active-link')
    $(this).addClass('active-link')
  });
  $(".btn_nav_shop").click(function () {
    $(".page").hide();
    $("#div_shop").show();
    $('.nav__link').removeClass('active-link')
    $(this).addClass('active-link')
  });
  $(".btn_nav_contact").click(function () {
    $(".page").hide();
    $("#div_contact").show();
    $('.nav__link').removeClass('active-link')
    $(this).addClass('active-link')
  });
  $(".btn_nav_faq").click(function () {
    $(".page").hide();
    $("#div_faq").show();
    $('.nav__link').removeClass('active-link')
    $(this).addClass('active-link')
  });
});
