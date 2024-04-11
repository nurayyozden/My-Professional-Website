// scroll.js

document.addEventListener("DOMContentLoaded", function() {
    // Get the button element
    var projectsButton = document.querySelector('a[href="#projects-anchor"]');

    // Add click event listener to the button
    projectsButton.addEventListener("click", function(event) {
        // Prevent default behavior of the link
        event.preventDefault();

        // Get the position of the anchor element
        var anchorPosition = document.getElementById("projects-anchor").offsetTop; // Changed to offsetTop

        // Scroll to the anchor position smoothly
        window.scrollTo({
            top: anchorPosition,
            behavior: 'smooth'
        });
    });
});
