<?php
/**
 * theme index file
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php cwp_layout::theme_header('theme'); ?>
<section id="content" class="">
    <div class="container">

            <div class="row">
                <div class="span12">
                    <section id="articles">
                        <?php cwp_layout::main_tpl(); ?>
                    </section>
                </div>
            </div>

        <!-- ###### -->
        <!-- ###### -->
    </div>
</section>
<?php cwp_layout::theme_footer(); ?>

