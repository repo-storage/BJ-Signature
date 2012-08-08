<?php
/**
 * @package WordPress
 * @subpackage Basejump
 */
?>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();
        global $post; ?>
        <?php core_functions::setPostViews(); ?>
        <section id="theme-cover">
            <div class="row">
                <div class="twelve columns">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <!-- ###end-row### -->
                </div>
            </div>
            <div class="row">
                <div class="four columns">

                    <?php the_excerpt(); ?>

                    <p>
                        <a href="" class="buy-button button large black radius" id="">
                            <?php _e('Buy This Theme', 'toolbox') ?>
                        </a>
                    </p>
                    <p>
                        <a href="" class="preview button small white radius"><?php _e('Preview Theme ', 'toolbox') ?></a>
                    </p>
                    <!-- ####column-end#### -->
                </div>
                <div class="eight columns">
                    <?php the_post_thumbnail('large'); ?>

                    <!-- ###end-row### -->
                </div>

            </div>
        </section>
        <section id="theme-details">
            <div class="row">
                <div class="twelve columns">
                    <h1><?php _e('Theme Description', 'toolbox'); ?></h1>
                    <?php the_content() ?>

                    <!-- ###end-row### -->
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <h1><?php _e('Theme Features', 'toolbox'); ?></h1>
                    <!-- ###end-row### -->
                </div>
            </div>
            <div class="row">
                <ul class="block-grid mobile three-up">
                    <li>
                        <h3><?php _e('Crafted UI', 'toolbox') ?></h3>
                        <ul>


                            <?php
                            $terms = get_the_terms($post->ID, 'design');

                            if ($terms && !is_wp_error($terms)) :

                                $draught_links = array();

                                foreach ($terms as $term) {
                                    echo "<li><strong>{$term->name}</strong> {$term->description}</li>";
                                }
                            endif;
                            ?>
                        </ul>


                    </li>
                    <li>
                        <h3><?php _e('Pressed In', 'toolbox') ?>
                        </h3>
                        <ul>


                            <?php
                            $terms = get_the_terms($post->ID, 'module');

                            if ($terms && !is_wp_error($terms)) :

                                $draught_links = array();

                                foreach ($terms as $term) {
                                    echo "<li><strong>{$term->name}</strong> {$term->description}</li>";
                                }

                            endif;
                            ?>
                        </ul>

                    </li>
                    <li>
                        <h3><?php _e('Integrated Plugins', 'toolbox') ?></h3>
                        <ul>
                            <?php
                            $terms = get_the_terms($post->ID, 'plugin');

                            if ($terms && !is_wp_error($terms)) :

                                $draught_links = array();

                                foreach ($terms as $term) {
                                    echo "<li><strong>{$term->name}</strong> {$term->description}</li>";
                                }
                            endif;
                            ?>
                        </ul>

                    </li>
                </ul>
            </div>
            <!-- ###### -->
        </section>





    <?php endwhile ?>
<?php endif; ?>

