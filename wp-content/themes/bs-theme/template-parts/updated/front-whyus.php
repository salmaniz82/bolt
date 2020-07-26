
<?php
$args = array(
    'pagename' => 'why-us',
    'post_status' => 'publish'
);
$query = new WP_Query($args);
while ($query->have_posts()) {
    $query->the_post(); ?>

    

    <div class="section fp-auto-height-responsive" data-anchor="skills">

        <div class="tw-wrapper pt-20 xl:pt-0 lg:mx-auto max-w-6xl">
            <div class="head mb-6 flex items-center xl:min-h-0 xl:mb-20">
                <div class="content w-full">
                    <h2 class="text-6xl text-bs-blue-light leading-none font-circular mb-6 animated delay-p1s">
                        <?= get_the_title(); ?>
                    </h2>
                    <div class="tw-no-widow">
                        <p class="font-work-sans-lt sm:max-w-xl sm:mx-auto animated delay-p2s">
                            <?= get_the_content(); ?>
                        </p>




                    </div>
                </div>
            </div>
            <div class="body flex items-center max-w-2xl mx-auto xl:min-h-0 xl:max-w-full">
                <div class="content mb-10 xl:m-0">



                    <div class="skills text-left xl:flex xl:text-center">

                        <?php

                        if (have_rows('skillslist')):
                            $animationDelayStart = 4;
                            while (have_rows('skillslist')) : the_row();


                                $skillTitle = ucfirst(get_sub_field('title'));
                                $skillDesc = ucfirst(get_sub_field('description'));

                                ?>


                                <div class="skill mb-4 xl:m-0 xl:px-3 xl:w-1/3 animated delay-p<?= $animationDelayStart ?>s">
                                    <h3 class="circular text-bs-blue-light text-2xl sm:text-4xl xl:mb-4">
                                        <?= $skillTitle ?></h3>
                                    <div class="tw-no-widow"><p
                                            class="work-sans-lt text-sm ml-4 sm:text-base xl:m-0"><?= $skillDesc ?></p>
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

        </div>

    </div><!-- why us ends -->


    <?php
}
wp_reset_postdata();
?>
