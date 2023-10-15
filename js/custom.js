(function ($) {
    "use strict";
     
    jQuery('.slider-owl').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });

    jQuery(function () {
        // Owl Carousel
        var owl = jQuery(".owl-carousel");
        owl.owlCarousel({
            items: 3,
            margin: 10,
            loop: false,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    dots: true,
                    loop: true,
                },
                600: {
                    items: 2,
                    nav: false,
                    dots: true,
                    loop: true,
                },
                1000: {
                    items: 3,
                    nav: false,
                    dots: true,
                    loop: true,
                } 
            }
        });
    });

 
    var owl_office = jQuery(".owl-carousel2");
    owl_office.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        dots: false,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        } 
    });

}(jQuery));

jQuery(document).ready(function ($) {

    jQuery('#view_all_offices').clickToggle(function () {
        jQuery(".address").removeClass("footer__offices--closed");
        jQuery(this).text("Show Less");
    },
    function () {
        jQuery(".address").addClass("footer__offices--closed");
        jQuery(this).text("View All offices");

    });

    var nextBtn = '<div class="slick-next slick-arrow"><i class="fa fa-angle-right"></i></div>',
        preBtn = '<div class="slick-prev slick-arrow"><i class="fa fa-angle-left"></i></div>';
    if (jQuery("ul.image-grid").length) {
        jQuery("ul.image-grid").slick({
            dots: !1,
            infinite: !1,
            slidesToShow: 6,
            slidesToScroll: 1,
            nextArrow: nextBtn,
            prevArrow: preBtn,
            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        })
    }

    /**************counter animation************/
    function animate(obj, initVal, lastVal, duration) {
        let startTime = null;

        //get the current timestamp and assign it to the currentTime variable
        let currentTime = Date.now();

        //pass the current timestamp to the step function
        const step = (currentTime) => {

            //if the start time is null, assign the current time to startTime
            if (!startTime) {
                startTime = currentTime;
            }

            //calculate the value to be used in calculating the number to be displayed
            const progress = Math.min((currentTime - startTime) / duration, 1);

            //calculate what to be displayed using the value gotten above
            obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

            //checking to make sure the counter does not exceed the last value (lastVal)
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                window.cancelAnimationFrame(window.requestAnimationFrame(step));
            }
        };
        //start animating
        window.requestAnimationFrame(step);
    }

    let text1 = document.getElementById('counter_1');
    let text2 = document.getElementById('counter_2');
    let text3 = document.getElementById('counter_3');
    let text4 = document.getElementById('counter_4');
    const load = () => {
        // console.log(text1);
        animate(text1, 0, 11, 7000);
        animate(text2, 0, 12, 7000);
        animate(text3, 0, 7, 7000);
        animate(text4, 0, 50, 7000);
    }
    let has_counter = document.getElementById('counter_1');
    if (has_counter) {
        load();
    }

    window.onscroll = function () { myFunction() };
    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }	

});
 
jQuery(document).ready(function ($) {
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));


    jQuery('.mobile-toggle').click(function () {
        jQuery('.responsive-menu').toggle();
    });


    jQuery(".kb_navbar ul.responsive-menu li a").click(function () {
        jQuery(".sub-menu").slideToggle("slow");
    });
});

(function ($) {
    $.fn.clickToggle = function (func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function () {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

jQuery(document).ready(function ($) {


    jQuery("form#pr-points-form input").on("click", function () {
        console.log(jQuery(this).parents(".form_group_container"));
        jQuery(this).parents(".form_group_container").next(".form_group_container").fadeIn("slow");
    });
    jQuery("form#pr-points-form input").on("keyup", function () {
        console.log($(this).parents(".form_group_container"));
        $(this).parents(".form_group_container").next(".form_group_container").fadeIn("slow");
    });
    jQuery("form#pr-points-form select").on("change", function () {
        console.log($(this).parents(".form_group_container"));
        jQuery(this).parents(".form_group_container").next(".form_group_container").fadeIn("slow");
    });

    var table_html = '';
    var total = 0;
    jQuery("form#pr-points-form").on("submit", function (e) {
        e.preventDefault();
        var data = jQuery('form#pr-points-form').serializeArray().reduce(function (obj, item) {
            if (item.name != 'email' && item.name != 'locality' && item.name != 'visaSubclass') {
                table_html += '<tr><td>' + item.name + '</td><td>' + item.value + '</td></tr>'
                obj[item.name] = item.value;
                total += parseInt(item.value);
            }

            return obj;

        }, {});

        table_html += '<tr><td><strong>Your total points</strong></td><td><strong>' + total + '</strong></td></tr>'
        //console.log(table_html);
        jQuery(".calculator__points-table").html(table_html);
        jQuery(".calculator__points-summary").fadeIn("slow");
        jQuery("#pr-points-form").fadeOut("slow");
    });
    jQuery(".cb-card button#reset-pr-calculator-btn").on("click", function (e) {
        jQuery("#pr-points-form").fadeIn("slow");
        jQuery("#pr-points-form")[0].reset();
        jQuery(".calculator__points-summary").fadeOut("slow");

        jQuery("form#pr-points-form .form_group_container").css("display", "none");
        jQuery("form#pr-points-form .form_group_container:nth-child(1)").css("display", "block")

    });


    var table_html = '';
    var total = 0;
    jQuery("form#bvp-form").on("submit", function (e) {
        e.preventDefault();
        var data = $('form#bvp-form').serializeArray().reduce(function (obj, item) {
            if (item.name != 'email' && item.name != 'locality') {
                table_html += '<tr><td>' + item.name + '</td><td>' + item.value + '</td></tr>'
                obj[item.name] = item.value;
                total += parseInt(item.value);
            }

            return obj;

        }, {});

        table_html += '<tr><td><strong>Your total points</strong></td><td><strong>' + total + '</strong></td></tr>'
        console.log(table_html);
        jQuery(".calculator__points-table").html(table_html);
        jQuery(".calculator__points-summary").fadeIn("slow");
        jQuery("#bvp-form").fadeOut("slow");
    });
    jQuery(".cb-card button#reset-bvp-calculator-btn").on("click", function (e) {
        jQuery("#bvp-form").fadeIn("slow");
        jQuery("#bvp-form")[0].reset();
        jQuery(".calculator__points-summary").fadeOut("slow");


    });

    var table_html = '';
    var total = 0;
    jQuery("form#partner-visa-form").on("submit", function (e) {
        e.preventDefault();
        var data = jQuery('form#partner-visa-form').serializeArray().reduce(function (obj, item) {
            console.log(item.name);
            if (item.name == 'australian_partner' || item.name == 'married_status' || item.name == 'living_together_how_long' || item.name == 'any_children') {

                obj[item.name] = item.value;
                total += parseInt(item.value);
            }

            return obj;

        }, {});

        table_html += ' <h3 class="visa_total">' + total + '% success rate.</h3><p class="mt-0">You have ' + total + '% success rate to get an Australian partner visa.</p>';
        console.log(table_html);
        jQuery(".calculator__points-table").html(table_html);
        jQuery(".calculator__points-summary").fadeIn("slow");
        jQuery("#partner-visa-form").fadeOut("slow");
    });
    jQuery(".cb-card button#reset-partner-calculator-btn").on("click", function (e) {
        jQuery("#partner-visa-form").fadeIn("slow");
        jQuery("#partner-visa-form")[0].reset();
        jQuery(".calculator__points-summary").fadeOut("slow");
    });

});

