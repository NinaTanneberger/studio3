
<?php 
if ( have_posts() ) {
	while ( have_posts() ):
		the_post(); ?>
		<div class="row">
			<div class="col-sm-6">
					<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-sm-6">
				<?php the_excerpt(); ?>
			</div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>