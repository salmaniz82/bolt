<!-- awards starts -->


<?php $query = new WP_Query(array('pagename' => 'awards'));
while ($query->have_posts()) {
$query->the_post(); ?>


<div class="section fp-noscroll" data-anchor="awards">

    <div class="tw-wrapper text-white max-w-6xl mx-auto lg:flex lg:items-center">
        <div class="head mb-6 lg:m-0 lg:w-1/3 lg:text-left">
            <h2 class="text-6xl leading-none font-circular mb-6 animated delay-p1s">
                <?= get_the_title(); ?>
            </h2>
            <div class="tw-no-widow">
                <p class="font-work-sans-lt sm:max-w-xl sm:mx-auto lg:ml-0 lg:w-full lg:mb-6 xl:max-w-xs animated delay-p2s">
                    <?= get_the_content(); ?>
                </p>
            </div>
            <a href="#contact-details"
               class="hidden lg:inline-block btn border-bs-red-light hover:bg-bs-red-light animated delay-p3s">
                Work With Us</a>
        </div>
        <div class="body mb-6 -mx-4 lg:w-2/3 lg:m-0">
            <div class="clients flex flex-wrap sm:max-w-lg sm:mx-auto lg:ml-auto lg:mr-0">
                <?php

                if (have_rows('awardrepeater')):
                    $animationDelayStart = 4;
                    while (have_rows('awardrepeater')) : the_row();

                        $brandImages = get_sub_field('brandimages');
                        $brandTitle = ucfirst(get_sub_field('brandtitle'));
                        ?>


                        <div class="w-1/3 my-2 flex justify-center items-center animated delay-p<?= $animationDelayStart ?>s">
                            <img alt="30 under 30 award" title="<?= $brandTitle; ?>"
                                 class="w-12 max-h-full sm:w-24"
                                 src="<?= $brandImages['url'] ?>">
                        </div>

                        <?php
                        $animationDelayStart++;
                    endwhile;
                endif;
                ?>

            </div>
        </div>
        <a href="#contact-details"
           class="btn border-bs-red-light lg:hidden animated delay-p13s">Work With Us</a>
    </div>
</div> <!-- awards ends -->

    <?php
}
wp_reset_postdata();
?>