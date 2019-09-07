<?php
/*================================================================================================
 FILE: function_theme_blog_article.php 8/17/2017
 PHP-Nuke Titanium: v1.0.1z with Zend in mind~! 
 You are using a Enhanced PHP-Nuke Web Portal System (WCM) 
 
 This is a base core theme to help users/network members design their own themes: 
 86it Titanium Theme 8/17/2017 
 designed in full by Ernest Allen Buffington: ernest.buffington@gmail.com 813-732-3360
 
 This is the 86it-Titanium theme written and designed entirely by Ernest Allen Buffington
 All PHP, Java amd MySQL code as well as 100% of the graphics design was done by yours truly!
 
 I hope you enjoy the network and the themes as they have taken 13 years so far to design 
 and get everything working right. We needed one theme to base all the future designed themes 
 on. People needed a well designed base/core theme design to help convert and layout their own 
 custom design themes in the mere future.

 Nuke Patched                             v3.1.0       09/29/2005
 Theme Management                         v1.0.2       12/14/2005       
 Page Loading Animation                   v1.0.0       10/09/2009       
=================================================================================================*/

$theme_name = basename(dirname(__FILE__));

/* Function theme_blog_article() */
function themearticle($aid, $informant, $datetime, $title, $counter, $thetext, $topic, $topicname, $topicimage, $topictext, $writes = false) 
{
global $op, $admin, $sid, $tipath, $theme_name;
    /* */ 
    if(isset($op)) // No tabled in admin edit mode!
	{}else
    OpenTableModule();
  
     CloseTable();
}
?>