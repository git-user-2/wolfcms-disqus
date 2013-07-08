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

Plugin::setInfos(array(
	'id'          => 'disqus',
	'title'       => __('Disqus'),
	'description' => __('Disqus for Wolf CMS.'),
	'version'     => '0.0.1',
	'license'     => 'GPL',
	'author'      => 'Kyle Jones',
	'website'     => 'http://www.whabash.com/',
        'update_url'  => 'http://www.whabash.com/wolf_plugins/plugin-versions.xml',
	'require_wolf_version' => '0.5.5'
));

/**
 * Root location where Disqus plugin lives.
 */
define('DISQUS_ROOT', URI_PUBLIC.'wolf/plugins/disqus');

// Load the Disqus class into the system.
AutoLoader::addFile('Disqus', CORE_ROOT.'/plugins/disqus/Disqus.php');

// Add the plugin's tab and controller
Plugin::addController('disqus', __('Disqus'), 'administrator', false);

// Observe the necessary events.
Observer::observe('view_page_edit_plugins', 'disqus_display_dropdown');

/**
 * Allows for a dropdown box with disqus status on the edit page view in the backend.
 *
 * @param Page $page The object instance for the page that is being edited.
 */
function disqus_display_dropdown(&$page)
{
    echo '<p><label for="page_comment_status">'.__('Disqus').' </label><select id="page_comment_status" name="page[comment_status]">';
    echo '<option value="'.Disqus::NONE.'"'.($page->comment_status == Disqus::NONE ? ' selected="selected"': '').'>&#8212; '.__('none').' &#8212;</option>';
    echo '<option value="'.Disqus::OPEN.'"'.($page->comment_status == Disqus::OPEN ? ' selected="selected"': '').'>'.__('Open').'</option>';
    echo '</select></p>';
}
