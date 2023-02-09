/** Declaration of constants **/
// Retrieves the URL of the current page
const currentPage = window.location.pathname;
// Retrieves elements from the DOM
const header = document.querySelector("header");
const main = document.querySelector("main");
const footer = document.querySelector("footer");
const mobileIcon = document.querySelectorAll(".mobile__icon");
const navList = document.querySelector(".nav__list");
/** Menu **/
// Indicates if the menu is open or closed
let menuOpen = false;
// Manages the display of the menu
const manageMenu = () => {
    menuOpen = !menuOpen;
    mobileIcon[0].classList.replace(menuOpen ? "show" : "hide", menuOpen ? "hide" : "show");
    mobileIcon[1].classList.replace(menuOpen ? "hide" : "show", menuOpen ? "show" : "hide");
    main.classList.toggle("hide");
    footer.classList.toggle("hide");
    navList.classList.toggle("show");
};
// Adds the active class to the menu link of the current page
const activeLink = (path) => {
    const linkId = `link--${path.replace("/pages/", "")}`;
    const link = document.getElementById(linkId);
    if (link) {
        link.classList.add("active");
    }
};
// Selects the active link based on the URL of the current page
switch (currentPage) {
    case currentPage:
        activeLink("home");
        break;
    case "/pages/index":
        activeLink("home");
        break;
    case "/pages/about-me":
        activeLink("about-me");
        break;
    case "/pages/projects":
        activeLink("projects");
        break;
    case "/pages/contact":
        activeLink("contact");
        break;
}
/** Footer **/
// Retrieves the DOM element displaying the copyright year in the footer
const footerCopyrightYear = document.querySelector(".footer__copyright--year");
// Displays the current year
const displayCurrentYear = () => {
    const currentYear = new Date().getFullYear().toString();
    footerCopyrightYear.textContent = currentYear;
};
displayCurrentYear();
