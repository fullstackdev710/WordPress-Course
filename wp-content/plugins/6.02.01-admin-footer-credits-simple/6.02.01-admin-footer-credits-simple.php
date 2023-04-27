<?php
/*
Plugin Name: 6.02.01 - Simple Plugin
Description: Displays a message in the admin footer.
Version: 1.0.0
Contributors: zgordon
Author: Peace Marketing
Author URI: https://peace-marketing.com/
License: GPLv2 or later
Text Domain: wpplugin
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

function wpplugin_settings_pages()
{
  add_menu_page(
    __('Plugin Name', 'wpplugin'),
    __('Plugin Menu', 'wpplugin'),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );

  add_submenu_page(
    'wpplugin',
    __('Plugin Feature 1', 'wpplugin'),
    __('Feature 1', 'wpplugin'),
    'manage_options',
    'wpplugin-feature-1',
    'wpplugin_settings_subpage_markup'
  );

  add_submenu_page(
    'wpplugin',
    __('Plugin Feature 2', 'wpplugin'),
    __('Feature 2', 'wpplugin'),
    'manage_options',
    'wpplugin-feature-2',
    'wpplugin_settings_subpage_markup'
  );
}
add_action('admin_menu', 'wpplugin_settings_pages');

function wpplugin_settings_page_markup()
{
  if (!current_user_can('manage_options')) {
    return;
  }
?>
  <div class="wrap">
    <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
    <p><?php esc_html_e('Some content.'); ?></p>
  </div>
<?php
}

function wpplugin_settings_subpage_markup()
{
  if (!current_user_can('manage_options')) {
    return;
  }
?>
  <div class="wrap">
    <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
    <p><?php esc_html_e('Some content.', 'wpplugin'); ?></p>
  </div>
<?php
}

function wpplugin_default_sub_pages()
{
  add_dashboard_page(
    __('Cool Default Sub Page', 'wpplugin'),
    __('Custom Sub Page', 'wpplugin'),
    'manage_options',
    'wpplugin-subpage',
    'wpplugin_settings_page_markup'
  );
}

add_action('admin_menu', 'wpplugin_default_sub_pages');

//Add a link to your settings page in your plugin
function wpplugin_add_settings_link($links)
{
  $settings_link = '<a href="admin.php?page=wpplugin">' . __('Settings') . '</a>';
  array_push($links, $settings_link);
  return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename(__FILE__);
add_filter($filter_name, 'wpplugin_add_settings_link');
