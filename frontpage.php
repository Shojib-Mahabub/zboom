<?php get_header(); ?>
<?php
/*
 * Template Name: Home
 */
?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
                    <?php 
                        $slideitem = new WP_Query(
                            array('post_type'=>'slider')
                        );
                    ?>    
				    <?php while($slideitem->have_posts()) : $slideitem->the_post(); ?>	
                        <li><?php the_post_thumbnail(); ?></li>
				    <?php endwhile; ?>
                </ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			
            <?php
                $blockitem = new WP_Query(array(
                    'post_type'=>'highlights',
                    'post_per_page'=>6
                ));
            ?>
            <?php while($blockitem->have_posts()) : $blockitem->the_post(); ?>
                    <div class="col-1-3">
                        <div class="wrap-col box">
                            <h2><?php the_title(); ?></h2>
                            <p><?php read_more(12); ?></p>
                            <div class="more"><a href="<?php the_permalink(); ?>">Read More</a></div>
                        </div>
                    </div>
			<?php endwhile; ?>
            
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
                    <?php
                        $latestblog = new WP_Query(array(
                            'post_type'=>'post',
                            'post_per_page'=>4
                        ));
                    
                    ?>
                    <?php while($latestblog->have_posts()) : $latestblog->the_post(); ?>
                        <article class="row">
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <div class="col-2-3">
                                <div class="wrap-col">
                                    <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                                    <div class="info">By <?php the_author(); ?> on <?php the_time('M d, Y'); ?> with <?php comments_popup_link();?></div>
                                    <p><?php read_more(12); ?><a href="<?php the_permalink();?>">..Read More</a></p>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>