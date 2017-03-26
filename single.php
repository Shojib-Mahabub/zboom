<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    
                    <?php while(have_posts()) : the_post(); ?>
                        <article>
                            <?php the_post_thumbnail(); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y | g:i a')?> with <?php comments_popup_link(); ?></div>
                            <?php the_content(); ?>
                            <br/>
                            <br/>
                            <?php comments_template(); ?>
                        </article>
                    <?php endwhile; ?>
                    
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>