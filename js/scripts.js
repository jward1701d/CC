$(document).ready(function(){
    $('.dropdown-toggle').dropdownHover();
	//$('.dropdown-toggle').dropdownHover();
    // Handles the changing of the images on the footer for social media links.
    $('#facebook').mouseenter(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
    $('#facebook').mouseleave(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
    $('#twitter').mouseenter(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
    $('#twitter').mouseleave(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
    $('#linkedIn').mouseenter(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
    $('#linkedIn').mouseleave(function(){
        $(this).attr("src", "http://via.placeholder.com/25x25");
    });
});