<?php 

/*
    Template Name: Custom Query
*/
get_header();
?>

<?php
$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
 
foreach( $mypages as $page ) {      
    $content = $page->wp_title();
    if ( ! $content ) // Check for empty page
        continue;
 
    $content = apply_filters( 'the_content', $content );
?>
    <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
    <div class="entry"><?php echo $content; ?></div>
<?php
    }   
?>

























<h1>Prima Custom Query</h1>
    <section class="p-2">
        <div class="container">
            <div class="row text-center">
<?php
$evidenza = new WP_Query( array( 'category_name' => 'cicli' ) );
if(is_category( 'cicli' )){


while($evidenza -> have_posts()){
    $evidenza -> the_post(); ?>
        <div class="container animated">
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
                                <h3><?php the_title(); ?></h3>
                                
                            </div>
                            <a href="<?php the_permalink() ?>" class="btn btn-outline-dark btn-sm">Continua a
                                Leggere</a>
                        </div>
                    </div>
                        
            </div>
        </div>
        <?php } ?>
<?php } ?>
            </div>
        </div>
    </section>
<?php 
global $post;
$child_pages_query_args = array(
    'post_type'   => 'page',
    'post_parent' => '93',
    'orderby'     => 'date DESC'
);
$child_pages = new WP_Query( $child_pages_query_args );
?>

<?php if ( $child_pages->have_posts() ) :  while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

<div class="col-lg-6">
<div class="featured-pwrap">  
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('home-pages-thumb'); } else { ?>
    <img class="attachment-home-pages-thumb" src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
    <?php } ?>
<h3><?php the_title(); ?></h3>
<a href="<?php the_permalink(); ?>" class="futured-more">Read more</a>
</div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
<h1>Custom Queries per pagina</h1>

<?php get_footer(); ?>