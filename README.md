wolfcms-disqus
==============

##### Disqus comment integration for Wolf CMS

### Displaying Comment Threads

After enabling the plugin, navigate to the plugin's settings page and enter your 'disqus\_shortname' value. This is the identifier that Disqus uses for a given 'forum' as they call it. You can find this value on the [Settings > General][1] Disqus admin page.

On each page edit screen, you will have a drop-down box available called 'Disqus'. This dropdown controls whether or not comments will be displayed on a given page, based on the following two options:

  * None: if you do not want comments displayed on the page.
  * Open: if you want comments displayed and want people to be able to post comments.

You will need to add the following lines of code to your layout - place them where you would like the comment section to appear:

```php
<?php
    if (Plugin::isEnabled('disqus'))
    {
        if ($this->comment_status != Disqus::NONE)
        {
            $this->includeSnippet('disqus_boilerplate');
        }
    }
?>
```
### Displaying Comment Count Summaries

In order to display comment counts (enabled by default) you will need to add the below lines of code to the bottom of your layout. 

```php
<?php
    if (Plugin::isEnabled('disqus'))
    {
        if (Plugin::getSetting('comment_count', 'disqus') == TRUE)
        {
            $this->includeSnippet('comment_count');
        }
    }
?>
```

### License

This Wolf plugin is made available under the GNU GPL3 or later.
http://www.gnu.org/licenses/gpl.html

Copyright (C) 2013 Kyle Jones

[1]: http://disqus.com/admin/settings/
