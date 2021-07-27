<?php

get_header();
?>


<?php
if (is_page('協會服務')) { // Page with slug of "about".
    get_template_part('includes/section', 'services');
} elseif (is_page('生命故事')) { // Page with ID of "28".
    get_template_part('includes/section', 'blog');
} elseif (is_page('認識協會')) { // Home page of your website.
    get_template_part('includes/section', 'aboutus');
} else { // Any other page.

    get_template_part('includes/section', '404');
}
?>

