<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to sbtechbd_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage sbtechbd
 * @since sbtechbd 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
        <?php
				$comments_number = get_comments_number();
				
				if ( '1' === $comments_number ) {
				  	/* translators: %s: post title */
				  	printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'sbtechbd' ), get_the_title() );
				} else {
				  printf(
				    /* translators: 1: number of comments, 2: post title */
				    _nx(
				      '%1$s Reply to &ldquo;%2$s&rdquo;',
				      '%1$s Replies to &ldquo;%2$s&rdquo;',
				      $comments_number,
				      'comments title',
				      'sbtechbd'
				    ),
				    number_format_i18n( $comments_number ),
				    get_the_title()
				  );
				}
			?>
    </h2>

    <ul class="commentlist col-md-12">
        <?php wp_list_comments( array( 'callback' => 'sbtechbd_comment', 'style' => 'ul' ) ); ?>
    </ul><!-- .commentlist -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-below" class="navigation" role="navigation">
        <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'sbtechbd' ); ?></h1>
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'sbtechbd' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'sbtechbd' ) ); ?></div>
    </nav>
    <?php endif; // check for comment navigation ?>

    <?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="nocomments"><?php _e( 'Comments are closed.' , 'sbtechbd' ); ?></p>
    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>

</div><!-- #comments .comments-area -->