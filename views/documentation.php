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
  On each page edit screen, you will have a drop-down box available called "Disqus".
  From this, you can choose between two options:
</p>
<ul>
  <li>none: if you do not want comments displayed on the page.</li>
  <li>open: if you want comments displayed and want people to be able to post comments.</li>
</ul>
<p>
  You will just need to add this line of code to your layout:
</p>
<pre>
&lt;?php
    if (Plugin::isEnabled('disqus'))
    {
        if ($this->comment_status != Disqus::NONE)
        {
            $this->includeSnippet('disqus_boilerplate');
        }
    }
?&gt;
</pre>

<h3>Notes</h3>
<p>
  If you disable the comments plugin, you can leave the code you added to the layout if you want. Use of the isEnabled() function prevents any PHP errors.
</p>

<h3>License</h3>
<p>
  This Wolf plugin is made available under the GNU GPL3 or later.
</p>
<p>
  Copyright (C) 2013 Kyle Jones &lt;whabash090@gmail.com&gt;
</p>
