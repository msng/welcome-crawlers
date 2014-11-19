<?php

/**
 * Class WelcomeCrawlers
 */
class WelcomeCrawlers {
    /**
     * @var string Name of the PHP file for Reading option
     */
    public static $optionsReadingFilename = 'options-reading.php';

    /**
     * @var string The URL for the root of this plugin
     */
    public static $pluginUrl;

    /**
     * Initialization
     */
    public static function init() {
        if ( is_admin() && basename($_SERVER['PHP_SELF']) == self::$optionsReadingFilename) {
            self::$pluginUrl = plugins_url(basename(dirname(dirname(__FILE__))));

            add_action('admin_head', array(__CLASS__, 'customAdminHeader'), 100);
        }

    }

    /**
     * Adds CSS and JavaScript
     */
    public static function customAdminHeader()
    {
        echo "\n";
//        echo '<link rel="stylesheet" href="' . self::$pluginUrl . '/css/welcome-crawlers.css" />' . "\n";
        echo '<script src="' . self::$pluginUrl . '/js/welcome-crawlers.js" />' . "\n";
    }
}
