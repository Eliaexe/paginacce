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


<?php
    // if the page visitor views is a category page
if (is_category())
{
$cur_cat = get_query_var('cat');
    if ($cur_cat) 
    {
        $new_cats = wp_list_categories('echo=false&child_of=' . $cur_cat . '&depth=1&title_li=&&show_count=1&hide_empty=0');
        echo '<ul>' . $new_cats . '</ul>';
    }
}
?>


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
