<a class="resource" title="<?php the_title_attribute(); ?>" href="<?php echo get_permalink() ?>">
	<div class="resource__card">
		<div class="resource__image" style="background-image: url(<?php the_post_thumbnail_url('small'); ?>)" alt="<?php the_title_attribute(); ?>">&nbsp;</div>
		<div class="resource__details">
			<div class="resource__category">
				<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
			</div>
			<h3 class="resource__title"><?php the_title(); ?></h3>
		</div>
	</div>
</a>
<!-- #post-<?php the_ID(); ?> -->