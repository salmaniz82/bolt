<!-- about starts here -->
<div class="section fp-noscroll" data-anchor="about">
    <div class="tw-wrapper max-w-6xl mx-auto">
        <div class="tw-no-widow">

            <div class="lg:flex md:flex">

                <div class="w-1/4">


                    <div style="max-width: 350px" class="animated delay-p2s">

                    <img src="<?=bloginfo('template_directory')?>/images/bolt-logo-dark.png" alt="">

                    </div>
                    
                </div>
                <div class="w-3/4" id="about-details">

                    <?php $query = new WP_Query(array('pagename' => 'about'));
                    while ($query->have_posts()) {
                        $query->the_post(); ?>

                        <div class="font-circular animated delay-p3s">

                            <div class="about-top-bar">
                                <span>Boltldn</span>
                                <span>Message</span>

                                <span>
                                    <span class="material-icons">person</span>
                                    <span class="material-icons">check</span>
                                </span>

                                <span class="material-icons">keyboard_arrow_down</span>
                                <span class="material-icons">more_horiz</span>
                            </div>

                            <div class="boltheading">BoltLDN</div>

                            <div class="dynText">
                            <?= get_the_content(); ?>

                            </div>

                        </div>

                    <?php }
                    wp_reset_postdata(); ?>

                </div>

            </div>




        </div>
    </div>
</div>
<!-- about ends here -->