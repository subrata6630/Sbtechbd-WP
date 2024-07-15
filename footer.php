<footer id="footer" class="row fix">
    <div class="wrapper ">
        <p>test</p>
    </div>
    <div class="wrapper">
        <p class="alignleft">&copy; <?php bloginfo('name'); ?> <?php echo esc_attr(date('Y')); ?></p>
        <p class="alignright">
            <a
                href="<?php echo esc_url(__('https://wordpress.org/', 'sbtechbd')); ?>"><?php printf(__('Proudly Powered by %s', 'sbtechbd'), 'WordPress'); ?></a>
            <span class="sep"> &#124; </span>
            <a
                href="<?php echo esc_url(__('https://www.sbtechbd.xyz/', 'Sbtechbd ')); ?>"><?php printf(__('Theme: %s', 'sbtechbd'), 'Sbtechbd Technologies'); ?></a>
        </p>
    </div> <!-- End Main Wrapper Here -->
</footer> <!-- End footer -->
<?php wp_footer(); ?>
</body>

</html>