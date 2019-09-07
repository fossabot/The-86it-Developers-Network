<?php
/*================================================================================================
 FILE: theme.php 8/17/2017
 PHP-Nuke Titanium: v1.0.1z with Zend in mind~! 
 You are using a Enhanced PHP-Nuke Web Portal System (WCMS) 
 
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
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) { exit('Access Denied'); }

$theme_name = basename(dirname(__FILE__));

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/
function themeheader() 
{
	global $ThemeSel, $domain, $screen_res, $user, $cookie, $prefix, $sitekey, $db, $name, $banners, $file_extension, $op;

echo "\n\n<!-- START THEME HEADER ".$domain.". -->\n\n";



    echo "<body style=\"margin:0;padding:0\">\n"; 
    
	global $browser;
    $titanium_browser = new Browser();
	
############################################################################
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript.php'))    #      Added by Ernest Buffington
{                                                                          ###### Load SWF class - used for automaticly displaying *.swf 
  include(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript.php');           #      Jan 1st 2012 
}                                                                          #
############################################################################	

############################################################################
if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/classes/class.swfheader.php'))#      Added by Ernest Buffington
{                                                                          ###### Load SWF class - used for automaticly displaying *.swf 
  include(NUKE_THEMES_DIR.$ThemeSel.'/classes/class.swfheader.php');       #      Jan 1st 2012 
}                                                                          #
############################################################################
    global $domain;
    echo "\n\n<!-- START Header ".$domain.". -->\n\n";
    echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
    echo "<tr>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"20\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"231\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"19\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"16\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"179\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"43\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"24\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"145\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"73\" height=\"0\"></td>\n";
    echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" width=\"20\" height=\"0\"></td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td rowspan=\"5\"><img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_01.png\" width=\"100%\" height=\"198\"></td>\n";
    echo "<td valign=\"top\" align=\"center\" width=\"198\" background=\"".HTTPS."themes/".$ThemeSel."/header/background_theghost.png\" rowspan=\"5\">\n";
    echo "</td>\n";

    // this is where you will embed your logo design
	echo "<td valign=\"top\" align=\"center\" rowspan=\"5\" background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_full.png\" width=\"100%\" height=\"198\">";

	if ($_COOKIE["titanium_resolution_width"] == '1920')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"8\"><br>\n";
	}
	
	if (isset($cookie[1]))
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   {

	   }
	}


	if ($_COOKIE["titanium_resolution_width"] == '1920')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"2\"><br>\n";
	}
	
	
	if (!isset($cookie[1]))
	{
		
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   {
	     echo "<table width=\"0\"><td>";
	     echo "<fieldset disabled><legend><font color=\"C000000\"><b>ALERT</b></font></legend>";
	     echo "<div class=\"supersmall\" align=\"center\">";
	     echo "<b>YOU ARE CURRENTLY NOT LOGGED IN<br>";
	     echo "PLEASE <u><a href=\"".HTTPS."modules.php?name=Your_Account&amp;op=new_user\"><font color=\"c00000\">CREATE</font></a></u> AN ACCOUNT OR <u><a href=\"".HTTPS."modules.php?name=Your_Account\"><font color=\"C00000\">LOGIN</font></a></u></b>";
	     echo "</fieldset>";
	     echo "</div>";
	     echo "</td></table>";
	     echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"17\"><br>\n";
	   }
	}
	
	
   if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
   {
		   
   }
   else
   {
     echo "<img src=\"".HTTPS."themes/".$ThemeSel."/swf/center.png\" border=\"0\" align=\"center\" title=\"The Ghost\" height=\"62\" width=\"361\" >";
   }
   echo "</td>";

   echo "<td background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_full.png\" align=\"right\" colspan=6>\n";
   
   if( $titanium_browser->getBrowser() == Browser::BROWSER_IPHONE)
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/menu_replacement.png\" border=\"0\" align=\"adbsmiddle\" title='' width=\"480\" >";

   else
   if( $titanium_browser->getBrowser() == Browser::BROWSER_IPAD)
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/menu_replacement.png\" border=\"0\" align=\"adbsmiddle\" title='' width=\"480\" >";

   else
   if( $titanium_browser->getBrowser() == Browser::BROWSER_IPOD)
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/menu_replacement.png\" border=\"0\" align=\"adbsmiddle\" title='' width=\"480\" >";

   else
   if( $titanium_browser->getBrowser() == Browser::BROWSER_ANDROID)
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/menu_replacement.png\" border=\"0\" align=\"adbsmiddle\" title='' width=\"480\" >";
   
   if($titanium_browser->getPlatform()== "Windows")
   {                                                        
      if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/swf/menu.swf'))
      {
        ?>
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,42,34"
        id="menu.swf" width="480" height="50">
        <param name="movie" value="<?=HTTPS?>themes/<?=$ThemeSel?>/swf/menu.swf">
        <param name="bgcolor" value="#CECECE">
        <param name="quality" value="best">
        <param name="wmode" value="direct">
        <param name="allowscriptaccess" value="samedomain">
        <embed type="application/x-shockwave-flash" 
        pluginspage="https://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" 
        name="<?=HTTPS?>themes/<?=$ThemeSel?>/swf/menu.swf" 
        width="480" height="50" 
        src="<?=HTTPS?>themes/<?=$ThemeSel?>/swf/menu.swf" 
        quality="best" 
        wmode="transparent" 
        allowscriptaccess="samedomain">
       </object>     	   
       <?
      }
  
   }
  
   echo "</td>\n";

   echo "<td rowspan=5>\n";
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_05.png\" width=\"20\" height=\"198\"></td>\n";
   echo "</tr>\n";
   
   // add a top menu bar here if you like or you could broaden the theme design!
   echo "<tr>\n";  
   echo "<td colspan=\"6\" align=\"center\" bgcolor=\"CECECE\" valign=\"middle\" width=\"580\" height=\"75\">";

   // This is where we load the advertising banner in the top right
   // hand corner of the header
   $networkads = ads(0); //472x74 banner is all that will fit
   
   if(empty($networkads)) 
   {
      echo "<a href=\"index.php\" target=\"_self\">\n";
      echo "<img src=\"".HTTPS."themes/".$ThemeSel."/banners/php-nuke-titanium.png\" border=\"0\" width=\"472\" height=\"74\"></a>";
   }
   else
   {
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
       echo "$networkads";
   }

   echo "</td></tr>\n";
   echo "<tr>\n";
   echo "<td colspan=\"6\"><img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_07.png\" width=\"480\" height=\"9\"></td>\n";
   echo "</tr>\n";
   echo "<tr>\n";
   echo "<td rowspan=\"2\"><img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_08.png\" width=\"16\" height=\"64\"></td>\n";

   #############################################################################################################################################
   #  //Blog Search enabled // Blog search - uncomment the one you would like to use
   #############################################################################################################################################   
   //Blog Search enabled
   echo "<td background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_search.png\" width=\"179\" height=\"31\">";
   echo "<form action=\"".HTTPS."modules.php?op=modload&amp;name=Blog_Search&amp;file=index\" method=\"post\">";
   echo "<input class=\"select\" type=\"text\" name=\"query\" value style=\"width:140;height:18;FONT-SIZE:10px;color:#000000;\" size=\"38\">";
   echo "</td>";
   echo "<td background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_s2.png\" width=\"43\" height=\"31\">";
   echo "<input class=\"button\" type=\"submit\" value=\"GO\" border=\"0\" width=\"19\" height=\"15\">";
   echo "</td>";
   echo "</form>";
   echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_11.png\" width=\"24\" height=\"31\"></td>";
   echo "<td colspan=2 background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_time.png\" width=\"218\" height=\"31\">\n";
   
   
   //load the clock that is on the top right hand side of the header!
   echo "<a href=\"javascript:clear_cache.submit()\">\n";
   echo "<script language=\"javascript\">\n";
   echo "<!--\n";
   echo "new LiveClock('Tahoma','1','#FFFFFF','#','<b>Time : ','</b>','174','1','1','0','2','null');\n"; 
   echo "//-->\n";
   echo "</script>\n";
   echo "</a>\n";
   //load the clock that is on the top right hand side of the header!
   
   echo "</td>\n";
   echo "</tr>\n";
   echo "<tr>\n";
   echo "<td valign=middle colspan=\"4\" background=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_user.png\" width=\"391\" height=\"33\">";
   
   echo "<font size=\"2\" face=\"arial\">";
   
   //screen resolution in the header
   	if ($_COOKIE["titanium_resolution_width"] == '1280')
	{
      echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"2\"><br>\n"; //this must stay at 3 in 1920x1080
	}
    else
  	if ($_COOKIE["titanium_resolution_width"] == '1920')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
       echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"3\"><br>\n"; //this must stay at 3 in 1920x1080
	}
    else
  	if ($_COOKIE["titanium_resolution_width"] == '1536')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
       echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"3\"><br>\n"; //this must stay at 3 in 1920x1080
	}
    else
   	if ($_COOKIE["titanium_resolution_width"] == '1360')
	{
      echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"2\"><br>\n"; //this must stay at 2 in 1360x768
	}
	else
    echo "<img src=\"".HTTPS."themes/".$ThemeSel."/header/spacer.png\" height=\"2\"><br>\n"; //this must stay at 2 for lower resolutions
   
   
   	if ($_COOKIE["titanium_resolution_width"] == '1280')
	{
   echo "<div class=\"monitor\" align=\"left\"><img src=\"".HTTPS."themes/".$ThemeSel."/images/titanium/tiny_widescreen.png\" width=\"15\" align=\"bottom\"> Your Monitor Resolution is <font color=\"c00000\"><b>".$_COOKIE["theme_resolution"]."</b><font></div><font><br>";
	}
    else   
   	if ($_COOKIE["titanium_resolution_width"] == '1920')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   {
   echo "<div class=\"monitor\" align=\"left\"><img src=\"".HTTPS."themes/".$ThemeSel."/images/titanium/tiny_widescreen.png\" width=\"14\" align=\"absmiddle\"> Your Monitor Resolution is <font color=\"c00000\"><b>".$_COOKIE["theme_resolution"]."</b><font></div><font><br>";
	   }
	}
    else   
   	if ($_COOKIE["titanium_resolution_width"] == '1536')
	{
       if($titanium_browser->getBrowser() == Browser::BROWSER_FIREFOX)
	   {
		   
	   }
	   else
	   {
   echo "<div class=\"monitor\" align=\"left\"><img src=\"".HTTPS."themes/".$ThemeSel."/images/titanium/tiny_widescreen.png\" width=\"14\" align=\"absmiddle\"> Your Monitor Resolution is <font color=\"c00000\"><b>".$_COOKIE["theme_resolution"]."</b><font></div><font><br>";
	   }
	}
	else
   	if ($_COOKIE["titanium_resolution_width"] == '1360')
	{
   echo "<div class=\"monitor\" align=\"left\"><img src=\"".HTTPS."themes/".$ThemeSel."/images/titanium/tiny_widescreen.png\" width=\"15\" align=\"bottom\"> Your Monitor Resolution is <font color=\"c00000\"><b>".$_COOKIE["theme_resolution"]."</b><font></div><font><br>";
	}
   else
   {
   echo "<div class=\"monitor\" align=\"left\"><img src=\"".HTTPS."themes/".$ThemeSel."/images/titanium/tiny_widescreen.png\" width=\"15\" align=\"bottom\"> Your Monitor Resolution is <font color=\"c00000\"><b>".$_COOKIE["theme_resolution"]."</b><font></div><font><br>";
   }
   
   
   echo "</td><td><img src=\"".HTTPS."themes/".$ThemeSel."/header/nukestyle-hd_u2.png\" width=\"73\" height=\"33\"></td></font>\n";
   echo "</tr>\n";
   echo "</table>\n"; 

   echo "<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">\n";
   echo "<tr>\n";
   echo "<td width=\"100%\" height=\"5\">\n";
   echo "<img height=\"5\" src=\"".HTTPS."themes/".$ThemeSel."/header/ltbg.png\" width=\"20\"></td>\n";
   echo "<td width=\"20\" height=\"5\">\n";
   echo "<img height=\"5\" src=\"".HTTPS."themes/".$ThemeSel."/header/rtbg.png\" width=\"20\"></td>\n";
   echo "</tr>\n";
   echo "</table>\n";

   echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n";
   echo "<tr valign=\"top\">\n";
   echo "<td width=\"20\" valign=\"top\" background=\"".HTTPS."themes/".$ThemeSel."/sides/leftbg.png\">\n";
   echo "<img src=\"".HTTPS."themes/".$ThemeSel."/sides/leftbg.png\" width=\"20\" height=\"15\" border=\"0\">";
   echo "</td>\n";
   echo "<td width=\"20\">\n";

    
	if(blocks_visible('left')) 
	{
		global $op, $file;

	    if (($op =="info") or ($op =="newsletter") or ($op =="messages"))
		{
            
		}
		else
		{
            echo "\n\n<!-- START Left Blocks ".$domain.". -->\n\n";  
			blocks('left'); 
            echo "\n\n<!-- END Left Blocks ".$domain.". -->\n\n"; 
		}
    } 
	else 
	{

    }
   //this controls the gap between the left block and the left side of the center table!!!
    echo "</td>\n"
    	."<td><img src=\"".HTTPS."themes/".$ThemeSel."/images/spacer.png\" width=\"7\" height=\"0\" border=\"0\" ></td>\n"
    	."<td width=\"100%\">\n";

	echo "<meta name=\"header-end\">";
    echo "\n\n<!-- END Header ".$domain.". -->\n\n"; 
}
?>