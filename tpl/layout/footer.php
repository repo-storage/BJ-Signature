<?php
/**
 * @package WordPress
 * @subpackage Core-SF
 */
?>
<section id="footer" >
<div class="container">
<div class="row visible-desktop"><!-- container -->

                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-1')) : ?>

                        <!-- class content -->
                        <h3><?php _e('Pages','basejump')  ?></h3>
                        <nav>
                            <ul>
                                <?php wp_list_pages('title_li=&number=6') ?>
                            </ul>
                        </nav>

                    <?php endif; ?>

                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-2')) : ?>
                        <h3><?php _e('Categories','basejump')  ?></h3>
                        <nav>
                            <ul>
                                <?php wp_list_categories('title_li=&number=6') ?>
                            </ul>
                        </nav>
                    <?php endif ?>
                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-3')) : ?>

                    <h3><?php _e('Info 3','basejump')  ?></h3>
                        <p>
                            Inceptos turpis convallis dolor etiam arcu sapien nibh fames, curabitur torquent eu nostra iaculis nisl blandit sit, ut ipsum elit iaculis orci litora primis.
                        </p>
                    <?php endif ?>
                </div>
                <div class="span3 info">
                    <?php if (!dynamic_sidebar('info-4')) : ?>

                    <h3><?php _e('Contact', 'base_jump') ?></h3>
                        <address>
        <strong>Signature.</strong><br>
        Your Address, Suite 600<br>
        The City, LL 00000<br>
        <abbr title="Phone">P:</abbr><span> <span id="gc-number-0" class="gc-cs-link" title="Call with Google Voice">(123) 456-7890</span>
      </span></address>
                    <?php endif ?>
                </div>


        </div>
        <div class="row">
            <div class="span12">
                <div id="copright-info">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
                        <?php echo cwp_theme::the_copyright_copy(); ?>.
                        <br />
                    </p>
                    <p class="designer-copy"> <a href="http://craftedandpressed.com" target="_BLANK">
                            <?php _e('Designed by Crafted and Pressed', 'basejump') ?> </a>.
                    </p>
                </div>
                <!-- ###end-row### -->
            </div>
        </div>
</div>



</section>
<?php get_footer() ?>
    <!-- ***page*** -->
