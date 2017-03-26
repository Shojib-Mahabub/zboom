<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<div class="col-1-4">
				<div class="wrap-col">
					<?php dynamic_sidebar('footer-widgets'); ?>
					<?php dynamic_sidebar('tag-widgets'); ?>
				</div>
			</div>
			
		</div>
		
		<div class="row copyright">
			<?php
                global $zboom;
                    echo $zboom[copyrighttext];
            ?>
		</div>
	</div>
    <?php wp_footer(); ?>
</footer>

</body></html>