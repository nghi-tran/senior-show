<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SeniorShow
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?>
        
	</div><!-- .entry-header -->

	<div class="entry-content">
        <?php
        $bioHead = get_field('bio_head');
        if( $bioHead ): ?>
            <div id="bioHead">
            <?php 
                $image = $bioHead['headshot'];
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>
            <h2><?php echo $bioHead['social_issue']; ?></h2>
            
            <?php 
            $link = $bioHead['designers_website'];
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            
            <p><?php echo $bioHead['designers_email']; ?></p>
            
            <?php 
            $link = $bioHead['social_'];
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            
            
            </div>
        <?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php seniorshow_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
