<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h6 class="text-center"><?php echo get_the_date(); ?></h6>
                <?php
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                ?>
                <p class="text-center">by <?php echo $fname; ?><?php echo $lname; ?></p>
                <?php
                $categories = get_the_category();
                foreach ($categories as $cat) : ?>
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                                <?php echo $cat->name; ?>
                        </a>
                <?php endforeach; ?>

                <?php the_content(); ?>
<?php endwhile;
endif; ?>