<?php get_header(); ?>

<div class="content max-w-12xl mx-auto">
    <div class="fullpage-wrapper">

        <?php
            get_template_part('template-parts/updated/front-main');

            get_template_part('template-parts/updated/front-about');
            get_template_part('template-parts/updated/front-work');
            get_template_part('template-parts/updated/front-clients');

            get_template_part('template-parts/updated/front-reviews');

            /*
            get_template_part('template-parts/front-awards');

            */
            get_template_part('template-parts/updated/front-services');

            /*
            get_template_part('template-parts/front-whyus');
            */

            get_template_part('template-parts/updated/front-whyus');
            get_template_part('template-parts/updated/front-contact-form');
            get_template_part('template-parts/updated/front-post-slider');
            get_template_part('template-parts/updated/front-white-papers');
            get_template_part('template-parts/updated/front-contact-details');
        ?>
    </div> <!-- fullpage wrapper -->




    </main>
</div> <!-- #index-page -->
</div> <!-- #app -->


<?php get_footer(); ?>
