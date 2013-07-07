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

// Install main disqus snippet
$PDO = Record::getConnection();

$PDO->exec(
    "INSERT INTO ".TABLE_PREFIX."snippet (
         name
         , filter_id
         , content
         , content_html
         , created_on
         , created_by_id
     ) VALUES (
         'disqus_boilerplate'
         , ''
         , '<div id=\"disqus_thread\"></div>\r\n<?php \$dsn = Plugin::getSetting(\"disqus_shortname\", \"disqus\"); ?>\r\n<script type=\"text/javascript\">\r\n    var disqus_shortname = \"<?php echo \$dsn; ?>\";\r\nvar disqus_identifier = '<?php echo \$this->id(); ?>';\r\n    (function() {\r\n        var dsq = document.createElement(\"script\"); dsq.type = \"text/javascript\"; dsq.async = true;\r\n        dsq.src = \"//\" + disqus_shortname + \".disqus.com/embed.js\";\r\n        (document.getElementsByTagName(\"head\")[0] || document.getElementsByTagName(\"body\")[0]).appendChild(dsq);\r\n    })();\r\n</script>\r\n<noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>\r\n<a href=\"http://disqus.com\" class=\"dsq-brlink\">comments powered by <span class=\"logo-disqus\">Disqus</span></a>'
         , '<div id=\"disqus_thread\"></div>\r\n<?php \$dsn = Plugin::getSetting(\"disqus_shortname\", \"disqus\"); ?>\r\n<script type=\"text/javascript\">\r\n    var disqus_shortname = \"<?php echo \$dsn; ?>\";\r\nvar disqus_identifier = '<?php echo \$this->id(); ?>';\r\n    (function() {\r\n        var dsq = document.createElement(\"script\"); dsq.type = \"text/javascript\"; dsq.async = true;\r\n        dsq.src = \"//\" + disqus_shortname + \".disqus.com/embed.js\";\r\n        (document.getElementsByTagName(\"head\")[0] || document.getElementsByTagName(\"body\")[0]).appendChild(dsq);\r\n    })();\r\n</script>\r\n<noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>\r\n<a href=\"http://disqus.com\" class=\"dsq-brlink\">comments powered by <span class=\"logo-disqus\">Disqus</span></a>'
         , '".date('Y-m-d H:i:s')."'
         , 1
     );"
);
