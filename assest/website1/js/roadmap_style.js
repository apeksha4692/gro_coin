

$(document).ready(function() {
    var lastScrollTop = 0;
    $(window).scroll(function() {
        var windowWidth = $(window).width();
        if (windowWidth > 769) {
            var windowTop = $(window).scrollTop();
            var windowBottom = $(window).scrollTop() + $(window).height();

            var scrollSterTop = $("#text-image-scroll").position().top - 60;
            var scrollSterBottom =
                $("#text-image-scroll").position().top +
                $("#text-image-scroll").outerHeight(true);
            var textWrapperHeight = $("#text-wrapper").height();

            var centerImage1 = Math.round($("#center-image1").position().left);
            var centerImage2 = Math.round($("#center-image2").position().left);
            var centerImage3 = Math.round($("#center-image3").position().left);
            var centerImage4 = Math.round($("#center-image4").position().left);
            var centerImage5 = Math.round($("#center-image5").position().left);
            var centerImage6 = Math.round($("#center-image6").position().left);
            var centerImage7 = Math.round($("#center-image7").position().left);
            var centerImage8 = Math.round($("#center-image8").position().left);

            if (windowTop > scrollSterTop) {
                $("#images-wrapper").addClass("images-wrapper-fixed");
                $(".bean-bullets").addClass("fixed");
            } else {
                $("#images-wrapper").removeClass("images-wrapper-fixed");
                $(".bean-bullets").removeClass("fixed");
            }
            if (
                centerImage1 < windowWidth / 9 &&
                centerImage2 < windowWidth / 9 &&
                centerImage3 < windowWidth / 9 &&
                centerImage4 < windowWidth / 9 &&
                centerImage5 < windowWidth / 9 &&
                centerImage6 < windowWidth / 9 &&
                centerImage7 < windowWidth / 9 &&
                centerImage8 < windowWidth / 9
            ) {
                $(".bean-bullets .bullet").removeClass("active");
                $(".bean-bullets .bullet:nth-child(1)").addClass("active");
            } else if (
                centerImage1 > windowWidth / 9 &&
                centerImage2 < windowWidth / 9 &&
                centerImage3 < windowWidth / 9 &&
                centerImage4 < windowWidth / 9 &&
                centerImage5 < windowWidth / 9 &&
                centerImage6 < windowWidth / 9 &&
                centerImage7 < windowWidth / 9 &&
                centerImage8 < windowWidth / 9 
            ) {
                $(".bean-bullets .bullet").removeClass("active");
                $(".bean-bullets .bullet:nth-child(2)").addClass("active");
            } else if (
                centerImage1 > windowWidth / 9 &&
                centerImage2 < windowWidth / 9 &&
                centerImage3 < windowWidth / 9 &&
                centerImage4 < windowWidth / 9 &&
                centerImage5 < windowWidth / 9 &&
                centerImage6 < windowWidth / 9 &&
                centerImage7 < windowWidth / 9 &&
                centerImage8 < windowWidth / 9
            ) {
                $(".bean-bullets .bullet").removeClass("active");
                $(".bean-bullets .bullet:nth-child(3)").addClass("active");
            } else if (
                centerImage1 > windowWidth / 9 &&
                centerImage2 < windowWidth / 9 &&
                centerImage3 < windowWidth / 9 &&
                centerImage4 < windowWidth / 9 &&
                centerImage5 < windowWidth / 9 &&
                centerImage6 < windowWidth / 9 &&
                centerImage7 < windowWidth / 9 &&
                centerImage8 < windowWidth / 9
            ) {
                $(".bean-bullets .bullet").removeClass("active");
                $(".bean-bullets .bullet:nth-child(4)").addClass("active");
            }

            if (windowBottom > scrollSterBottom) {
                $("#images-wrapper").removeClass("images-wrapper-fixed");
                $(".bean-bullets").removeClass("fixed");
                $("#images-wrapper").addClass("images-wrapper-fixed-stop");
            } else {
                $("#images-wrapper").removeClass("images-wrapper-fixed-stop");
            }

            if (
                $("#images-wrapper").hasClass("images-wrapper-fixed") &&
                windowBottom < scrollSterBottom - 100
            ) {
                var imageWrapperWidth = $("#images-wrapper").width() * 8;
                var scrolled = windowTop - scrollSterTop;
                var percScrolledOfScrollSter = scrolled / textWrapperHeight;
                var pxOfImageWrapper =
                    imageWrapperWidth * percScrolledOfScrollSter;
                var minus = Math.abs(pxOfImageWrapper) * -1;
                $(".images").css("right", minus);
            }
            lastScrollTop = windowTop;
        }
    });
});
