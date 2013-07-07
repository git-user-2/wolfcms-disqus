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

?>
<!-- <p class="button"><a href="<?php //echo get_url('plugin/disqus/'); ?>"><img src="<?php //echo ICONS_URI;?>comment-32-ns.png" align="middle" alt="page icon" /> <?php //echo __('Disqus'); ?></a></p> -->
<p class="button"><a href="<?php echo get_url('plugin/disqus/settings'); ?>"><img src="<?php echo ICONS_URI;?>settings-32-ns.png" align="middle" alt="page icon" /> <?php echo __('Settings'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/disqus/documentation/'); ?>"><img src="<?php echo ICONS_URI;?>documentation-32-ns.png" align="middle" alt="page icon" /> <?php echo __('Documentation'); ?></a></p>
