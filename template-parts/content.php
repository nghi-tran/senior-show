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

	<div class="entry-content">
            <?php
            $bioHead = get_field('bio_head');
            if( $bioHead ): ?>
            
            <div id="bioHead">
                
                <div class="section-grid"> <!--Issue Section-->
                    <div class="exhibit-image">
                       <?php 
                        $image = $bioHead['exhibit_image'];
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                        ?>
                    </div>
                   
                    <div class="exhibit-content">
                        <h1><?php echo $bioHead['social_issue']; ?></h1>
                        
                        <h3><?php echo $bioHead['issue_catergory']; ?></h3>
                        
                        <p><?php echo $bioHead['issue_description']; ?></p>
                    </div>
                </div>
                
               <div class="section-grid"><!--Designer Section-->
                    
                    <div class="designer-image">
                       <?php 
                        $image = $bioHead['headshot'];
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                        ?>
                    </div>
                    
                    <div class="designer-content">
                        <h1><?php echo $bioHead['designer_name']; ?></h1>
                        
                        <?php 
                        $link = $bioHead['designers_website'];
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        
                        <a class="website-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        
                        <?php endif; ?>
                        
                        <p><?php echo $bioHead['designer_description']; ?></p>
                    </div>
                   
                </div>
            
            </div>
        <?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php seniorshow_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
