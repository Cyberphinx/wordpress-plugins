<?php

/*
    Plugin Name: Our word filter plugin
    Description: A truly amazing plugin
    Version: 1.0
    Author: Liara
    Author URI: https://www.liara.com
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class OurWordFilterPlugin
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'ourMenu'));
    }

    function ourMenu()
    {
        add_menu_page('Words To Filter', 'Word Filter', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'), 'dashicons-smiley', 100);
        add_submenu_page('ourwordfilter', 'Word To Filter', 'Word List', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'));
        add_submenu_page('ourwordfilter', 'Word Filter Options', 'Options', 'manage_options', 'word-filter-options', array($this, 'optionSubPage'));
    }

    function wordFilterPage()
    { ?>
        Hello World.
<?php }
}

$ourWordFilterPlugin = new OurWordFilterPlugin();
