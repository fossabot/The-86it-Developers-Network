<?php
global $domain, $name, $facebook_plugin_width;
?>
<!-- Blog Comments Code by Ernest Allen Buffington 10/16/2017-->
<div data-colorscheme="light" class="fb-comments" data-href="<?=HTTPS?>modules.php?name=<?=$name?>&amp;file=article&amp;sid=<?=$sid?>&amp;mode=0&amp;order=0&amp;thold=-1" ref="<?=$domain?><?=$name?><?=$sid?>" data-num-posts="10" data-width="<?=$facebook_plugin_width?>"></div>
<?
echo "\n\n";
?>