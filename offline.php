<?php
/*
 * Template Name: Offline
 *
 */
?>
<h1> <?php echo cwp_theme::the_offline_slug(); ?> </h1>

<!-- ###### -->
<div class="row">
    <div class="span12">
        <div class="well">
            <?php
            $cwp_offline_pg = get_page_by_title('Offline');
            if ($cwp_offline_pg): else:
                ?>

            <p><?php echo cwp_theme::the_offline_copy(); ?></p>
<?php endif; ?>
            <p class="social-icons font-larger">(</p></div>
        <!-- class content -->
    </div>
    <!-- ###### -->
</div>
<div class="row">
    <div class="span12">
        <?php //if(mod_mobile::detect()->isPhone()) echo "Phone"; ?>
        <div class="social">
            <a href="<?php the_author_meta('twitter', cwp_themeadmin()); ?>" target="_blank">
                <span class="social-icons font-larger">l</span></a>
            <a href="<?php the_author_meta('facebook', cwp_themeadmin()); ?>" target="_blank">
                <span class="social-icons font-larger">f</span></a>
            <a href="<?php the_author_meta('google_plus', cwp_themeadmin()); ?>" target="_blank">
                <span class="social-icons font-larger">g</span></a>
            <!-- class content -->
        </div>
        <!-- class content -->
        <div class="">
            <h3><a href="https://github.com/shawnsandy/AL-MANAGER" target="_blank" >AL.MANAGER on Github</a><br />
                <span class="label">Beta Release</span></h3>

            <!-- class content -->
        </div>
        <!-- ###### -->


    </div>
    <!-- ###### -->
    <!-- class content -->
</div>
<!-- ###### -->