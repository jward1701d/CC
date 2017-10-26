$(document).ready(function(){
    $('.dropdown-toggle').dropdownHover();
	//$('.dropdown-toggle').dropdownHover();
    // Handles the changing of the images on the footer for social media links.
    $('#facebook').mouseenter(function(){
        $(this).attr("src", "img/social/facebook-0a.png");
    });
    $('#facebook').mouseleave(function(){
        $(this).attr("src", "img/social/facebook-1a.png");
    });
    $('#twitter').mouseenter(function(){
        $(this).attr("src", "img/social/twitter-0a.png");
    });
    $('#twitter').mouseleave(function(){
        $(this).attr("src", "img/social/twitter-1a.png");
    });
    $('#linkedIn').mouseenter(function(){
        $(this).attr("src", "img/social/linkedin-0a.png");
    });
    $('#linkedIn').mouseleave(function(){
        $(this).attr("src", "img/social/linkedin-1a.png");
    });
});