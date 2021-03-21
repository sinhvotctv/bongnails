    <script src="./public/js/jquery.min.js" type="text/javascript"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="./public/js/revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->	
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="./public/js/revolution/initialize.js"></script>

    <script src="./public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.isotope.min.js"></script>
    <script src="./public/js/isotope-initialize.js"></script>
    <script src="./public/js/enscroll-0.5.2.min.js"></script>
    <!-- <script src="./public/js/jquery.poptrox.min.js"></script> -->
    <script type="text/javascript" src="./public/js/jquery.scrolly.js"></script>
    <script src="./public/js/script.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery(window).load(function() {
            /* ============ Variety Carousel ================*/
        $('.vareity-carousel').owlCarousel({
          autoplay:false,
          loop:false,
          dots:false,
          nav:false,
          margin:0,
          mouseDrag:false,
          singleItem:true,
          items:1,
          autoHeight:true,
          URLhashListener:true,
          startPosition: 'URLHash',
          animateIn:"fadeIn",
          animateOut:"fadeOut"							
        });				


            /* ============ Blog Carousel ================*/
        $('.lemon-blog-carousel').owlCarousel({
          autoplay:true,
          loop:true,
          dots:false,
          nav:true,
          margin:0,
          mouseDrag:true,
          singleItem:true,
          items:1,
          autoHeight:true,
          animateIn:"fadeIn",
          animateOut:"fadeOut"							
        });				

            /* ============ Reviews Carousel ================*/
        $('.lemon-reviews-carousel').owlCarousel({
          autoplay:true,
          loop:true,
          dots:false,
          nav:true,
          margin:0,
          mouseDrag:true,
          singleItem:true,
          items:1,
          autoHeight:true,
          animateIn:"fadeIn",
          animateOut:"fadeOut"							
        });				

            /* ============ Logos Carousel ================*/
        $('.logos-carousel').owlCarousel({
          autoplay:true,
          loop:true,
          dots:false,
          nav:true,
          margin:30,
          mouseDrag:true,
          autoHeight:true,
          items:5,
          responsive:{
            1200:{items:5},
            980:{items:3},
            600:{items:3},
            0:{items:2}
          }
        });				


      });
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=1129778070732512&autoLogAppEvents=1" nonce="xeOlMWLS"></script>
    <script src="./public/js/utils/facebook-chat.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOut9a8z68gJZSm4SNiKB-HT8nZ-uPy2o" defer></script>
    <script src="./public/js/index.js" type="module"></script>   
</body>
</html>