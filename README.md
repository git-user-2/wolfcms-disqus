wolfcms-disqus
==============

##### Disqus comment integration for Wolf CMS

### Installation Instructions

1. Upload the plugin folder to your CMS\_ROOT/wolf/plugins/ directory.
2. Enable the plugin on the Administration tab of your Wolf CMS Admin page.

### Displaying Comment Threads

After enabling the plugin, navigate to the plugin's settings page and enter your 'disqus\_shortname' value. This is the identifier that Disqus uses for a given 'forum' as they call it. You can find this value on the [Settings > General][1] Disqus admin page.

On each page edit screen, you will now have a drop-down box available called 'Disqus'. This dropdown controls whether or not comments will be displayed on a given page based on two options:

  * None: if you do not want comments displayed on the page.
  * Open: if you want comments displayed and want people to be able to post comments.

Add the following lines of code to the bottom of your layout (just before the closing `</body>` tag):

```php
<?php if (Plugin::isEnabled('disqus')): ?>
    <?php if ($this->comment_status != Disqus::NONE): ?>
        <?php $this->includeSnippet('disqus_boilerplate'); ?>
    <?php endif; ?>
    <?php if (Plugin::getSetting('comment_count', 'disqus') == TRUE): ?>
        <?php $this->includeSnippet('comment_count'); ?>
    <?php endif; ?>
<?php endif; ?>
```

Then add the following line to your layout where you would like the comments section to appear:

```html
<div id="disqus_thread"></div>
```

### Displaying Comment Count Summaries

In order to display comment counts (enabled by default) you will need to add the below lines of code to each page on which you would like the comment count summaries to appear: 

```php
<?php if ($article->comment_status == Disqus::OPEN) : ?>
  with <a href="<?php echo $article->url(); ?>#disqus_thread" data-disqus-identifier="<?php echo $article->id(); ?>" > </a>
<?php endif; ?>
```

The `$article` variable will need to be changed based on which page you are adding the comment counts to. For instance on the '%B %Y Archive' page the variable in question becomes `$archive` and looks like this:

```php
<?php if ($archive->comment_status == Disqus::OPEN) : ?>
  with <a href="<?php echo $archive->url(); ?>#disqus_thread" data-disqus-identifier="<?php echo $archive->id(); ?>" > </a>
<?php endif; ?>
```

the full '%B %Y Archive' then looks like this:

```php
<?php $archives = $this->archive->get(); ?>
<?php foreach ($archives as $archive): ?>
<div class="entry">
  <h3><?php echo $archive->link(); ?></h3>
  <p class="info">Posted by <?php echo $archive->author(); ?> on <?php echo $archive->date(); ?>
  <?php if ($archive->comment_status == Disqus::OPEN) : ?>
    with <a href="<?php echo $archive->url(); ?>#disqus_thread" data-disqus-identifier="<?php echo $archive->id(); ?>" > </a>
  <?php endif; ?>
  </p>
</div>
<?php endforeach; ?>
```

### Change Log

#### 0.1.1

* updated documentation view to point to github readme

#### 0.1.0

* added 'comment_count' setting - yes or no value deciding whether or not comment counts will be displayed on post summaries
* disqus_boilerplate js snippet now placed at bottom of layout, only `<div id="disqus_thread"></div>` needs to be placed where comments should appear 
* updated install instructions

#### 0.0.1

* Initial release

### License

This Wolf plugin is made available under the GNU GPL3 or later.
http://www.gnu.org/licenses/gpl.html

Copyright (C) 2013 Kyle Jones

[1]: http://disqus.com/admin/settings/
