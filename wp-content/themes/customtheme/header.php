<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>台灣視多障協會官網</title>
    <meta name="description" content="突破視多障者安置的困境，成立臺灣第一個視多障者照顧訓練社區家園為宗旨。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>


</head>


<header>
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php
                                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                $path .= "34.80.64.221/"};
                                            echo $path;
                                            ?>">
                <img src="<?php
                            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                            if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                            } else ($_SERVER["SERVER_NAME"] == "http://"){
                                $path .= "34.80.64.221/"};
                            echo $path;
                            ?>/wp-content/uploads/2021/05/banner-logo.png" alt="" width="auto" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item icon">
                        <img src="<?php
                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                        $path .= "34.80.64.221/"};
                                    echo $path;
                                    ?>/wp-content/uploads/2021/05/認識協會0523.png" alt="">
                        <a class="nav-link navbar-item2" href="<?php
                                                                $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                                if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                                    $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                                } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                                    $path .= "34.80.64.221/"};
                                                                echo $path;
                                                                ?>/認識協會/" id=" myBtn">認識協會</a>
                    </li>
                    <li class="nav-item icon">
                        <img src="<?php
                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                        $path .= "34.80.64.221/"};
                                    echo $path;
                                    ?>/wp-content/uploads/2021/05/協會服務0523.png" alt="">
                        <a class="nav-link" href="<?php
                                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                        $path .= "34.80.64.221/"};
                                                    echo $path;
                                                    ?>/%e5%8d%94%e6%9c%83%e6%9c%8d%e5%8b%99/">協會服務</a>
                    </li>
                    <li class="nav-item icon">
                        <img src="<?php
                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                        $path .= "34.80.64.221/"};
                                    echo $path;
                                    ?>/wp-content/uploads/2021/05/部落格0523.png" alt="">
                        <a class="nav-link" href="<?php
                                                    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                                                    if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
                                                        $path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
                                                    } else ($_SERVER["SERVER_NAME"] == "http://"){
                                                        $path .= "34.80.64.221/"};
                                                    echo $path;
                                                    ?>/%e7%94%9f%e5%91%bd%e6%95%85%e4%ba%8b/">部落格</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://510.org.tw/donations/ASWCx1?" target="_blank">
                            <button class="btn btn-primary" type="submit">立即支持</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body <?php body_class(); ?>>