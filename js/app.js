const navList = document.querySelector(".navlist");
const navItems = document.querySelectorAll(".navitem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".fa-regular fa-bars");
const menuIcon = document.querySelector(".fa-solid fa-xmark");

function toggleMenu() {
  if (navList.classList.contains("showMenu")) {
    navList.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    navList.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

navItems.forEach( 
    function(navItem) { 
      navItem.addEventListener("click", toggleMenu);
    }
  )