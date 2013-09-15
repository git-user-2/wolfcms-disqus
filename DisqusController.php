<?php

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * The Disqus plugin allows the use of Disqus for comment functionality on a Wolf CMS installation.
 *
 * @package Plugins
 * @subpackage disqus
 *
 * @author Kyle Jones <whabash090@gmail.com>
 * @copyright Kyle Jones, 2013
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

/**
 * class DisqusController 
 *
 * @author Kyle Jones <whabash090@gmail.com>
 * @since Wolf version 0.7.7
 */
class DisqusController extends PluginController {

    private static function _checkPermission() {
        AuthUser::load();
        if (!AuthUser::isLoggedIn()) {
            redirect(get_url('login'));
        }
    }

    function __construct() {
        self::_checkPermission();

        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/disqus/views/sidebar'));
    }

    function index() {
        $this->display('disqus/views/index');
    }

    function settings() {
        $this->display('disqus/views/settings', array('settings' => Plugin::getAllSettings('disqus')));
    }

    function documentation() {
        $this->display('disqus/views/documentation');
    }

    function save() {
        if (isset($_POST['settings'])) {
            $settings = $_POST['settings'];
            $ret = Plugin::setAllSettings($settings, 'disqus');
            if ($ret) {
                Flash::set('success', __('The settings have been saved.'));
            } else {
                Flash::set('error', 'An error occured trying to save the settings.');
            }
        } else {
            Flash::set('error', 'Could not save settings, no settings found.');
        }
        redirect(get_url('plugin/disqus/settings'));
    }

}
