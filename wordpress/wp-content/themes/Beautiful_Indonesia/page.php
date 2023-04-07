<?php get_header(); ?>
<main id="main">
    <div class="container">
        <?php if (get_the_title() == "Contact") : ?>
            <div class="contact">
                <h1 class="contact-title">Contact</h1>
                <form action="#" method="get">
                    <input type="text" class="contact-input" name="name" placeholder="Your Name">
                    <input type="text" class="contact-input" name="email" placeholder="Email ...">
                    <textarea class="contact-text" name="message" cols="30" rows="10" placeholder="Type Message ..."></textarea>
                    <div class="contact-btn">
                        <button class="contact-btn-send">Send</button>
                        <button class="contact-btn-clear">Clear</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
        <?php if (get_the_title() == "Places") : ?>
            <?php
            $query = new WP_Query(array('post_type' => 'post', 'order' => 'DESC', 'post_status' => 'publish',  'category_name' => 'updates',));
            ?>
            <div class="place">
                <h1 class="place-title">Place</h1>
                <div class="place-list">
                    <?php $i = 1; ?>
                    <?php $count_visited = 68; ?>
                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="place-item <?= $i % 2 == 0 ? 'even' : '' ?>">
                                <a href="<?= the_permalink() ?>" class="place-thumbnail">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?> Image">
                                </a>
                                <div class="place-detail">
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
        <?php endif; ?>
        <?php if (get_the_title() == "Articles") : ?>
            <?php
            $query = new WP_Query(array('post_type' => 'post', 'order' => 'DESC', 'post_status' => 'publish', 'category_name' => 'travelling-tips'));
            ?>
            <div class="article">
                <h1 class="article-title">Articles</h1>
                <div class="article-list">
                    <?php $i = 1; ?>
                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="article-item">
                                <a href="<?= the_permalink() ?>" class="article-thumbnail">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title() ?> Image">
                                </a>
                                <div class="article-detail">
                                    <h4><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h4>
                                    <p>Posted by <?php the_author() ?> on <?= get_the_date() ?></p>
                                </div>
                            </div>
                            <?php $i++ ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>