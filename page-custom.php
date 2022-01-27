<?php
/* 
Template Name: Non Toccare
*/
?>

    <?php get_header(); ?>
    

        <!--Sezioni-->
<main>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
    <section class="p-2">
        <div class="container">
            <div class="row text-center">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <!-- Breadcrup -->
    <div class="col">
    <?php 
    $parentPage = wp_get_post_parent_id(get_the_id());
    if($parentPage){ ?>
        <p>Torna a:<a href="<?php echo get_permalink($parentPage); ?>"><?php echo get_the_title($parentPage); ?></p> 
        <span><p>Sei in:<?php the_title(); ?></p></a></span>
    <?php } ?>

    </div>
    <?php   $pages = get_pages(); 
    foreach ($pages as $page) {
        echo $page->post_title();
    }
    ?>

    <section>
        <div class="container animated mt-5">
            <div class="row d-flex" data-masonry='{"percentPosition": true }'>
                    <div class="col-6 col-md-4 col-xl-3 mb-4">
                        <div class="card text-center">
                            <a href="<?php the_permalink() ?>">
                                            <!-- Immagine Articolo -->
                                <?php if(has_post_thumbnail()): ?>  
                                    <div class="m-1"><?php the_post_thumbnail('thumbnail') ?></div>
                                <?php endif; ?>
                            </a>    
                            <div>
                                <!--<h3 class="ctsize"><?php the_title(); ?></h3>-->
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-dark btn-sm">Continua a
                                Leggere</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php echo wpautop('ops.. non ho trovato nulla');?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

    <?php get_footer(); ?>
