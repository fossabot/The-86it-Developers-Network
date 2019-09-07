<?php // TIDY 
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
=================================================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

$theme_name = basename(dirname(__FILE__));

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/
function themesidebox($title, $content, $bid=0) 
{
    global $ThemeSel, $theme_name, $screen_width, $sideboxwidth;



	// 236 is the smallest we can make the side blocks forr 16px font
	if($screen_width == "1280")
	$sideboxwidth = '236px';
	else
	if($screen_width == "1360")
	$sideboxwidth = '228px';
	else
	if($screen_width == "1421")
	$sideboxwidth = '228px';
	else
	if($screen_width == "1536")
	$sideboxwidth = '228px';
	else
	if($screen_width == "1537")
	$sideboxwidth = '228px';
	else
	if($screen_width == "1920")
	$sideboxwidth = '250px';
	else
	$sideboxwidth = '250px';
	
   echo"<table class=block cellSpacing=\"0\" cellPadding=\"0\" border=\"0\" width=\"".$sideboxwidth."\">"
     . "<tr >"
     . "<td background=\"".HTTPS."themes/$theme_name/tables/OpenTable/topmiddle.png\">"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/OpenTable/leftcorner.png\" border=\"0\" width=\"39\" height=\"50\"></td>"
     . "<td width=\"0\" align=\"center\" background=\"".HTTPS."themes/$theme_name/tables/OpenTable/topmiddle.png\">"
	 . "<div class=\"typeface-js\" style=\"font-family: Helvetiker\"><span class=\"title\">$title</span></div></td>"
     . "<td>"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/OpenTable/rightcorner.png\" border=\"0\" width=\"39\" height=\"50\"></td>"
     . "</tr>"
     . "<tr>"
     . "<td colSpan=\"3\">"
     . "<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">"
     . "<tr>"
     . "<td width=\"0\" background=\"".HTTPS."themes/$theme_name/tables/OpenTable/leftside.png\">"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/OpenTable/leftside.png\" border=\"0\" width=\"15\" height=\"4\"></td>"
     . "<td width=\"100%\" >"
     . "<table cellSpacing=\"0\" cellPadding=\"8\" width=\"100%\" border=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\">"
     . "<tr>"
     . "<td width=\"$main_blocks_table_width\">"
     . "$content         </td>"
     . "</tr>"
     . "</table>"
     . "</td>"
     . "<td width=\"0\" background=\"".HTTPS."themes/$theme_name/tables/CloseTable/rightside.png\">"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/CloseTable/rightside.png\" border=\"0\" width=\"15\" height=\"4\"></td>"
     . "</tr>"
     . "</table>"
     . "</td>"
     . "</tr>"
     . "<tr>"
     . "<td width=\"39\" height=\"52\">"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/CloseTable/leftbottomcorner.png\" border=\"0\" width=\"39\" height=\"52\"></td>"
     . "<td width=\"0\" height=\"27\" background=\"".HTTPS."themes/$theme_name/tables/CloseTable/bottommiddle.png\">        </td>"
     . "<td width=\"39\" height=\"27\">"
     . "<img src=\"".HTTPS."themes/$theme_name/tables/CloseTable/bottomrightcorner.png\" border=\"0\" width=\"39\" height=\"52\"></td>"
     . "</tr>"
     . "</table>";

//echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n";
//echo "<tr>\n";
//echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
//echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>\n";
//echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
//echo "</tr>\n";
//echo "</table>\n\n";
}
?>