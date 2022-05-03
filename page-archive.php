<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div id="primary" class="site-content">
    <div id="content" role="main">

        <div class="social-issues">

            <div class="social-issues__left">
                <h1>Social Issues</h1>
                <p>The list below shows each designer and the social issue they have researched over the past year. Click on the name to learn more about their work.</p>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="social-issues__right">

                <div class="searchbar">
                    <input id="searchbar" onkeyup="search_listedissues()" type="text" name="search" placeholder="Search Name..">
                </div>

                <?php
				$cat_args=array(
					'orderby' => 'name',
					'order' => 'ASC'
 				);
				$categories=get_categories($cat_args);
				foreach($categories as $category) {
  				$args=array(
    				'showposts' => -1,
    				'category__in' => array($category->term_id),
  				);
  				$posts=get_posts($args);
		      if ($posts) {
						if ($category->term_id != 1) : ?>
                <?php
								$cat_title_id = (str_replace(' ', '-', strtolower($category->name)));
								$cat_list_id = $cat_title_id . "-list";
							?>
                <div class="social-issues__container">
                    <div id="<?php echo $cat_title_id; ?>" class="title-container">
                        <?php $category_icon = get_field('category_icon', $category->taxonomy . '_' . $category->term_id); ?>
                        <?php if( $category_icon ): ?>
                        <img src="<?php echo $category_icon; ?>" class="social-icon" />
                        <?php endif; ?>
                        <h1><?php echo $category->name ;?></h1>
                    </div>
                    <div class="social-issues__names">
                        <ul id="<?php echo $cat_list_id; ?>" class="list">
                            <?php
							       foreach($posts as $post) :
						          setup_postdata($post);
											$bio = get_field('bio_head');?>
                            <li class="listedissues">
                                <a href="<?php the_permalink() ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <p><?php echo $bio['designer_name']; ?> </p>
                            </li>
                            <?php endforeach; ?>
                            <!-- foreach($posts -->
                        </ul>
                    </div>
                </div>
                <?php
				    endif; // if not uncategorized
      		        } // if ($posts
                    } // foreach($categories
                ?>
            </div><!-- .entry-content -->
        </div>

        <!--social-issues__right -->
        <?php endwhile; // end of the loop. ?>
    </div>

    <!--ends social_issue-->
</div><!-- #content -->
</div><!-- #primary -->
<script>
    // ------------
    // search function for social issues
    // ------------

    function search_listedissues() {
        let input = document.getElementById('searchbar').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('listedissues');
        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "list-item";
            }
        }
    }
    //  jQuery(document).keypress(function(event){
    //  		if(jQuery('.list').children(':visible').length == 0) {
    //  		   jQuery('#environment').hide();
    //  		}
    // });
    //  jQuery(document).keypress(function(event){
    //  		jQuery('.list').each(function() {
    // 			if(jQuery(this).children(':visible').length == 0) {
    // 		   jQuery(this).parent().siblings(".title-container").hide();
    // 		 } else {
    // 			 jQuery(this).parent().siblings(".title-container").show();
    // 		 }
    // 		});
    // });
    jQuery('#searchbar').on('input', function(event) {
        jQuery('.list').each(function() {
            if (jQuery(this).children(':visible').length == 0) {
                jQuery(this).parent().siblings(".title-container").hide();
            } else {
                jQuery(this).parent().siblings(".title-container").show();
            }
        });
    });
    Array.from(document.querySelectorAll('social-issues__container'), function(elem) {
        elem.addEventListener('click', function hideContent(e) {
            e.currentTarget.nextElementSibling.classList.toggle('hidden');
        });
    });
    Array.from(document.querySelectorAll('.video-overlay .close'), function(elem) {
        elem.addEventListener('click', function hideContent(e) {
            e.currentTarget.parentElement.classList.toggle('hidden');
            var vid = e.currentTarget.nextElementSibling;
            var clone = vid.cloneNode(true);
            vid.remove();
            e.currentTarget.after(clone);
        });
    });
    Array.from(document.querySelectorAll('.video-link-wrap'), function(elem) {
        elem.addEventListener('click', function hideContent(e) {
            e.currentTarget.nextElementSibling.classList.toggle('hidden');
        });
    });
    Array.from(document.querySelectorAll('.video-overlay .close'), function(elem) {
        elem.addEventListener('click', function hideContent(e) {
            e.currentTarget.parentElement.classList.toggle('hidden');
            var vid = e.currentTarget.nextElementSibling;
            var clone = vid.cloneNode(true);
            vid.remove();
            e.currentTarget.after(clone);
        });
    });
    // ------------
    // END search function for social issues
    // ------------
</script>
<?php get_footer(); ?>
