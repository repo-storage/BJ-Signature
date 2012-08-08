<?php
/*
Template Name: Install Guide
*/

add_action('wp_enqueue_scripts', 'cwp_install_style');
function cwp_install_style(){
    wp_register_style('install-guide', get_stylesheet_directory_uri().'/library/css/install-guide.css');
 wp_enqueue_style('install-guide');
}

get_header();
?>

<!-- class content -->
<!-- Demo content taken from the normalize.css project: http://necolas.github.com/normalize.css/ -->
<header id="branding">
    <div class="container">
        <!-- container -->
        <div class="row"><!-- container -->
            <div class="twelve columns"><!-- container -->
                <hgroup>
                    <h1 id="site-title">
                        <span>
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?> Install Guide</a>
                        </span></h1>

                </hgroup>
            </div>

        </div>
    </div>
</header>
<section id="content">
<div class="container install-help">
    <!-- class content -->
    <section id="articles">
     <div class="row">
         <div class="tweleve columns">
             <!-- class content -->


        <!-- class content -->

        <h1>THEME SETUP INTRODUCTION</h1>
        <div class="screenshot">
            <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
            <!-- class content -->

        </div>

        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>
         </div>
     </div>
        <div class="row">
            <div class="twelve columns">
                  <h1>Requirements</h1>
                <div class="alert-box error">
                    <ul class="improtant">
                        <li>THE FOLLOWING ARE REQUIRED BEFORE YOU CAN INSTALL <?php echo get_current_theme() ;?> CAN BE INSTALLED</li>
                        <li>Wordpress 3.3</li>
                        <li>CoreWP Plugin : Plugin is required for running Crafted and pressed themes</li>

                    </ul>
                    <!-- class content -->
                </div>
                <!-- ###### -->



        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>

        <h1>Installation</h1>


         <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>

        <h2>Plugins</h2>
        <ul>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
        </ul>

        <h1>Setup</h1>
        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>
        <h1>Support</h1>
        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>
    </div>
         </div>
    </section>

</div>
     <div class="row">
            <div class="twelve columns">
                <div id="copright-info">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
                        All Rights Reserved.
                        <br />
                    </p>
                    <p class="designer-copy"> <a href="http://craftedandpressed.com" target="_BLANK">
                            Designed by Crafted and Pressed</a>.
                    </p>
                </div>
                <!-- ###end-row### -->
            </div>
        </div>
</section>


<?php get_footer(); ?>