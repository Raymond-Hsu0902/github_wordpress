<?php

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="col-md-12 col-12 article">
                <img class="article-upper-vector" src="<?php
                                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                            $path .= "34.80.64.221/"};
                                                        echo $path;
                                                        ?>/wp-content/uploads/2021/05/article-upper-vector.png" alt="">
                <?php get_template_part('includes/section', 'blogcontent'); ?>
                <img class="article-lower-vector" src="<?php
                                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                            $path .= "34.80.64.221/"};
                                                        echo $path;
                                                        ?>/wp-content/uploads/2021/05/article-lower-vector.png" alt="">
            </div>
            <div class="article-CTA">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 logo-part">
                            <img src="<?php
                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                            $path .= "34.80.64.221/"};
                                        echo $path;
                                        ?>/wp-content/uploads/2021/05/banner-logo.png" alt="" width="100%" height="auto">
                            <a href="https://510.org.tw/donations/ASWCx1?" target="_blank">
                                <button class="btn btn-primary" type="submit">立即支持</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <div>
                                    <a href="https://www.facebook.com/mdvi520" target="_blank">
                                        <img src='<?php
                                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                        $path .= "34.80.64.221/"};
                                                    echo $path;
                                                    ?>/wp-content/uploads/2021/05/f_logo_RGB-Blue_250.png' alt="">
                                    </a>

                                    <p>歡迎按讚、追蹤粉專</p>
                                </div>
                                <div>
                                    <a href="https://page.line.me/jjs6271k" target="_blank">
                                        <img src='<?php
                                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                        $path .= "34.80.64.221/"};
                                                    echo $path;
                                                    ?>/wp-content/uploads/2021/05/APP-icon.png' alt="">
                                    </a>
                                    <p>歡迎加入Line@官方帳號</p>
                                </div>
                                <div>
                                    <a href="https://www.youtube.com/channel/UCAJd2Pki-CFVq4buhRNAayw" target="_blank">
                                        <img src='<?php
                                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                        $path .= "34.80.64.221/"};
                                                    echo $path;
                                                    ?>/wp-content/uploads/2021/05/yt_icon_rgb.png' alt="">
                                    </a>
                                    <p>歡迎訂閱我們的頻道</p>
                                </div>
                            </div>
                            <img class="article_CTA_upper_vector" src="<?php
                                                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                            $path .= "34.80.64.221/"};
                                                                        echo $path;
                                                                        ?>/wp-content/uploads/2021/05/article_CTA_upper_vector.png" alt="">
                            <img class="article_CTA_lower_vector" src="<?php
                                                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                            $path .= "34.80.64.221/"};
                                                                        echo $path;
                                                                        ?>/wp-content/uploads/2021/05/article_CTA_lower_vector.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="post-link">
                    <div class="previous">
                        <?php
                        $prevPost = get_previous_post();
                        $prevThumbnail = get_the_post_thumbnail($prevPost->ID);
                        previous_post_link('%link', $prevThumbnail); ?>
                        <div class="previous_post">
                            <?php
                            if ($prevPost = get_previous_post()) {
                                $prevPost = get_previous_post();
                                echo '
                            <div class="link_post_text">
                                <span class="dot"></span>
                                <p>上一篇文章</p>
                            </div>';
                            } else {
                                echo '
                                <span class="dot"></span>
                                <p>沒有更早的文章了...，可以到網站的其他地方逛逛喔</p>';
                            }
                            ?>
                            <div class="link_post_name">
                                <?php
                                previous_post_link('%link'); ?>
                            </div>
                        </div>
                    </div>
                    <img class="d-none d-md-block" src="<?php
                                                        $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                        if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                            $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                        } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                            $path .= "34.80.64.221/"};
                                                        echo $path;
                                                        ?>/wp-content/uploads/2021/05/article_seperate.png" alt="">
                    <div class="next">
                        <div class="next_post">
                            <?php
                            if ($nextPost = get_next_post()) {
                                $nextPost = get_next_post();
                                echo '
                            <div class="link_post_text">
                            <p>下一篇文章</p>
                                <span class="dot"></span>
                            </div>';
                            } else {
                                echo '
                                <span class="dot"></span>
                                沒有更新的文章了...，可以到網站的其他地方逛逛喔';
                            }
                            ?>
                            <div class="link_post_name">
                                <?php
                                next_post_link('%link'); ?>
                            </div>
                        </div>
                        <?php
                        $nextPost = get_next_post();
                        $nextThumbnail = get_the_post_thumbnail($nextPost->ID);
                        next_post_link('%link', $nextThumbnail);
                        ?>
                    </div>
                </div>
                <?php related_posts(); ?>
            </div>

        </div>
        <div class="col-md-3 col-12">
            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <?php dynamic_sidebar('page-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <? get_sidebar(); ?>
</div>

<?php get_footer(); ?>