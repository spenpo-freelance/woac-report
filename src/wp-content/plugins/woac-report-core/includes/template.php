<?php
/**
 * Post block template registration.
 *
 * Configures the starter layout on the `post` post type so that
 * clicking "Add New Post" automatically pre-populates with:
 * 1. Introduction paragraph (with featured image guidance placeholder)
 * 2. Photo gallery block
 * 3. Call-to-action button(s)
 * 4. References heading & placeholder
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'woac_report_core_register_post_template', 20);

/**
 * Register default post block template.
 *
 * @return void
 */
function woac_report_core_register_post_template() {
    $post_type_object = get_post_type_object('post');
    if (!$post_type_object) {
        return;
    }

    $post_type_object->template = array(
        array(
            'core/paragraph',
            array(
                'placeholder' => __('Write the introduction or brief summary here... (Tip: Remember to upload a Featured Image in the Settings sidebar on the right).', 'woac-report-core'),
            ),
        ),
        array(
            'core/gallery',
            array(
                'columns' => 2,
                'linkTo'  => 'none',
            ),
        ),
        array(
            'core/buttons',
            array(
                'layout' => array(
                    'type'           => 'flex',
                    'justifyContent' => 'left',
                ),
            ),
            array(
                array(
                    'core/button',
                    array(
                        'text' => __('Read Full Paper / Source', 'woac-report-core'),
                        'url'  => 'https://',
                    ),
                ),
            ),
        ),
        array(
            'core/heading',
            array(
                'level'   => 2,
                'content' => __('References', 'woac-report-core'),
            ),
        ),
        array(
            'core/paragraph',
            array(
                'placeholder' => __('The Collective (or citation details)...', 'woac-report-core'),
            ),
        ),
    );

    // Keep template unconstrained so authors can add additional blocks as needed
    $post_type_object->template_lock = false;
}
