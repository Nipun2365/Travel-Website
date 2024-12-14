document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var menuItems = document.querySelectorAll(".sidebar ul li a");

    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
        if (menuItem.href === currentUrl) {
            menuItem.parentElement.classList.add("active");
            break;
        }
    }
});
