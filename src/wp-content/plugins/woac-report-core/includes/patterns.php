<?php
/**
 * Block pattern registration.
 *
 * Exposes the standard layout as an inserter pattern under the
 * "Animal Chiropractic Collective" category.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'woac_report_core_register_patterns', 20);

/**
 * Register block patterns and pattern categories.
 *
 * @return void
 */
function woac_report_core_register_patterns() {
    if (!function_exists('register_block_pattern')) {
        return;
    }

    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'woac-reports',
            array(
                'label' => __('Animal Chiropractic Collective', 'woac-report-core'),
            )
        );
    }

    $pattern_content = '<!-- wp:paragraph {"placeholder":"' . esc_attr__('Write the introduction or brief summary here... (Tip: Remember to upload a Featured Image in the Settings sidebar on the right).', 'woac-report-core') . '"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":2,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-2"></figure>
<!-- /wp:gallery -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"url":"https://"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://">' . esc_html__('Read Full Paper / Source', 'woac-report-core') . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">' . esc_html__('References', 'woac-report-core') . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"' . esc_attr__('The Collective (or citation details)...', 'woac-report-core') . '"} -->
<p></p>
<!-- /wp:paragraph -->';

    register_block_pattern(
        'woac-report-core/standard-post',
        array(
            'title'         => __('Standard Report & Research Layout', 'woac-report-core'),
            'description'   => __('Standard layout with introduction, photo gallery, CTA link button, and References section.', 'woac-report-core'),
            'categories'    => array('woac-reports'),
            'postTypes'     => array('post'),
            'content'       => $pattern_content,
        )
    );
}
