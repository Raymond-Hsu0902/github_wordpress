<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-12 col-12 mb-5">
            <div class="card" style="">
                <div class="row g-0 archive-card">
                    <img class="category-card-upper" src="<?php
                                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                $path .= "34.80.64.221/"};
                                                            echo $path;
                                                            ?>/wp-content/uploads/2021/05/category-card-upper.png" alt="">
                    <img class="category-card-lower" src="<?php
                                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                $path .= "34.80.64.221/"};
                                                            echo $path;
                                                            ?>/wp-content/uploads/2021/05/category-card-lower.png" alt="">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="card-img-top archive-card-img">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p><?php
                                $excerpt = get_the_excerpt();
                                echo $excerpt;
                                ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">看更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>