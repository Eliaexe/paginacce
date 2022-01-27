<?php 
/*
    Template Name: Categptoe Personalizzate
*/
?>
<?php get_header(); ?>

<h1><?php the_title();?></h1>
<div>

<?php   
//custum query
$catEvidenza = new WP_Query( array( 
    'category_name' => 'podcast'
));?>
    <div class="container animated">
        <div class="row d-flex" data-masonry='{"percentPosition": true }'>
    <?php
    // Loop di wp
    while($catEvidenza -> have_posts()){
        $catEvidenza -> the_post();
    ?>
            <div class="col-6 col-md-4 col-xl-3 mb-4">
                <div class="card text-center">
                    <a href="<?php the_permalink() ?>">
                                    <!-- Immagine Articolo -->
                        <?php if(has_post_thumbnail()): ?>  
                            <div class="m-1"><?php the_post_thumbnail('thumbnail') ?></div>
                        <?php endif; ?>
                    </a>
            <div>
                <h5> <a href="<?php the_permalink();?>"><?php the_title();?></a> </h5>
            </div>
                </div>
            </div>
        </div>
    </div>
<?php }
    get_footer(); ?>