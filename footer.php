<?php $shortname = "pixel_theme"; ?>

<footer class="footer-outer">
    <div class="header_bottom">
        <div class="container headercontainer">
            <div class="full_footer_cont">
                <footer class="footer-inner footer-button">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pull-up-hand.jpg" alt="contact"/></a>
                </footer>
                    <div class="footer-contact">
                        <?php echo do_shortcode( '[contact-form-7 id="111" title="Kontakt"]' ); ?>
                    </div>
                    <!--© 2017 All Rights Reserved.<br>
    Developed by <a href="http://chooo.media" target="_blank">CHOOOMEDIA</a>-->
            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
        $(".footer-button").on('click touch', function () {
            var minHeight = $(".footer-contact").css('min-height');
            $(".footer-contact").css('min-height',0).slideToggle("slow", function() {
                $(".footer-contact").css('min-height', minHeight);
            });
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>