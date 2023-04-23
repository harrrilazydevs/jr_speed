let headerMenu = document.querySelector(".header");
let navLink = document.querySelectorAll(".menu-link");
let companyName = document.querySelector(".companyName");
let companyLogo = document.querySelector(".companyLogo");


window.addEventListener("scroll", () => {
    if(window.scrollY >= 85) {
        headerMenu.classList.add("on-scroll");
        companyName.classList.add("on-scroll");
        companyLogo.classList.add("on-scroll");

        navLink.forEach(link => {
            link.classList.add("on-scroll");
        });


    } else {
        headerMenu.classList.remove("on-scroll");
        companyName.classList.remove("on-scroll");
        companyLogo.classList.remove("on-scroll");

        navLink.forEach(link => {
            link.classList.remove("on-scroll");
        });

    }
});


var i=0,text;
text = "Contact JRSPEED PH."
function typing() {
  if (i < text.length) {
    document.getElementById("text").innerHTML += text.charAt(i);
    i++;
    setTimeout(typing, 50);
  }
}
typing();


// Navigation bar
const navbarMenu = document.getElementsByClassName('menu');
const burgerMenu = document.getElementsByClassName('burger');
const userNav = document.getElementsByClassName('user');
const burgerLines = document.querySelectorAll('.burger-line');

// Toggle burger lines on scroll
window.addEventListener('scroll', () => {
  if (window.scrollY >= 85) {
    burgerLines.forEach((line) => {
      line.classList.add('on-scroll');
    });
  } else {
    burgerLines.forEach((line) => {
      line.classList.remove('on-scroll');
    });
  }
});

if (burgerMenu.length && navbarMenu.length) {
  burgerMenu[0]?.addEventListener('click', () => {
    burgerMenu[0]?.classList.toggle('is-active');
    navbarMenu[0]?.classList.toggle('is-active');
    userNav[0]?.classList.toggle('is-active');
  });
}

document.querySelectorAll('.menu-link').forEach((link) => {
  link.addEventListener('click', () => {
    burgerMenu[0]?.classList.remove('is-active');
    navbarMenu[0]?.classList.remove('is-active');
    userNav[0]?.classList.remove('is-active');
  });
});

window.addEventListener('resize', () => {
  if (window.innerWidth >= 768) {
    if (navbarMenu[0]?.classList.contains('is-active')) {
      burgerMenu[0]?.classList.remove('is-active');
      navbarMenu[0]?.classList.remove('is-active');
      userNav[0]?.classList.remove('is-active');
    }
  }
});



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

// PASSWORD SHOW AND HIDE
const passwordInput = document.querySelector('#password');
const togglePasswordButton = document.querySelector('#toggle-password');

togglePasswordButton.addEventListener('click', function () {
  const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);
  togglePasswordButton.classList.toggle('fa-eye-slash');
  togglePasswordButton.classList.toggle('fa-eye');
});





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
