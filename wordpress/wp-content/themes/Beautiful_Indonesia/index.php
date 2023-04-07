<?php
$query = new WP_Query(array('post_type' => 'post', 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => 4,  'category_name' => 'updates',));
?>

<?php get_header(); ?>
<main>
    <div class="container">
        <div class="hero">
            <div class="hero-wrapper">
                <div class="hero-detail">
                    <h1>Travel, enjoy
                        and a new life</h1>
                    <p>Built Wicket longer admire do barton vanity itself do in it.
                        Preferred to sportsmen it engrossed listerning</p>
                    <a href="<?= get_site_url() ?>/places">Lets Go</a>
                </div>
                <div class="hero-img">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/hero.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about">
            <h2>About</h2>
            <p>The pair has made a name for themselves taking photos around the world, and they’ve created a nice compilation of their journeys.
                And while the photos are likely what initially draw readers in, what sets this site apart from others is the personal perspective. You can tell that this site was made out of a passion for traveling.</p>
        </div>
        <div class="post-place">
            <h2 class="post-place-title">Place</h2>
            <div class="post-place-list">
                <?php $i = 1; ?>
                <?php $count_visited = 68; ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="post-place-item <?= $i % 2 == 0 ? 'even' : '' ?>">
                            <a href="<?= the_permalink() ?>" class="post-place-thumbnail">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?> Image">
                            </a>
                            <div class="post-place-detail">
                                <h4><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h4>
                                <p>Total <b><?= $count_visited ?></b> Visited</p>
                            </div>
                        </div>
                        <?php $i++ ?>
                        <?php $count_visited -= 7  ?>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>