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

        <?php
            $rowa = get_field('rowa');
            $rowb = get_field('row_b');
        ?>

        <div class="tw-wrapper pt-20">
            <div class="head mb-10"><h2
                    class="text-6xl text-bs-blue-light leading-none font-circular mb-6 sm:text-6xl animated delay-p1s">
                    <?= get_the_title(); ?></h2>
                <div class="tw-no-widow"><p
                        class="font-work-sans-lt sm:max-w-xl sm:mx-auto animated delay-p2s">

                        <?= get_the_content(); ?></h2>

                    </p>

                    <div class="workTopBar max-w-6xl mx-auto">

                        <div class="iconWrapper">
                            <div class="mt_ico active"><span class="material-icons">grid_on</span> <span class="icText">POSTS</span></div>

                            <div class="mt_ico"><span class="material-icons">assignment_ind</span> <span class="icText">Tagged</span> </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="tw-wrapper max-w-6xl mx-auto lg:flex flex-wrap" id="work-fields">

            <?php
                $animationDelayStart = 4;
                for($i=0; $i<sizeof($rowa); $i++) :

                $workImage = $rowa[$i]['bgimage'];
                $bgColor = $rowa[$i]['bgcolor'];
            ?>

            <div class="mb-4 xl:m-0 xl:w-1/3 work-field animated delay-p<?=$animationDelayStart?>s"">
                <img src="<?=$workImage['url']?>" alt="">
                <div class="desc_wrapper" style="background-color: <?=$bgColor?>">
                    <div class="descContents">

                        <div class="descTitle"><?=$rowa[$i]['title']?></div>
                        <div class="descShort font-work-sans-lt description hidden lg:block"><?=$rowa[$i]['shortdesc']?></div>
                        <div class="descFull font-work-sans-lt description lg:hidden"><?=$rowa[$i]['description']?></div>
                        <div class="descCategory"><?=$rowa[$i]['category']?></div>

                    </div>

                </div>
            </div>

                <?php
                    $animationDelayStart++;
                    endfor;
                ?>

        </div>


    </div>

    <?php
}
wp_reset_postdata();
?>