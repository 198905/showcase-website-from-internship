var button = document.querySelector(".menuHamburger");
button.addEventListener('click', classAdd);
function classAdd() {
var menu = document.getElementById("menuList");
if (menu.className === "menuList") {
    menu.className += " responsive";
} else {
    menu.className = "menuList";
    }
}
