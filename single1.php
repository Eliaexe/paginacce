    <?php get_header(); ?>


    <main>
        <!--Header-->
        <header class="head-banner text-center text-dark mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-10 mx-auto">
                        <h1 class="display-4 text-center"><?php the_title(); ?></h1>
                        <figure>
                            <img> <?php the_post_thumbnail('large'); ?>
                        </figure>
                    </div>
                </div>
            </div>
        </header>

        <!--Articolo-->
        <div class="container">
            <div class="row">
                <article class="col-10 mx-auto">
                    <p><?php the_time('d F, Y'); ?></p>
                    <p style="text-align: justify;">
                        <?php the_content(); ?>
                    </p>

                    <!--Avatar-->
                    <div>
                        <div class="container d-flex justify-content-end ">
                            <button type="button" class="btn bgbott">
                                <p><?php the_author(); ?></p>
                            </button>
                        </div>
                    </div>

                    <div>
                        <div class="container d-flex justify-content-end ">
                                <p>Catalogato come: <?php the_category(','); ?></p>
                        </div>
                    </div>

<nav class="row">
    <ul class="list-unstyled pagination pagination-md my-5 justify-content-between">
        <li>Precedente: <?php previous_post_link(); ?></li>
        <li>Successivo: <?php next_post_link(); ?></li>
    </ul>
</nav>

                </article>
            </div>
        </div>
        <hr>
    </main>
    <script>
                // When the user scrolls the page, execute myFunction 
        window.onscroll = function () { myFunction() };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
    <?php get_footer(); ?>
