
/* MY DDL THINGY THINGY
==========================*/


//window.onload = initAll;
//function initAll() {
//    getCategory();
//    getAreaOrigin();
//    getArea();


$(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
        $("header").css("background", "rgba(19, 104, 155, 1)");
        $("header").css("border-bottom", "2px solid rgba(255, 255, 255, 1)");
        $("header").css("color", "rgba(255, 255, 255, 1)");
        $("header h1").css("color", "rgba(255, 255, 255, 1)");
        $("header a").css("color", "rgba(255, 255, 255, 1)");
        $("#logo").attr("src", "images/blogoo.jpg");
		 $(".nav a:hover").css("color", "rgba(255, 255, 255, 0.6)");
        
        $(".navbar-nav > ul > li > ul").css("background", "transparent !important");
    }
    else {
        $("header").css("background", "transparent");
        $("header").css("border-bottom", "none");
        $("header").css("color", "rgba(255, 255, 255, 1)");
        $("header a").css("color", "rgba(255, 255, 255, 1)");
        $("#logo").attr("src", "images/blogoo.jpg");
        $(".nav a:hover").css("color", "rgba(19, 104, 155, 1)");


        $(".navbar-nav > ul > li > ul").css("background", "white");
    }
});

