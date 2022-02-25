<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */

$airi_layout 	= airi_blog_layout();
$airi_read_more 		= get_theme_mod( 'read_more_text', __( 'Read more', 'airi' ) );
$airi_hide_thumb 	= get_theme_mod( 'index_hide_thumb' );
$airi_hide_date 		= get_theme_mod( 'index_hide_date' );
$airi_hide_cats 		= get_theme_mod( 'index_hide_cats' );
$airi_hide_author 	= get_theme_mod( 'index_hide_author' );
$airi_hide_comments 	= get_theme_mod( 'index_hide_comments' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-inner">
		<div class="flex">

			<div class="post-info <?php echo esc_attr( $airi_layout['item_inner_cols'] ); ?>">
				<header class="entry-header">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12">
                            <?php if ( $airi_hide_thumb == '' ) : ?>
                                <div class="<?php echo esc_attr( $airi_layout['item_inner_cols'] ); ?> image-loop-parent">
                                    <?php airi_post_thumbnail(); ?>
                                </div>
                            <?php endif; 
                             /*if ( $airi_hide_date == '' ) {
                                airi_posted_on();
                            }*/?>
                            
                        </div>
                        <div class="col-md-8 col-lg-8 col-12">
                        <?php
                            the_title( '<h2 class="entry-title title-each-post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                           if ( $airi_layout['type'] != 'layout-grid' && $airi_layout['type'] != 'layout-masonry' ) : ?>
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div><!-- .entry-content -->   
				            <?php endif; ?>
                            <?php if ( $airi_read_more != '' ) : ?>
                            <a class="read-more-link" href="<?php the_permalink(); ?>"><?php echo esc_html( "Seguir leyendo" ); ?><span class="gt">&gt;&gt;</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
					
					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php
							if ( $airi_hide_cats == '' ) {
							echo '<span>';
								airi_first_category();
							echo '</span>';
							}
							if ( $airi_layout['type'] != 'layout-grid' && $airi_layout['type'] != 'layout-masonry' && $airi_hide_author == '' ) {
								airi_posted_by();
							}
							if ( $airi_hide_comments == '' ) {
								airi_get_comments_number();
							}
						?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->

			</div>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
