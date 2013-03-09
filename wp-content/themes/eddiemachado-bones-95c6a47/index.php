<?php get_header(); ?>
<?php
// echo '<pre>';
// print_r(bones_get_the_author_posts_link());
// print_r(get_the_category_list(', '));
// echo '</pre>';
?>
		
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">

				    <div id="main" class="eightcol first clearfix" role="main">

				    	<div class="cover">~cover</div>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
						    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="thumb-300"><?php echo the_post_thumbnail('bones-thumb-300'); ?></a>

						    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="thumb-600"><?php echo the_post_thumbnail('bones-thumb-600'); ?></a>

							    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo the_title(); ?></a></h1>

                  				<p class="time"><?php the_time(get_option('date_format')); ?></p>
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							    <?php echo substr(get_the_content(), 0, 100) . ' ...'; ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">

								<a href="<?php the_permalink() ?>" class="button">Plus</a>

    							<p class="tags">

								<?php if (get_the_tags()) : ?>
									<?php foreach (get_the_tags() as $tag) : ?>

    								<a href="<?php echo home_url('tag/' . $tag->slug . '/'); ?>"><?php echo $tag->name; ?></a>

									<?php endforeach; ?>
								<?php endif; ?>

    							</p>

						    </footer> <!-- end article footer -->
						    
						    <?php comments_template(); // uncomment if you want to use them ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
