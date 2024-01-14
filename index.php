<?php get_header(); ?>

<!-- <div class="spacer"></div> -->

<div class="mt-4 grid">
    <div class="col-85">
        <h1 class="text-0"><?php bloginfo('name'); ?></h1>
        <h2 style="font-weight:normal" class="text-3 text-black">Blog</h2>
    </div>
</div>

<main class="grid mb-4">

    <?php if (have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->

    <article class="mt-2 col-50">

        <a href="<?php the_permalink();?>" class="text-black">

            <p><?php echo date('r');?></p>
            <h3><?php the_title(); // display title of the post  ?></h3>

            <p class="text-black"><?php the_category(', '); ?></p>

            <?php the_post_thumbnail('image-small', array('class' => 'img-res mb-2','alt' => get_the_title())); // display featured image of the post  ?>

            <p><?php the_excerpt(); // display excerpt of the post ?></p>

        </a>

        <p class="text-black mb-4"><?php the_tags('(', ', ', ')'); ?></p>
        <hr>


    </article>


    <?php endwhile; // end of the loop dispaly page link if needed  ?>

    <div class="col-80 mb-4">
        <?php previous_posts_link( 'Newer posts' ); // link older posts ?>
        <?php next_posts_link( 'Older posts' ); // link newer posts ?>
    </div>

    <?php else : // if no result dispaly message ?>

    <div class="col-100">
        <?php esc_html_e('Sorry, no posts matched your criteria.', 'nextframe'); // dispaly no result message ?></div>

    <?php endif; // end of main if ?>



</main>

<?php get_footer(); ?>