<article id="post-<?php the_ID(); ?>" <?php post_class('main-post'); ?>>
    <div class="blank-doc">
        <h1><?php _e('No Posts found', 'sbtechbd'); ?></h1>
        <p><?php _e('No posts were found on your request. Sorry for inconvenience', 'sbtechbd'); ?></p>
        <?php get_search_form(); ?>
    </div>
    <!-- End article here -->
</article> <!-- End article -->