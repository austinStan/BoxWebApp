<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

<script>
$(document).ready(function() {
 
    $("#owl-demo").owlCarousel({

        autoplay: 3000, //Set AutoPlay to 3 seconds
        // loop:true,
        // items : 4,
        // itemsDesktop : [1199,3],
        // itemsDesktopSmall : [979,3],
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
                loop:true
            },
            600:{
                items:2,
                nav:false,
                loop:true
            },
            1000:{
                items:3,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                nav:true,
                loop:true
            }
        }
    });
   
  });
/*  megamenu start script */
  $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        }); 
         
            $(document).ready(function() {
            $(".megamenu").on("click", function(e) {
                e.stopPropagation();
            });
    });
/*  megamenu end script */





</script>