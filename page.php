    <?php get_header(); ?>
        <!--Sezioni-->
<main>
    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <h1><?php single_cat_title(); ?></h1>
            </div>
        </div>
    </section>
    <ul>
<?php wp_list_categories('exclude=22&title_li='); ?>
</ul>
    <section>
        <div class="container animated">
            <div class="row d-flex" data-masonry='{"percentPosition": true }'>
            <?php if(have_posts()): ?>

                <?php while(have_posts()): the_post(); ?>
                    <div class="col-6 col-md-4 col-xl-3 mb-4">
                        <div class="card text-center">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>    
                            <div>
                                <?php the_title(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark btn-sm">Continua a
                                Leggere</a>
                        </div>
                    </div>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <?php echo wpautop('ops.. non ho trovato nulla');?>
                        <?php endif; ?>
            </div>
        </div>
        
    </section>
</main>
    
    <?php get_footer(); ?>
