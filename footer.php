<!-- Footer -->
<footer class="footer overlay section bg-dark">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- About -->
                    <div class="single-widget about">
                        <div class="logo">
                                <?php dynamic_sidebar('footer-logo') ?>
                        </div>

                        <?php dynamic_sidebar('footer-widget-1') ?>
                    </div>
                    <!--/ End About -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Useful Links -->
                    <div class="single-widget useful-links">
                        <?php dynamic_sidebar('footer-widget-2') ?>
                    </div>
                    <!--/ End Useful Links -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Latest News -->
                    <div class="single-widget latest-news">
                       <?php dynamic_sidebar('footer-widget-3') ?>
                    </div>
                    <!--/ End Latest News -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Newsletter -->
                    <div class="single-widget newsletter">
                        <?php dynamic_sidebar('footer-widget-4') ?>
                    </div>
                    <!--/ End Newsletter -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <?php dynamic_sidebar('footer-bottom') ?>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End Footer -->
<?php wp_footer(); ?>
</body>
</html>
