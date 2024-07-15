<?php get_header(); ?>

<div id="main-content" class="row fix">
    <div class="wrapper">
        <div id="content" class="floatleft">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
            <!-- End main content if have any -->
            <?php endwhile; ?>

            <ul class="pagination">
                <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Prev', 'sbtechbd' ),
                        'next_text' => __( 'Next', 'sbtechbd' ),
                        )
                    );
                ?>
            </ul>
            <!-- End pagination -->

            <?php else: ?>
            <?php get_template_part('content', 'none'); ?>
            <!-- End Blank content if not have any post -->

            <?php endif; ?>
        </div> <!-- End content -->
        <?php get_sidebar(); ?>
    </div> <!-- End wrapper -->
</div> <!-- End Main content -->

<?php get_footer(); ?>