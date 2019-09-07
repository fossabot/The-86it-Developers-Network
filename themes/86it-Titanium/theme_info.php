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

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$current_theme = basename(dirname(__FILE__));

$param_names = array(
            'Link 1 URL',
            'Link 1 Text',
            'Link 2 URL',
            'Link 2 Text',
            'Link 3 URL',
            'Link 3 Text',
            'Link 4 URL',
            'Link 4 Text',
            'BG Color 1',
            'BG Color 2',
            'BG Color 3',
            'BG Color 4',
            'Text Color 1',
            'Text Color 2'
            );

$params = array(
            'link1',
            'link1text',
            'link2',
            'link2text',
            'link3',
            'link3text',
            'link4',
            'link4text',
            'bgcolor1',
            'bgcolor2',
            'bgcolor3',
            'bgcolor4',
            'textcolor1',
            'textcolor2'

            );

$default = array(
            'index.php',
            'HOME',
            'modules.php?name=Forums',
            'FORUMS',
            'modules.php?name=Downloads',
            'DOWNLOADS',
            'modules.php?name=Your_Account',
            'ACCOUNT',
            '#AAAFB2',
            '#878C92',
            '#F0F0F0',
            '#F3F4FF',
            '#FFFFFF',
            '#D59E00'
            );
global $ThemeInfo;
$ThemeInfo = LoadThemeInfo($current_theme);

?>