<!-- about starts here -->
<div class="section fp-noscroll" data-anchor="about">
    <div class="tw-wrapper max-w-6xl mx-auto">
        <div class="tw-no-widow">

            <?php $query = new WP_Query(array('pagename' => 'about'));
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <h2 class="font-circular text-bs-blue-light text-center text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl animated delay-p1s">


                    <?= get_the_content(); ?>


                </h2>

            <?php }
            wp_reset_postdata(); ?>


        </div>
    </div>
</div>
<!-- about ends here -->