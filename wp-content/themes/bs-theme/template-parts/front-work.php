<!-- work starts here -->
<?php
$args = array(
    'pagename' => 'our-work',
    'post_status' => 'publish'
);
$query = new WP_Query($args);
while ($query->have_posts()) {
    $query->the_post(); ?>

    <div class="section" data-anchor="work">

        <div class="tw-wrapper pt-20">
            <div class="head mb-10"><h2
                    class="text-6xl text-bs-blue-light leading-none font-circular mb-6 sm:text-6xl animated delay-p1s">
                    <?= get_the_title(); ?></h2>
                <div class="tw-no-widow"><p
                        class="font-work-sans-lt sm:max-w-xl sm:mx-auto animated delay-p2s">

                        <?= get_the_content(); ?></h2>

                    </p>
                </div>
            </div>
            <div class="content">
                <div class="case-studies -mx-10 lg:mx-0">

                    <div class="lg:flex">

                        <?php

                        $rowa = get_field('rowa');

                        $rowb = get_field('row_b');

                        ?>

                        <div class="case-study-wrapper big lg:pr-1">
                            <a href="" class="case-study lg:text-white animated delay-p3s">
                                <div class="img-wrapper" style="background-image: url(<?= $rowa[0]['bgimage']['url']?>);"></div>
                                <div class="txt-wrapper"><h3 class="title"><?= $rowa[0]['title']?> </h3>
                                    <div class="tw-no-widow lg:hidden"><p class="font-work-sans-lt description"><?= $rowa[0]['shortdesc']?> </p></div>
                                    <div class="tw-no-widow hidden lg:block"><p class="font-work-sans-lt description"><?= $rowa[0]['description']?></p>
                                    </div>
                                    <div class="btn">Let's See</div>
                                    <div class="font-work-sans-lt category"><?= $rowa[0]['category']?></div>
                                </div>
                            </a>
                        </div>


                        <div class="case-study-wrapper small lg:pl-1">

                            <?php

                            $animationDelayStart = 4;
                            for($i=0; $i<sizeof($rowa); $i++) :

                                if($i > 0) :

                                ?>

                                    <a href="#" class="case-study lg:text-white animated delay-p<?=$animationDelayStart?>s">
                                        <div class="img-wrapper" style="background-image: url(<?= $rowa[$i]['bgimage']['url']?>);"></div>
                                        <div class="txt-wrapper"><h3 class="title"><?=$rowa[$i]['title']?></h3>
                                            <div class="tw-no-widow lg:hidden">
                                                <p class="font-work-sans-lt description"><?=$rowa[$i]['description']?></p></div>
                                            <div class="tw-no-widow hidden lg:block">
                                                <p class="font-work-sans-lt description"><?=$rowa[$i]['shortdesc']?></p>
                                            </div>
                                            <div class="btn">Let's See</div>
                                            <div class="font-work-sans-lt category"><?=$rowa[$i]['category']?></div>
                                        </div>
                                    </a>
                                <?php
                                endif;
                                $animationDelayStart++;
                                endfor;
                            ?>
                        </div> <!-- case study wrapper -->

                    </div>

                    <div class="lg:flex lg:flex-row-reverse lg:mt-2">

                        <div class="case-study-wrapper big lg:pl-1">
                            <a href="#"
                               class="case-study lg:text-white animated delay-p8s">
                                <div class="img-wrapper"
                                     style="background-image: url(<?= $rowb[0]['bgimage']['url']?>);"></div>
                                <div class="txt-wrapper"><h3 class="title"><?= $rowb[0]['title']?></h3>
                                    <div class="tw-no-widow lg:hidden"><p class="font-work-sans-lt description"><?= $rowb[0]['description']?></p></div>
                                    <div class="tw-no-widow hidden lg:block"><p class="font-work-sans-lt description"><?= $rowb[0]['shortdesc']?></p></div>
                                    <div class="btn">Let's See</div>
                                    <div class="font-work-sans-lt category"><?= $rowb[0]['category']?></div>
                                </div>
                            </a>
                        </div>

                        <div class="case-study-wrapper small lg:pr-1">


                            <?php

                            $animationDelayStart = 9;
                            for($i=0; $i<sizeof($rowb); $i++) :
                                if($i > 0) :
                                    ?>

                                    <a href="#" class="case-study lg:text-white animated delay-p<?=$animationDelayStart?>s">
                                        <div class="img-wrapper h-56 w-full bg-cover bg-center bg-no-repeat sm:h-64"

                                             style="background-image: url(<?= $rowb[$i]['bgimage']['url']?>);"></div>
                                        <div class="txt-wrapper"><h3 class="title"><?=$rowb[$i]['title']?></h3>
                                            <div class="tw-no-widow lg:hidden"><p class="font-work-sans-lt description"><?=$rowb[$i]['description']?></p>
                                            </div>
                                            <div class="tw-no-widow hidden lg:block"><p
                                                    class="font-work-sans-lt description"><?=$rowb[$i]['shortdesc']?></p>
                                            </div>
                                            <div class="btn">Let's See</div>
                                            <div class="font-work-sans-lt category"><?=$rowb[$i]['category']?>
                                            </div>
                                        </div>
                                    </a>

                                <?php
                                    $animationDelayStart++;
                                endif;
                            endfor;
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
}
wp_reset_postdata();
?>