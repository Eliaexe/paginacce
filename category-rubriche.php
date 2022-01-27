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


<?php qode_children_list(); ?>


    <section>
        <div class="container animated">
            <div class="row d-flex" data-masonry='{"percentPosition": true }'>
<?php
    // if the page visitor views is a category page
if (is_category())
{
$cur_cat = get_query_var('cat');
    if ($cur_cat) {?>
        <div class="col-6 col-md-4 col-xl-3 mb-4">
            <div class="card text-center">

        <?php $new_cats = wp_list_categories('echo=false&child_of=' . $cur_cat . '&depth=1&title_li=&&show_count=1&hide_empty=0');
        echo '<div class="card text-center">' . $new_cats . '</div>';
    }
}?> 
            </div>
        </div>
        </div>
    </div>
</section>

</main>
    
    <?php get_footer(); ?>
