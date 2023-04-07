<?php get_header(); ?>
<main id="main">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-detail">
                        <h2><?php the_title() ?></h2>
                        <p>Posted by <?php the_author() ?> on <?= get_the_date() ?></p>
                        <div class="post-content">
                            <?php the_content() ?>
                        </div>
                    </div>
                    <h2 class="post-gallery-title">Gallery</h2>
                    <div class="post-gallery">
                        <div class="post-gallery-item">
                            <img src=" <?= get_stylesheet_directory_uri() ?>/images/1.jpg" alt="1.jpg">
                        </div>
                        <div class="post-gallery-item">
                            <img src=" <?= get_stylesheet_directory_uri() ?>/images/2.jpg" alt="2.jpg">
                        </div>
                        <div class="post-gallery-item">
                            <img src=" <?= get_stylesheet_directory_uri() ?>/images/3.jpg" alt="3.jpg">
                        </div>
                        <div class="post-gallery-item">
                            <img src=" <?= get_stylesheet_directory_uri() ?>/images/4.jpg" alt="4.jpg">
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</main>
<?php get_footer(); ?>