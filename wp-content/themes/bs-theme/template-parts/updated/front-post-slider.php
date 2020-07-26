<div id="posts-section" class="section fp-auto-height-responsive" data-anchor="posts">

    <div class="tw-wrapper pt-20 text-white lg:pt-0 lg:flex lg:items-center flex-wrap">
        <div class="head mb-6 lg:w-full lg:text-center "><h2
                class="text-6xl leading-none font-circular mx-auto mb-6 lg:max-w-sm animated delay-p1s ">
                Bolt Blog</h2>
            <div class="tw-no-widow lg:max-w-2xl mx-auto"><p
                    class="font-work-sans-lt sm:max-w-xl lg:mx-auto mx-auto lg:ml-0 lg:mb-6 lg:max-w-2xl animated delay-p2s">
                    The home for our latest thinking about social media, and how businesses that
                    think like David can make the most of it. We'll be posting a couple of new
                    blogs every&nbsp;month.</p></div>
            <a href="/blog"
               class="hidden lg:inline-block btn border-bs-blue-dark hover:bg-bs-blue-dark animated delay-p3s">See All Blogs</a></div>
        <div class="body relative mb-6 -mx-3 lg:m-0 lg:w-full lg:overflow-x-hidden animated delay-p4s">
            <div data-count="0" data-slideindex="0" class="posts relative sm:flex sm:flex-wrap md:-mx-2 lg:flex-no-wrap"
                 style="transform: translate3d(0px, 0px, 0px);">

                <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1
                );

                $query = new WP_Query($args);

                if($query->have_posts()) :
                        while($query->have_posts() ) :
                            $query->the_post();
                ?>

                    <div class="post my-3 sm:flex-col md:px-2 lg:m-0 lg:flex-grow sm:flex">
                        <div class="img-wrapper h-48 w-full bg-cover bg-center bg-no-repeat" style="background-image: url(<?=get_the_post_thumbnail_url()?>);"></div>
                        <div class="txt-wrapper bg-white text-black p-4 text-left text-lg leading-tight sm:flex-grow sm:flex sm:flex-col">
                            <div class="tw-no-widow mb-2 sm:flex-grow"><h3 class="font-circular 2xl:text-xl"><?=get_the_title()?></h3></div>
                            <div class="tw-no-widow hidden lg:block flex-grow mb-2"><p class="font-work-sans-lt text-sm"><?= limit_text(get_the_excerpt(), 20) ?></p></div>
                            <a href="<?php the_permalink()?>" class="btn border-bs-blue-light self-start hover:bg-bs-blue-light hover:text-white">Read</a>
                            <div class="hidden 3xl:block meta font-consolas text-xs mt-2">
                                <div class="tw-no-widow"><p>Written by <?= get_the_author()?></p></div>
                                <div class="tw-no-widow"><p>Jun 4&nbsp;2020</p></div>
                            </div>
                        </div>
                    </div>

                <?php
                        endwhile;
                        endif;
                ?>

            </div>
            <div class="post-navigation hidden lg:flex absolute top-1/2 z-40 right-0 -translate-y-1/2">
                <!---->

                <div id="postPreviousTrigger" class="select-none flex items-center justify-between cursor-pointer border-2 border-black bg-white font-consolas font-bold text-black mr-2 text-xs items-center w-22 pr-2 py-1">
                    <i class="material-icons">chevron_left</i><span>Previous</span></div>

                <div id="postRightTrigger"
                     class="select-none flex items-center justify-between cursor-pointer border-2 border-black bg-white font-consolas font-bold text-black text-xs items-center w-22 pl-2 py-1">
                    <span>Next</span><i class="material-icons">chevron_right</i></div>
            </div>
        </div>
        <a href="/blog" class="btn border-bs-blue-dark lg:hidden animated delay-p5s">See All Blogs</a></div>

</div>