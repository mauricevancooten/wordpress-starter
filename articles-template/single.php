<?php get_header(); ?>

<div id="wrapper">

        <div id="container">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                			
                        <article>
                	       <h2><?php the_title(); ?></h2>
                		
                                <?php the_content(); ?>
                	</article>	

                <?php endwhile; else: ?>

                	<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>

                <?php endif; ?>

                <ul> 
                        <!--Twitter-->
                        <li><a class="button" target="_blank" href="https://twitter.com/intent/tweet?&amp;url=<?php the_permalink(); ?>">Tweet</a></li>

                        <!--Facebook-->
                        <li><a class="button" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">Share</a></li>

                        <!--Google Plus-->
                        <li><a class="button" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Share</a></li>

                        <!--LinkedIn-->
                        <li><a class="button" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>">Share</a></li>
                </ul>

        </div> <!-- #container -->

</div> <!-- #wrapper -->

<?php get_footer(); ?>