<?php get_header(); ?>

<main class="content max-w-12xl mx-auto">


    <?php

    if(have_posts()) :
    while(have_posts()) :
    the_post();

    ?>


        <div id="post-37" class="post bg-bs-white-snow">

        <div class="w-full h-104 my-12 bg-cover bg-center lg:mt-20" lazy="loaded" style="background-image: url(<?=the_post_thumbnail_url()?>);"></div>
        <div class="circular my-10 max-w-3xl mx-auto"><h1
                    class="circular text-bs-blue-light text-4xl text-center leading-tight lg:text-6xl"><?= get_the_title()?></h1></div>
        <div class="px-10 max-w-4xl mx-auto">
            <div class="consolas text-center my-10 text-sm text-bs-red-light">
                Written by <?=get_the_author()?> - <?php the_date()?>
            </div>

            <div class="post-content font-work-sans-lt">

                <?php the_content(); ?>

            </div>
            <div class="my-10">
                <div class="circular text-bs-blue-light text-3xl mb-2">Share placeholder</div>
            </div>
        </div>
    </div>

    <?php

    endwhile;
    endif;

    ?>


</main>

<?php get_footer(); ?>
