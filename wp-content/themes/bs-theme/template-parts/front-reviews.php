<div class="section fp-noscroll" data-anchor="reviews">

    <?php

    $args = array(
        'post_type' => 'review',
        'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) {
        $query->the_post(); ?>


        <div class="slide">
            <div class="review px-10 lg:px-0 lg:max-w-2xl lg:mx-auto xl:max-w-5xl">
                <div class="tw-no-widow"><p
                        class="font-circular text-white mb-6  text-xl sm:text-3xl 2xl:text-4xl"><?= '"' . get_the_content() . '"' ?></p>
                </div>
                <div class="tw-no-widow"><p
                        class="works-sans-lt font-bold text-sm"><?= get_field('author') ?></p>
                </div>
                <div class="tw-no-widow"><p class="works-sans-lt text-sm"><?= get_field('designation') ?></p>
                </div>
            </div>
        </div>

        <?php
    }
    wp_reset_postdata();
    ?>


    <div class="more hidden lg:flex absolute top-1/2 justify-between w-full px-10 z-40 -translate-y-1/2">
        <div onclick="fullpage_api.moveSlideLeft()" class="prev cursor-pointer"><i
                class="material-icons align-middle">chevron_left</i><span
                class="font-consolas font-bold">More</span></div>
        <div onclick="fullpage_api.moveSlideRight()" class="next cursor-pointer"><span
                class="font-consolas font-bold">More</span><i class="material-icons align-middle">chevron_right</i>
        </div>
    </div>


</div>