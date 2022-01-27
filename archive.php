    <?php get_header(); ?>
    

        <!--Sezioni-->
    <main>


    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <h1>Archivio</h1>
            </div>
        </div>
    </section>
<?php 
the_archive_title( '<h2 class="page-title">', '</h2>' ); 
the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
    <section>
        <div class="container animated">
            <div class="row d-flex" data-masonry='{"percentPosition": true }'>
            <?php if(have_posts()): ?>

                <?php while(have_posts()): the_post(); ?>
                    <div class="col-6 col-md-4 col-xl-3 mb-4">
                        <div class="card text-center">
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>">
                                            
                                
                            </a>    
                            <div>
                                <?php the_title('<h3>,</h3>'); ?>
                                
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-dark btn-sm">Continua a
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
    <script>


    <?php get_footer(); ?>
