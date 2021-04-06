$(document).ready(function () {
    $('.slider-gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        // variableWidth: true,
        rows: 2,
        responsive: [
            {
                breakpoint: 475,
                settings: {
                    slidesToShow: 1,
                    // variableWidth: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    // variableWidth: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    // variableWidth: true
                }
            },
            // {
            //     breakpoint: 992,
            //     settings: {
            //         slidesToShow: 2,
            //     }
            // },

            // {
            //     breakpoint: 1200,
            //     settings: {
            //         slidesToShow: 2,
            //     }
            // },
        ],
    }),
    $('.slider-reviews').slick({
        slidesToShow: 2,
        infinite: true,
        responsive: [
            {
                breakpoint: 574,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 1,
                }
            },

            // {
            //     breakpoint: 1200,
            //     settings: {
            //         slidesToShow: 2,
            //     }
            // },
        ],
    })

})