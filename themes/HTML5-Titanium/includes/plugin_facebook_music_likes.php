<?php
global $domain, $name, $facebook_plugin_width;

echo "\n\n";
?>
<!-- Titanium Tunes Like Button Code by Ernest Allen Buffington 10/16/2017-->
<div class="fb-like" data-width="<?=$facebook_plugin_width?>" data-href="<?=HTTPS?>modules.php?name=<?=$name?>&amp;file=article&amp;sid=<?=$sid?>&amp;mode=0&amp;thold=-1" ref="<?=$domain?><?=$name?><?=$sid?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-colorscheme="light" data-share="true" font="verdana"></div>
<?
echo "\n\n";
?>