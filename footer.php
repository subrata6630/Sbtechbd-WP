<footer id="footer" class="row fix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="wrapper">
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wrapper">
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wrapper">
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="wrapper">
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- End row -->
        <div id="copyright">
            <div class="row">
                <div class="col-md-3">
                    <div class="wrapper">
                        <p>Copyright &copy; <?php bloginfo('name'); ?> <?php echo esc_attr(date('Y')); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="wrapper">
                        <p>
                            <a
                                href="<?php echo esc_url(__('https://wordpress.org/', 'sbtechbd')); ?>"><?php printf(__('Powered by %s', 'sbtechbd'), 'WordPress'); ?></a>
                            <span class="sep"> &#124; </span>
                            <a
                                href="<?php echo esc_url(__('https://www.sbtechbd.xyz/', 'sbtechbd')); ?>"><?php printf(__('Theme: %s', 'sbtechbd'), 'Sbtechbd Technologies'); ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener noreferrer"><i
                                    class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/yourhandle" target="_blank" rel="noopener noreferrer"><i
                                    class="fab fa-twitter-square"></i></a>
                            <a href="https://www.youtube.com/user/yourchannel" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-youtube-square"></i></a>
                            <a href="https://www.linkedin.com/in/yourprofile" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/yourusername" target="_blank"
                                rel="noopener noreferrer"><i class="fab fa-instagram-square"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End container-fluid -->
    <div id="back-to-top">
        <a href="#top"><i class="fas fa-arrow-up"></i></a>
    </div>
</footer> <!-- End footer -->
<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    $('#back-to-top a').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
</script>

</body>

</html>