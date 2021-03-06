$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 10,
            },

            600: {
                items: 2,
                margin: 20,
                stagePadding: 10,
            },

            1024: {
                items: 3,
                margin: 20,
                stagePadding: 0,
            },
            1060: {
                items: 4,
                margin: 15,
                stagePadding: 0,
            }

        }
    });

    let owl = $(".owl-carousel");
    $("#arrowCardPrev").click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $("#arrowCardNext").click(function (e) {
        owl.trigger('next.owl.carousel');
    });

});

$(".img-gallery").css("cursor", "pointer");
$(".img-gallery").attr("data-bs-target", "#carouselExampleControls");
let imgGallery = $(".img-gallery");
let index = 0;

for (const element of imgGallery) {
    $(element).attr("data-bs-slide-to", index);
    index++;
}

$("#carouselExampleControls").bind("slide.bs.carousel", function (e) {
    setTimeout(() => {
        let carouselState = $("#carouselExampleControls > .carousel-inner > .active > img");
        let attr = $(carouselState).attr("src");
        let imgState = $(".img-gallery[src='" + attr + "']");
        $(".img-gallery").removeClass("gallery-active");
        $(imgState).addClass("gallery-active");
    }, 650);

})

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', function () {
        if (window.scrollY > 250) {
            $("#navbar-top").fadeIn(
                "swing",
                function () {
                    document.getElementById('navbar-top').classList.add('fixed-top');
                    document.getElementById('navbar-top').classList.add('py-0');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                }
            );

        } else {
            document.getElementById('navbar-top').classList.remove('fixed-top');
            document.getElementById('navbar-top').classList.remove('py-0');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
});