<?php get_header(); ?>

<div class="wrapper">

    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                			
            <article>

                <h2><?php the_title(); ?></h2>

                <small><?php the_date(); ?></small>

                <p>Article by, <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>

                <p><?php the_author_meta( 'description' ); ?></p>
                               
                <?php the_content(); ?> 

            </article>

        <?php endwhile; else: ?>

            <p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p> 

        <?php endif; ?> 

        <ul>              
            <li><a target="_blank" href="https://twitter.com/intent/tweet?&amp;url=<?php the_permalink(); ?>">Tweet</a></li>
            <li><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">Share</a></li>
            <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Share</a></li>
            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>">Share</a></li>
        </ul>

        <?php dynamic_sidebar('Aside'); ?> 

        <h3>Comments</h3>

        <?php comments_template(); ?>

    </div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>