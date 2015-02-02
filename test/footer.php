    

    <footer id="footer">
        <div class="container">
            <p>© 2014 Evolve Solar. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- </div> -->
</div><!--/row-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/skrollr.min.js"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/bxslider/jquery.bxslider.min.js"></script>
        
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bjqs-1.3.min.js"></script>
<script class="secret-source">
    jQuery(document).ready(function ($) {

        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;

        $(window).resize(function () {
            var slideCount = $('#slider ul li').length;
            var slideWidth = $('#slider ul li').width();
            var slideHeight = $('#slider ul li').height();
            var sliderUlWidth = slideCount * slideWidth;
            $('#slider').css({width: slideWidth, height: slideHeight});
            $('#slider ul').css({width: sliderUlWidth, marginLeft: -slideWidth});
        });

        // setInterval(
        //   function() {
        //     moveLeft();
        //   },
        // 3000);


        $('#slider').css({width: slideWidth, height: slideHeight});

        $('#slider ul').css({width: sliderUlWidth, marginLeft: -slideWidth});

        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: +slideWidth
            }, 500, function () {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        }
        ;

        function moveRight() {
            $('#slider ul').animate({
                left: -slideWidth
            }, 500, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        }
        ;

        $('a.control_prev').click(function (event) {
            event.preventDefault();
            moveLeft();
        });

        $('a.control_next').click(function (event) {
            event.preventDefault();
            moveRight();
        });

    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        // $(".navbar-default").sticky({topSpacing:0});
        $("#header").sticky({topSpacing: 0});
    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>




    


</body>
</html>