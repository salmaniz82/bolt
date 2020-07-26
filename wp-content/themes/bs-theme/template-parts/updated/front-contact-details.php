<div class="section fp-noscroll" data-anchor="contact-details">

    <?php $query = new WP_Query(array('pagename' => 'contact-details'));
    while ($query->have_posts()) {
    $query->the_post(); ?>

    <div class="tw-wrapper">
        <div class="info max-w-6xl mx-auto lg:flex lg:mb-10">
            <div class="details mb-10 lg:mb-0 lg:w-1/3 lg:px-3">
                <div class="head text-bs-blue-light text-5xl leading-none font-circular mb-6 animated delay-p1s">
                    Find Us.
                </div>
                <div class="body font-consolas leading-tight text-sm sm:text-base">
                    <div class="email underline animated delay-p2s">
                        hello@domain.co.uk
                    </div>
                    <a href="tel:+441234567899" class="block mb-4 animated delay-p3s">
                        1234567899
                    </a>
                    <div class="address animated delay-p4s">
                        <div>123 some street</div>
                        <div> somewhere</div>
                        <div> London E8 3RL</div>
                    </div>
                </div>
            </div>
            <div class="social mb-10 lg:mb-0 lg:w-1/3 lg:px-3">
                <div class="head leading-none mb-6">
                    <div class="text-5xl text-bs-blue-light font-circular lg:mb-6 animated delay-p5s">
                        Follow Us.
                    </div>
                    <div class="tw-no-widow"><p
                            class="hidden text-black max-w-xs mx-auto font-work-sans-lt lg:block animated delay-p6s">
                            We also do our own social media, feel free to check it out&nbsp;below.</p>
                    </div>
                </div>


                <div class="body"><a href="https://twitter.com/#" rel="nofollow"
                                     target="_blank" title="Born Social Twitter"
                                     class="inline-block mx-1 animated delay-p7s"><img
                            alt="Twitter Logo"

                            class="h-10 w-10"
                            src="<?= bloginfo('template_directory') ?>/images/social_icons/Twitter-02.svg"
                            lazy="loaded"></a>
                    <a href="https://www.linkedin.com/company/#" rel="nofollow" target="_blank"
                       title="Born Social LinkedIn"
                       class="inline-block mx-1 animated delay-p8s"><img alt="LinkedIn Logo"

                                                                         class="h-10 w-10"
                                                                         src="<?= bloginfo('template_directory')?>/images/social_icons/LinkedIn-01.svg"
                                                                         lazy="loaded"></a>


                    <a href="https://facebook.com/#" rel="nofollow" target="_blank"
                       title="Born Social Facebook"
                       class="inline-block mx-1 animated delay-p9s"><img alt="Facebook Logo"

                                                                         class="h-10 w-10"
                                                                         src="<?= bloginfo('template_directory')?>/images/social_icons/Facebook-02.svg"
                                                                         lazy="loaded"></a>


                    <a href="https://instagram.com/#" rel="nofollow" target="_blank"
                       title="Born Social Instagram"
                       class="inline-block mx-1 animated delay-p10s"><img
                            alt="Instagram Logo"

                            class="h-10 w-10"
                            src="<?=bloginfo('template_directory')?>/images/social_icons/Instagram-02.svg"
                            lazy="loaded"></a></div>
            </div>
            <div class="join lg:w-1/3 lg:px-3">
                <div class="head leading-none mb-6">
                    <div class="text-5xl text-bs-blue-light font-circular lg:mb-6 animated delay-p11s">
                        Join Us.
                    </div>
                    <div class="tw-no-widow"><p
                            class="hidden text-black max-w-xs mx-auto font-work-sans-lt lg:block animated delay-p12s">
                            Looking for something new? We’re always on the hunt for great people to make
                            great&nbsp;work.</p></div>
                </div>
                <a href="#"
                   class="btn border-bs-red-light text-bs-blue-dark hover:bg-bs-red-light hover:text-white animated delay-p13s">Join
                    the Team</a></div>
        </div>
        <div class="imagery hidden lg:block animated delay-p14s">
            <div class="ig-feed h-48 mx-auto max-w-6xl xl:h-64">
                <ul class="flex h-full">
                    <li class="bg-cover bg-center bg-no-repeat w-1/5"

                        style="background-image: url(https://via.placeholder.com/400x400);"></li>
                    <li class="bg-cover bg-center bg-no-repeat w-1/5"

                        style="background-image: url(https://via.placeholder.com/400x400);"></li>
                    <li class="bg-cover bg-center bg-no-repeat w-1/5"

                        style="background-image: url(https://via.placeholder.com/400x400);"></li>
                    <li class="bg-cover bg-center bg-no-repeat w-1/5"

                        style="background-image: url(https://via.placeholder.com/400x400);"></li>
                    <li class="bg-cover bg-center bg-no-repeat w-1/5"

                        style="background-image: url(https://via.placeholder.com/400x400);"></li>
                </ul>
            </div>
        </div>

        <div class="footer-brands max-w-6xl mx-auto lg:flex bg-white mt-6">

        <?php
        if (have_rows('brandicons')) :
            while(have_rows('brandicons')) : the_row();

                ?>
            <div class="animated delay-p15s"><a href="#"><img src="<?= get_sub_field('branico')['url']?>" alt=""></a></div>

            <?php endwhile;
            endif;
            ?>

        </div>

    </div>

    <?php }
    wp_reset_postdata(); ?>



</div>

<!-- contact details ends here -->