<?php get_header(); ?>

<div class="wrapper">

	<div class="container">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<?php if ( is_sticky() ) { ?>

			<article>	

				<h1><?php the_title(); ?></h1> 

		    <?php the_content(); ?>

		  </article>

		<?php } else { ?>

	    <article>

				<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail'); } ?></a>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt(); ?>

			</article>

		<?php } ?> 
			
		<?php endwhile; else: ?>

			<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

	</div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>