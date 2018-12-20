<?php get_header(); ?>
    <div id="main-wrapper">
        <main>

        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>"></h2>
                    <?php the_title() ?>
                    <?php the_content() ?>
                <?php endwhile;
            else :
                echo '<p>There are no posts!</p>';
            endif;
        ?>

        </main>
    </div>
<?php get_footer(); ?>