<!-- clients -->
<div class="section fp-noscroll" data-anchor="clients">

    <div class="tw-wrapper text-white max-w-6xl mx-auto lg:flex lg:items-center">
        <div class="head mb-6 lg:m-0 lg:text-left lg:w-1/3">


            <?php


            $query = new WP_Query(array('pagename' => 'clients'));
            while ($query->have_posts()) {
            $query->the_post(); ?>

            <h2
                class="text-6xl leading-none font-circular mb-6 animated delay-p1s">

                <?= get_the_title() ?></h2>
            <div class="tw-no-widow"><p
                    class="font-work-sans-lt sm:max-w-xl sm:mx-auto lg:mb-6 lg:ml-0 xl:max-w-xs animated delay-p2s">

                    <?= get_the_content(); ?>

                </p></div>
            <a href="#contact-details"
               class="hidden lg:inline-block btn border-bs-blue-dark hover:bg-bs-blue-dark animated delay-p3s">Work
                With Us</a></div>
        <div class="body mb-6 -mx-4 lg:m-0 lg:w-2/3">
            <div class="clients flex flex-wrap sm:max-w-lg sm:mx-auto lg:ml-auto lg:mr-0">

                <?php
                if (have_rows('brandsicons')):
                    $animationDelayStart = 4;
                    while (have_rows('brandsicons')) : the_row();
                        ?>

                        <?php
                        $brandImages = get_sub_field('brandthumbnail');
                        $brandTitle = ucfirst(get_sub_field('title'));
                        ?>

                        <div class="w-1/3 my-2 h-6 flex justify-center items-center sm:h-12 lg:my-4 animated delay-p<?= $animationDelayStart ?>s">
                            <img alt="backyard logo" title="<?= $brandTitle ?>"
                                 class="max-h-full max-w-16 sm:max-w-20"
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
           class="btn border-bs-blue-dark lg:hidden animated delay-p16s">Work With
            Us</a></div>

    <?php
    }
    wp_reset_postdata();
    ?>

</div>
<!-- clients ends here  -->