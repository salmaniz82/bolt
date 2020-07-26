<!-- services started -->

<?php
$args = array(
    'pagename' => 'our-services',
    'post_status' => 'publish'
);
$query = new WP_Query($args);
while ($query->have_posts()) {
    $query->the_post(); ?>



    <div class="section fp-auto-height-responsive" data-anchor="services">
        <div class="tw-wrapper pt-20 xl:pt-0 max-w-6xl mx-auto">
            <div class="head mb-6 flex items-center xl:min-h-0 xl:mb-20">
                <div class="content w-full"><h2
                        class="text-6xl text-bs-blue-light leading-none font-circular mb-6 text-bs-blue-light animated delay-p1s">
                        <?= get_the_title() ?> </h2>
                    <div class="tw-no-widow"><p
                            class="font-work-sans-lt sm:max-w-xl sm:mx-auto animated delay-p2s">
                            <?= get_the_content() ?>
                        </p></div>
                </div>
            </div>

            <div class="featuredItems relative text-left sm:text-center sm:flex sm:flex-wrap xl:mb-20">

                <?php

                    if (have_rows('servicelist')):
                        $animationDelayStart = 3;
                        while (have_rows('servicelist')) : the_row(); ?>

                            <div class="featureItem mt-20 sm:w-1/2 overflow-y-hidden  md:pr-3 lg:pr-10 xl:px-3  lg:flex lg:flex-col md:w-1/3  xl:w-1/3 xl:m-0">
                            <ul class="featuresList animated delay-p<?=$animationDelayStart?>s">


                            <?php
                            if (have_rows('features')) :
                                while(have_rows('features')) : the_row();

                                    ?>

                                    <li><a href="#"><?= get_sub_field('feature'); ?></a></li>

                                <?php
                                endwhile;
                            endif;
                            ?>

                            </ul>
                            </div>

                <?php
                            $animationDelayStart++;
                        endwhile;
                        endif;
                ?>

            </div>


            <div class="body" style="min-height: 300px;">


                <div class="services relative text-left sm:text-center sm:flex sm:flex-wrap">

                    <?php

                    if (have_rows('servicelist')):
                        $animationDelayStart = 3;
                        while (have_rows('servicelist')) : the_row();

                            $serviceIcon = get_sub_field('icon');
                            $serviceTitle = ucfirst(get_sub_field('title'));
                            $serviceDesc = ucfirst(get_sub_field('description'));
                            ?>
                            <div class="service mt-20 sm:w-1/2 overflow-y-hidden  md:pr-3 lg:pr-10 xl:px-3  lg:flex lg:flex-col md:w-1/3  xl:w-1/3 xl:m-0 animated delay-p<?= $animationDelayStart ?>s">
                                <img alt="strategy" title="strategy" class="max-h-full mb-2 sm:h-20 sm:m-auto" src="<?= $serviceIcon['url'] ?>">
                                <h3 class="title font-circular text-bs-blue-light text-4xl mb-6">
                                    <?= $serviceTitle ?>
                                </h3>

                                <div class="tw-no-widow description sm:flex-grow lg:mb-6">

                                    <p class="font-work-sans-lt text-sm lg:text-base">
                                        <?= $serviceDesc ?>
                                    </p>




                                </div>

                            </div>

                            <?php
                            $animationDelayStart++;
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>

    </div> <!-- services ended -->

<?php } wp_reset_postdata();?>