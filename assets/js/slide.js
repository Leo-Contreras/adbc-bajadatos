$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [500, 1],
        navigation: true,
        navigationText: ["", ""],
        pagination: true,
        autoPlay: false,
        margin: 10,
        loop: true,
        autoWidth: true,
    });
});