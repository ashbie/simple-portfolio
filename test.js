const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const mainNavbar = document.querySelector("#main-navbar");
const clickOut = document.querySelector(".click-out");
const footer = document.querySelector("#footer");
const contact_me = document.querySelector("#contact_me");

// When I click on the hamburger button, activate the classes that have .active appended to them
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    mainNavbar.classList.toggle("active");
    clickOut.classList.toggle("active");
    footer.classList.toggle("active");
    contact_me.classList.toggle("active");
});

// When I click on any .nav-menu link, make the nav-menu disappear (hide it / default to original css styling)
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    mainNavbar.classList.remove("active");
    clickOut.classList.remove("active");
    footer.classList.remove("active");
    contact_me.classList.remove("active");
}));

// When I click (on the blury part /) away from the .nav-menu, make the .nav-menu disappear and go back to default css styling
clickOut.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    mainNavbar.classList.remove("active");
    clickOut.classList.remove("active");
    footer.classList.remove("active");
    contact_me.classList.remove("active");
});