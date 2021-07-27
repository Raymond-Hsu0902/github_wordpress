<?php

get_header();
?>


<div class="container">
    <div class="row">
        <div class="col-12">
        </div>
        <div class="col-md-9 d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <h1 class="text-center"><?php echo single_cat_title(); ?></h1>
                    <?php get_template_part('includes/section', 'archive'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar_ctrl">
            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>