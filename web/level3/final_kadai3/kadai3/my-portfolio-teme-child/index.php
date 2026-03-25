<?php get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h2 class="fade-section title"><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<button id="back-to-top">トップに戻る</button>

<?php get_footer(); ?>