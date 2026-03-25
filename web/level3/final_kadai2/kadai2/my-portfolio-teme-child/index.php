<?php get_header(); ?>
<main>

    <button class="dark-mode-toggle">ダークモード切替</button>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <button class="details-button">詳細を見る</button>
            <div class="details-content" style="display:none;"><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<button id="back-to-top">トップに戻る</button>

<?php get_footer(); ?>