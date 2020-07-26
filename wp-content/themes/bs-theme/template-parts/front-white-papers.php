<div class="section fp-noscroll" data-anchor="white-papers">

    <div class="tw-wrapper text-white lg:flex lg:items-center">
        <div class="head mb-6 lg:w-1/3 lg:text-left lg:pr-10"><h2
                class="text-6xl leading-none font-circular mb-6 lg:max-w-sm animated   delay-p1s">
                White Papers</h2>
            <div class="tw-no-widow hidden lg:block"><p
                    class="font-work-sans-lt sm:max-w-xl sm:mx-auto lg:ml-0 xl:max-w-xs animated   delay-p2s">
                    Where we keep our in-depth thought pieces from our Strategy team. Each of
                    our white papers takes a deeper look under the surface of how social media
                    works, and how Davids can better harness&nbsp;it.</p></div>
        </div>
        <div class="body relative -mx-3 lg:m-0 lg:w-2/3 lg:overflow-x-hidden animated delay-p4s">
            <div data-count="6"
                 class="white-papers relative sm:flex sm:flex-wrap lg:-mx-2 lg:flex-no-wrap"
                 style="width: 450%; transform: translate3d(0px, 0px, 0px);">

                <?php

                $args = array(
                    'post_type'      => 'white_papers',
                    'posts_per_page' => -1
                );

                $query = new WP_Query($args);

                if($query->have_posts()) :
                while($query->have_posts() ) :
                $query->the_post();
                ?>

                    <div class="white-paper mx-auto my-3 sm:flex-col lg:px-2 lg:px-4 lg:m-0 lg:flex-grow sm:flex">
                        <div class="img-wrapper h-32 w-full bg-cover bg-center bg-no-repeat lg:h-48 xl:h-56 2xl:h-64 3xl:h-80 4xl:h-104"
                             lazy="loaded"
                             style="background-image: url(<?=get_the_post_thumbnail_url()?>);"></div>
                        <div class="txt-wrapper bg-white text-black p-3 text-left text-lg leading-tight sm:flex-grow sm:flex sm:flex-col">
                            <div class="tw-no-widow sm:flex-grow"><h3 class="circular mb-3"> <?=get_the_title()?> </h3></div>
                            <div class="tw-no-widow"><p
                                    class="work-sans-lt text-xs mb-3 lg:text-sm"><?=get_the_excerpt()?></p>
                            </div>
                            <div class="tw-input-read text-xs lg:text-sm">
                                <div class="checkbox flex justify-center items-center mb-4">
                                    <div class="border select-none cursor-pointer bg-gray-200 flex justify-center items-center h-4 w-4 mr-4 border-black">
                                        <i class="material-icons opacity-0 checkToggleMaterial">check</i></div>
                                    <label class="work-sans-lt">
                                        By ticking this box I agree to receive updates on Born
                                        Social and their work. We will not share your data with any
                                        third parties. <a href="<?php the_permalink()?>" class="underline cursor-pointer">Read our full privacy policy here</a>.
                                    </label></div>
                                <div class="input flex"><input placeholder="Email Address"
                                                               type="text"
                                                               name="email"
                                                               class="work-sans-lt w-2/3 outline-none border-bs-blue-dark py-1 px-3 border">
                                    <button data-v-3b6799ab="" type="button" name="button"
                                            class="consolas w-1/3 bg-bs-blue-dark text-white py-1 outline-none border-bs-blue-dark border">
                                        Read
                                    </button>
                                </div>
                                <a href="#" target="_blank" class="hidden" id="tw-input-read-219"></a><!---->
                            </div>
                        </div>
                    </div>

                <?php

                endwhile;
                endif;

                ?>



            </div>
            <div class="white-paper-navigation hidden lg:flex absolute top-1/2 -translate-y-1/2 z-40 right-0">

                <div id="whiteSlider-Previous" class="select-none flex items-center justify-between cursor-pointer border-2 border-black bg-white font-consolas font-bold text-black mr-2 text-xs items-center w-22 pr-2 py-1"><i class="material-icons">chevron_left</i><span>Previous</span></div>

                <div id="whiteSlider-Next" class="select-none flex items-center justify-between cursor-pointer border-2 border-black bg-white font-consolas font-bold text-black text-xs items-center w-22 pl-2 py-1">
                    <span>Next</span><i class="material-icons">chevron_right</i></div>
            </div>
        </div>
    </div>

</div>
