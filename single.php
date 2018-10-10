<?php get_header() ?>

<!-- article Grid -->
<!-- article title -->


<div class="products__grid--category">
	<div class="products__grid--category-menu">
		<h3 class="products__grid--title"><?php the_title() ?></h3>
	</div>
</div>

<!-- article -->
<!-- blog -->
<div class="article container-fluid col-md-12">
	<div class=" col-md-9">
		<div class="article__header">

			<div class="entry-content">
				<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<div class="entry-content-header">
							<h1 class="entry-title">
								<?php the_title() ?>
								<?php the_excerpt() ?>
							</h1>
							<time datetime="<?php the_time('Y-m-d') ?>">
								<span><i class="fas fa-calendar-alt"></i></span>
								<?php the_time('d \d\e F \d\e Y') ?>
							</time>
						</div>
					</br>

					<?php the_content() ?>




				<?php } ?>
			<?php } else { ?>
			<?php } wp_reset_query(); ?>

			<hr>

		</div> <!-- entry content -->
	</div> <!-- carticle header -->
</div> <!-- col-md-9-->

<!-- columna publicidad  -->

<?php get_template_part('_includes/iOS', 'sidebarblog') ?>

</div> <!-- col-md-12 -->


<?php get_footer()?>
</div><!-- Main Right -->
<?php get_sidebar()?>
</body>
</html>