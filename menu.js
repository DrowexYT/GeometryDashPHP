document.addEventListener("DOMContentLoaded", function() {
    var menuDiv = document.getElementById("menu");
    menuDiv.innerHTML = '<?php include("menu.php"); echo generateMenu(); ?>';

    var startButton = document.getElementById("startButton");
    var container = document.getElementById("container");

    startButton.addEventListener("click", function() {
        // Hide menu and start game
        menuDiv.style.display = "none";
        container.innerHTML = "Game started!"; // Replace with actual game code
    });
});
