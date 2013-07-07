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
 * The Disqus class represents a comment on a page.
 */
class Disqus extends Record
{
    const NONE = 0;
    const OPEN = 1;

} // end Disqus class
