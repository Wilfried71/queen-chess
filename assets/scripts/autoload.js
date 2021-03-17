// When the page is loaded
$(function() {
    // Add an event listener on login button
    $('#btn-login').click(function() {
        // Redirect to login page
        window.location.replace("?page=login");
    });
});