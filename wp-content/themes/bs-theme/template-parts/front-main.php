<!-- main starts here ... -->
<div class="section fp-noscroll" data-anchor="main">
    <div class="tw-wrapper">

        <?php $query = new WP_Query(array('pagename' => 'home'));
        while ($query->have_posts()) {
        $query->the_post(); ?>

        <h1
            class="font-circular text-white text-center text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl 4xl:text-9xl animated fadeInUpBig delay-p1s">
            <?= get_the_content() ?> <br>
            <span class="blue-cross relative">
                                <?php

                                the_field('main-strike-through');


                                ?> <span
                    class="absolute z-50 top-0 left-0 w-goliath h-full -ml-10 bg-cover bg-center bg-no-repeat"
                    style="background-image: url(<?= bloginfo('template_directory')?>/images/goliath-line.gif);"></span></span>
        </h1></div>

    <?php }
    wp_reset_postdata(); ?>


</div> <!-- main ends here... -->