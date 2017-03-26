<?php get_header(); ?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
                    
                <?php while(have_posts()) : the_post(); ?>    
                    <article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y | g:i a'); ?> with <?php comments_popup_link(); ?></div>
                        <p><?php read_more(30); ?>...<a href="<?php the_permalink(); ?>">Read More</a></p>
					</article>
                <?php endwhile; ?>
					
                    
                    
                    
                    
					<ul id="pagi">
						<?php the_posts_pagination(array(
                            'show_all'=>False,
                            'prev_text'=>'Older',
                            'next_text'=>'Newer',
                            'screen_reader_text'=>' ',
                            'before_page_number'=>'<b>',
                            'after_page_number'=>'</b>'
                        
                            ));
                        ?>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>