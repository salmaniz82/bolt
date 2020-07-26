<?php /* Template Name: Custom Blog ALL */ ?>

<?php get_header(); ?>


    <main class="content max-w-12xl mx-auto">

        <div class="title py-12 text-center blogPageTitle"><h1 class="font-circular text-bs-blue-light text-6xl">The Blog</h1>
            <div class="tw-no-widow max-w-6xl mx-auto sm:w-1/2"><p class="font-work-sans-lt text-sm">The home for our
                    latest thinking about social media, and how businesses that think like David can make the most of
                    it. We'll be posting a couple of new blogs every&nbsp;month.</p></div>
        </div>


        <div class="posts sm:flex sm:flex-wrap">

                    <?php

                    $args = array(
                        'post_type'      => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()) :
                            while($query->have_posts() ) :
                            $query->the_post();
                    ?>



                <div class="post my-4 sm:w-1/2 sm:flex sm:flex-col  sm:pr-2  lg:w-1/3 lg:px-4 xl:w-1/4">
                    <div class="img-wrapper h-48 w-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?=get_the_post_thumbnail_url()?>);"></div>
                    <div class="txt-wrapper bg-white text-black p-4 text-left text-lg leading-tight sm:flex-grow sm:flex sm:flex-col">
                        <div class="tw-no-widow mb-4 font-circular 2xl:text-xl"><p><?=get_the_title()?></p>
                        </div>
                        <div class="tw-no-widow work-sans-lt text-sm mb-4 sm:flex-grow"><p><?=get_the_excerpt()?></p></div>
                        <a href="<?php the_permalink()?>" class="btn border-bs-blue-light self-start hover:bg-bs-blue-light hover:text-white">
                            Read
                        </a>
                        <div class="meta mt-4 font-consolas text-xs">
                            <div class="tw-no-widow"><p>Written by the <?= get_the_author()?></p></div>
                            <div class="tw-no-widow"><p><?php the_date()?></p></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </main>

</div> <!-- APP -->


<?php get_footer(); ?>