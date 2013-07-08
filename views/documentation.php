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

<h3>How to use this plugin</h3>
<p>
After enabling the plugin, navigate to the plugin's settings page and enter your 'disqus_shortname' value.  This is the identifier that Disqus uses for a given 'forum' as they call it.  You can find this value on the <a href="http://disqus.com/admin/settings/">Settings > General</a> Disqus admin page.
</p>
<p>
On each page edit screen, you will have a drop-down box available called 'Disqus'. This dropdown controls whether or not comments will be displayed on a given page, based on the following two options:
</p>
<ul>
  <li>None: if you do not want comments displayed on the page.</li>
  <li>Open: if you want comments displayed and want people to be able to post comments.</li>
</ul>
<p>
You will need to add the following lines of code to your layout - place them where you would like the comment section to appear:
</p>
<pre>
&lt;?php
    if (Plugin::isEnabled('disqus'))
    {
        if ($this-&gt;comment_status != Disqus::NONE)
        {
            $this-&gt;includeSnippet('disqus_boilerplate');
        }
    }
?&gt;
</pre>
<h3>License</h3>
<p>
This Wolf plugin is made available under the GNU GPL3 or later.<br>
<a href="http://www.gnu.org/licenses/gpl.html">http://www.gnu.org/licenses/gpl.html</a>
</p>
<p>
  Copyright (C) 2013 Kyle Jones &lt;whabash090@gmail.com&gt;
</p>
