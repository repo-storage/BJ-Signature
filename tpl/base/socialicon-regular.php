<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="social">
    <a href="<?php the_author_meta('twitter', cwp_themeadmin()); ?>">
        <span class="social-icons font-large">l</span></a>
    <a href="<?php the_author_meta('facebook', cwp_themeadmin()); ?>">
        <span class="social-icons font-large">f</span></a>
    <a href="<?php the_author_meta('google_plus', cwp_themeadmin()); ?>">
        <span class="social-icons font-large">g</span></a>
    <a href="<?php the_author_meta('linkedin', cwp_themeadmin()); ?>">
        <span class="social-icons font-large">i</span></a>
    <a href="http://feeds.feedburner.com/<?php the_author_meta('feedburner_page', cwp_themeadmin()); ?>" rel="">
        <span class="social-icons font-large">r</span></a>
    <!-- class content -->
</div>