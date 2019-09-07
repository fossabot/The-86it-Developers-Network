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

global $digits_color, $fieldset_border_width, $fieldset_color, $define_theme_xtreme_209e, $avatar_overide_size, $ThemeInfo, $use_xtreme_voting, $make_xtreme_avatar_small;

$digits_color ='#ffb825';
$fieldset_border_width = '1px'; 
$fieldset_color = '#4e4e4e';
$define_theme_xtreme_209e = false;
$avatar_overide_size = '150';
$make_xtreme_avatar_small = true;
$use_xtreme_voting = false;
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

define('html5_titanium_theme_dir', 'themes/'.$theme_name.'/');
define('html5_titanium_images_dir', html5_titanium_theme_dir.'images/');
define('html5_titanium_style_dir', html5_titanium_theme_dir.'style/');
define('html5_titanium_js_dir', html5_titanium_style_dir.'js/');
define('html5_titanium_hdr_images', html5_titanium_theme_dir.'hdr/');
define('html5_titanium_ftr_images', html5_titanium_images_dir.'ftr/');

define('html5_titanium_width', ((substr($ThemeInfo['themewidth'], -1) == '%') ? str_replace('%','',($ThemeInfo['themewidth'])).'%' : str_replace('px','',($ThemeInfo['themewidth'])).'px'));

define('html5_titanium_copyright', 'HTML-5 Titanium Designed By: TheGhost<br />Copyright &copy '.date('Y').' The 86it Developers Network<br />All Rights Reserved');
define('html5_titanium_copyright_click', 'Click the Link to Display Copyrights');

addCSSToHead(html5_titanium_style_dir.'style.css','file');

global $currentfont, $fontsize;
/* 1 = Monospace stack */
/* 2 = Impact-based sans serif stack */
/* 3 = Trebuchet-based sans serif stack */
/* 4 = Verdana-based sans serif stack */
/* 5 = Helvetica/Arial-based sans serif stack */
/* 6 = Traditional Garamond-based serif stack */
/* 7 = Modern Georgia-based serif stack */
/* 8 = Times New Roman-based stack */
$currentfont = '7';
$fontsize = '16px';

//
//
//optiontext
# We load the style sheet with PHP so that when we are making changes and refeshing 
# the page we do not have to delete the browser cache every time.
# This is a little trick that Ernest Allen Buffington taught me in 2003... Thanks Ernest :)   
echo "<style type=\"text/css\">\n";
################################################################
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/async-hide.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/async-hide.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/a-links.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/a-links.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/body.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/body.php'); }                                                     
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/block.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/block.php'); }                                             
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/maintable.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/maintable.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/menunowrap.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/menunowrap.php'); }                                                       
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/categories.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/categories.php'); }                                                      
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/modules.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/modules.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/storycat.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/storycat.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/myButton.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/myButton.php'); }
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/css/style.php')){ require_once(NUKE_THEMES_DIR.$ThemeSel.'/css/style.php'); }
################################################################
echo "/* Sets the polltitle elements Style with CSS 3 */\n"; 
echo ".polltitle {\n";
echo "color: #000000;\n";
echo "text-decoration: none;\n";
//echo "line-height: 1.28;\n";
echo "font-size: ".$fontsize.";\n";
echo "font-weight: normal;\n";
echo "font-style: normal;\n";
switch ($currentfont)
{
    case "1":
    echo "font-family: Consolas, 
	     \"Andale Mono WT\", 
		 \"Andale Mono\", 
		 \"Lucida Console\", 
		 \"Lucida Sans Typewriter\", 
		 \"DejaVu Sans Mono\", 
		 \"Bitstream Vera Sans Mono\", 
		 \"Liberation Mono\", 
		 \"Nimbus Mono L\", 
		 Monaco, 
		 \"Courier New\", 
		 Courier, monospace;\n";
    break;
	case "2":
    echo "font-family: Impact, 
	     Haettenschweiler, 
		 \"Franklin Gothic Bold\", 
		 Charcoal, 
		 \"Helvetica Inserat\", 
		 \"Bitstream Vera Sans Bold\", 
		 \"Arial Black\", sans-serif;\n";
	break;
	case "3":
    echo "font-family: \"Segoe UI\", 
	     Candara, 
		 \"Bitstream Vera Sans\", 
		 \"DejaVu Sans\", 
		 \"Bitstream Vera Sans\", 
		 \"Trebuchet MS\", 
		 Verdana, 
		 \"Verdana Ref\", 
		 sans-serif;\n";
    break;
	case "4":
	echo "font-family: Corbel, 
	     \"Lucida Grande\", 
		 \"Lucida Sans Unicode\", 
		 \"Lucida Sans\", 
		 \"DejaVu Sans\", 
		 \"Bitstream Vera Sans\", 
		 \"Liberation Sans\", 
		 Verdana, 
		 \"Verdana Ref\", 
		 sans-serif;\n";
	break;
	case "5":
	echo "font-family: Frutiger, 
	     \"Frutiger Linotype\", 
		 Univers, Calibri, 
		 \"Gill Sans\", 
		 \"Gill Sans MT\", 
		 \"Myriad Pro\", 
		 Myriad, 
		 \"DejaVu Sans Condensed\", 
		 \"Liberation Sans\", 
		 \"Nimbus Sans L\", 
		 Tahoma, Geneva, 
		 \"Helvetica Neue\", 
		 Helvetica, Arial, sans-serif;\n";
	break;
	case "6":
	echo "font-family: \"Palatino Linotype\", 
	     Palatino, 
		 Palladio, 
		 \"URW Palladio L\", 
		 \"Book Antiqua\", 
		 Baskerville, 
		 \"Bookman Old Style\", 
		 \"Bitstream Charter\", 
		 \"Nimbus Roman No9 L\", 
		 Garamond, 
		 \"Apple Garamond\", 
		 \"ITC Garamond Narrow\", 
		 \"New Century Schoolbook\", 
		 \"Century Schoolbook\", 
		 \"Century Schoolbook L\", 
		 Georgia, 
		 serif;\n";
    break;		 
	case "7";
	echo "font-family: Constantia, 
	     \"Lucida Bright\", 
		 Lucidabright, 
		 \"Lucida Serif\", 
		 Lucida, 
		 \"DejaVu Serif\", 
		 \"Bitstream Vera Serif\", 
		 \"Liberation Serif\", 
		 Georgia, 
		 serif;\n";		 
    break;
	case "8";
	echo "font-family: Cambria, 
	     \"Hoefler Text\", 
		 Utopia, 
		 \"Liberation Serif\", 
		 \"Nimbus Roman No9 L Regular\", 
		 Times, 
		 \"Times New Roman\", 
		 serif;\n";
    break;
}
echo "background-color: none;\n";
echo "}\n";
################################################################
echo "</style>\n";   

addCSSToHead(html5_titanium_style_dir.'menu.css','file');

include_once(html5_titanium_theme_dir.'/theme_info.php');
include_once(html5_titanium_theme_dir.'/tables.php');
include_once(html5_titanium_theme_dir.'/function_format_story.php');
include_once(html5_titanium_theme_dir.'/function_theme_header.php');
include_once(html5_titanium_theme_dir.'/function_theme_footer.php');
include_once(html5_titanium_theme_dir.'/function_themeindex.php');
include_once(html5_titanium_theme_dir.'/function_themearticle.php');
include_once(html5_titanium_theme_dir.'/function_themecenterbox.php');
include_once(html5_titanium_theme_dir.'/function_themepreview.php');
include_once(html5_titanium_theme_dir.'/function_themesidebox.php');
include_once(html5_titanium_theme_dir.'/function_surveysidebox.php');
/*****[END]*********************************************************************
 [ Base:    Theme Management                                            v5.0.0 ]
 *******************************************************************************/
?>