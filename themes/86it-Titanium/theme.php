<?php
/*================================================================================================
 FILE: theme.php 8/17/2017
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
 Nuke Patched                             v3.1.0       09/29/2005
 Theme Management                         v1.0.2       12/14/2005       
 MyNetworkSpace Patched                   v1.0.0       10/09/2009       
 SWF Header Class                         v1.0.0       10/09/2009       
 Resolution Checker                       v1.0.0       10/09/2009       
 Detect Browser Type                      v1.0.0       10/09/2009       
 Page Loading Animation                   v1.0.0       10/09/2009       
 Safari Browser Support                   v1.0.0       10/09/2009       
 FireFox Browser Support                  v1.0.0       10/09/2009       
 Internet Explorer Support                v1.0.0       10/09/2009       
 File Extension Support                   v1.0.0       10/09/2009       
=================================================================================================*/


/*****[BEGIN]*******************************************************************
 [ Base:    Theme Management                                            v5.0.0 ]
 *******************************************************************************/
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$theme_name = basename(dirname(__FILE__));

/****************************************/ 
/* Theme Colors Definition              */
/****************************************/
$bgcolor1   = $ThemeInfo['bgcolor1'];
$bgcolor2   = $ThemeInfo['bgcolor2'];
$bgcolor3   = $ThemeInfo['bgcolor3'];
$bgcolor4   = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];
/****************************************/

include_once(NUKE_THEMES_DIR.$theme_name.'/theme_info.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/tables.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_format_story.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_header.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_footer.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_blog_index.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_blog_article.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_music_index.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_theme_music_article.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_themecenterbox.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_themepreview.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_themesidebox.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/function_surveysidebox.php');
include_once(NUKE_THEMES_DIR.$theme_name.'/microdata_markup_tables.php');
/*****[END]*********************************************************************
 [ Base:    Theme Management                                            v5.0.0 ]
 *******************************************************************************/
?>