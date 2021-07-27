<?php wp_footer(); ?>
<div class="d-none d-md-block">
    <div class="slide-footer">
        <div class="container">
            <div class="row d-flex footer-text">
                <div class="col-md-12 my-5">
                    <div class="col-md-12 d-block d-lg-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <a href="http://35.234.60.208/">
                                <img id="footer-logo" src='<?php
                                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                $path .= "34.80.64.221/"};
                                                            echo $path;
                                                            ?>/wp-content/themes/customtheme/images/footer_logo.png' alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 footer-icon d-lg-flex justify-content-end mt-sm-4 mt-lg-0 align-items-center">
                            <a href="https://www.youtube.com/channel/UCAJd2Pki-CFVq4buhRNAayw" target="_blank">
                                <img src='<?php
                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                $path .= "34.80.64.221/"};
                                            echo $path;
                                            ?>/wp-content/uploads/2021/07/youtube.png' alt="">
                            </a>
                            <a href="https://page.line.me/jjs6271k" target="_blank">
                                <img src='<?php
                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                $path .= "34.80.64.221/"};
                                            echo $path;
                                            ?>/wp-content/uploads/2021/07/line.png' alt="">
                            </a>
                            <a href="https://www.facebook.com/mdvi520" target="_blank">
                                <img src='<?php
                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                $path .= "34.80.64.221/"};
                                            echo $path;
                                            ?>/wp-content/uploads/2021/07/facebook_new.png' alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 contact-info">
                        <p class="card-text">04 2265 3153</p>
                        <p class="card-text">taiwan.mdvi@gmail.com</p>
                        <p class="card-text">402 臺中市南區忠明南路758號10樓</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer d-sm-block d-md-none">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8 my-5">
                <a href="http://35.234.60.208/">
                    <img id="footer-logo" src='<?php
                                                $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                    $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                    $path .= "34.80.64.221/"};
                                                echo $path;
                                                ?>/wp-content/themes/customtheme/images/footer_logo.png' alt="">
                </a>
            </div>
            <div class="col-8 RWD-footer-icon mb-3">
                <a href="https://www.youtube.com/channel/UCAJd2Pki-CFVq4buhRNAayw" target="_blank">
                    <img src='<?php
                                $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                    $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                } else ($_SERVER["SERVER_NAME"] == "http://"){
                                    $path .= "34.80.64.221/"};
                                echo $path;
                                ?>/wp-content/uploads/2021/07/youtube.png' alt="">
                </a>
                <a href="https://page.line.me/jjs6271k" target="_blank">
                    <img src='<?php
                                $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                    $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                } else ($_SERVER["SERVER_NAME"] == "http://"){
                                    $path .= "34.80.64.221/"};
                                echo $path;
                                ?>/wp-content/uploads/2021/07/line.png' alt="">
                </a>
                <a href="https://www.facebook.com/mdvi520" target="_blank">
                    <img src='<?php
                                $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                    $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                } else ($_SERVER["SERVER_NAME"] == "http://"){
                                    $path .= "34.80.64.221/"};
                                echo $path;
                                ?>/wp-content/uploads/2021/07/facebook_new.png' alt="">
                </a>
            </div>
            <p id="footer-p" class="col-8 card-text">04 2265 3153</p>
            <p id="footer-p" class="col-8 card-text">taiwan.mdvi@gmail.com</p>
            <p id="footer-p" class="col-8 card-text mb-5">402 臺中市南區忠明南路758號10樓</p>
        </div>
    </div>
</div>

</body>

</html>