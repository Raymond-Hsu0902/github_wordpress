<?php

get_header();
?>

<h1><?php echo single_cat_title(); ?>=</h1>
<div class="container">
    <div class="row"></div>
    <div class="col-8">
        <?php get_template_part('includes/section', 'archive'); ?>
    </div>
</div>

</div>
<div class="col-4">
    <?php if (is_active_sidebar('page-sidebar')) : ?>
        <?php dynamic_sidebar('page-sidebar'); ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>