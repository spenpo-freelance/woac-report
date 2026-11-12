<?php
/**
 * Plugin Name: WOAC Report Core
 * Description: Starter layout templates, block patterns, and author defaults for report.worldanimalchiro.com.
 * Version: 0.1.0
 * Author: Animal Chiropractic Collective
 * Text Domain: woac-report-core
 * Requires at least: 6.7
 * Requires PHP: 8.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('WOAC_REPORT_CORE_VERSION', '0.1.0');
define('WOAC_REPORT_CORE_FILE', __FILE__);
define('WOAC_REPORT_CORE_DIR', plugin_dir_path(__FILE__));
define('WOAC_REPORT_CORE_URL', plugin_dir_url(__FILE__));

require_once WOAC_REPORT_CORE_DIR . 'includes/template.php';
require_once WOAC_REPORT_CORE_DIR . 'includes/patterns.php';
