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
=================================================================================================*/
if(realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){ exit('Access Denied'); }

$theme_name = basename(dirname(__FILE__));

function MusicTopicsExtendedOpen() 
{
   global $title, $ThemeSel, $pagetitle, $textcolor1;
  
   echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
   echo "<tr>\n";
   echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">".$pagetitle."</td>\n";
   echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
   echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";
       
   echo "<tr>\n";
   echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";
       
   echo "<tr>\n";
   echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "<td style=\"padding: 5px;\" class=\"maintable\">\n\n";
}
    
function MusicTopicsExtendedClose() 
{
  global $ThemeSel;

  echo "</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n"; 
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/leftside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfooter\" align=\"center\"></td>\n"; //bottom title
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/rightside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
  echo "</table>\n";

 // custom page spacer 7 pixels high
 echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n";
 echo "<tr>\n";
 echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
 echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>\n";
 echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
 echo "</tr>\n";
 echo "</table>\n\n";
}

function OpenTableSurvey($title='')
{
   global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor1, $sitename;
  
   echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
   echo "<tr>\n";
   echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">".$title."</td>\n";
   echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
   echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";
       
   echo "<tr>\n";
   echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";
       
   echo "<tr>\n";
   echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
   echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
   echo "</tr>\n";

   echo "<tr>\n";
   echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
   echo "<td style=\"padding: 5px;\" class=\"maintable\">\n";
}

function OpenTableMessage($title='')
{
global $title, $sitename;

echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
echo "<tr>\n";
echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
echo "</tr>\n";

echo "<tr>\n";
echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">".$sitename." » ".$title."</td>\n";
echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
echo "</tr>\n";

echo "<tr>\n";
echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
echo "</tr>\n";
       
echo "<tr>\n";
echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
echo "</tr>\n";
       
echo "<tr>\n";
echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
echo "</tr>\n";

echo "<tr>\n";
echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
echo "<td style=\"padding: 5px;\" class=\"maintable\">\n\n";
}

function OpenTableModule()  
{
  global $title, $bgcolor1, $bgcolor2, $theme_name, $textcolor1, $textcolor2, $pagetitle;

  echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">".$pagetitle."</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td valign=\"top\" style=\"padding: 10px;\" class=\"maintable\">\n\n";
}

function OpenTable()
{
  global $title;
  
  echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">$title</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td style=\"padding: 5px;\" class=\"maintable\">\n";
}

function CloseTable()
{
  global $ThemeSel;

  echo "</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n"; 
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/leftside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfooter\" align=\"center\"></td>\n"; //bottom title
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/rightside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
  echo "</table>\n";

  // custom page spacer 7 pixels high
  echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n";
  echo "<tr>\n";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
  echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>\n";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
  echo "</tr>\n";
  echo "</table>\n";
}

function AdminTableOpen()
{
  global $pagetitle, $ThemeSel;
  
  echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"maintable\">\n"; 
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfiber\" align=\"center\">".$pagetitle."</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "<td style=\"padding: 5px;\" class=\"maintable\">\n";
}

function AdminTableClose()
{
  global $ThemeSel;

  echo "</td>\n";
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftmetalbar\" width=\"9px\" height=\"10px\"></td>\n"; 
  echo "<td class=\"middlemetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"rightmetalbar\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"lefttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middletopblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"righttopblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
       
  echo "<tr>\n";
  echo "<td class=\"leftsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/leftside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "<td height=\"40\" class=\"carbinfooter\" align=\"center\"></td>\n"; //bottom title
  echo "<td class=\"rightsidetopblock\" width=\"9px\" height=\"1px\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable/rightside01.png\" alt=\"\" width=\"9px\" height=\"1px\" border=\"0\"></td>\n";
  echo "</tr>\n";

  echo "<tr>\n";
  echo "<td class=\"leftbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "<td class=\"middlebottomblock\" width=\"100%\" height=\"10px\"></td>\n";
  echo "<td class=\"rightbottomblock\" width=\"9px\" height=\"10px\"></td>\n";
  echo "</tr>\n";
  echo "</table>\n";

  // custom page spacer 7 pixels high
  echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n";
  echo "<tr>\n";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
  echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>\n";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>\n";
  echo "</tr>\n";
  echo "</table>\n";
}

function OpenTable2() 
{
  echo "<table class=\"code\" border=\"0\" width=\"100%\">\n";
  echo "<tr>\n";
  echo "<td>\n";
}
    
function CloseTable2() 
{
  echo "</td>\n";
  echo "</tr>\n";
  echo "</table>\n";
}

function OpenTable3() 
{
  global $ThemeSel;
  
  echo "<table class=\"fancytable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n";
    
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\" style=\"background-repeat:repeat-y\" background=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/left2.png\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/Curve-TL.png\" alt=\"\" width=\"31\" height=\"31\">\n";
  echo "</td>\n";
  
  echo "<td style=\"background-repeat:repeat-x\" width=\"100%\" height=\"31\" nowrap background=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/up2.png\" align=\"center\" width=\"100%\" height=\"31\">\n";
  echo "</td>\n";
  
  echo "<td style=\"background-repeat:repeat-y\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve_Right.png\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/Curve-TR.png\" alt=\"\" width=\"31\" height=\"31\">\n";
  echo "</td>\n";
  echo "</tr>\n";
    
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\" style=\"background-repeat:repeat-y\" background=\"".HTTPS,"themes/".$ThemeSel."/tables/OpenTable3/left2.png\">\n";
  echo "</td>\n";
  echo "<td style=\"padding: 5px;\" width=\"100%\">\n"; //inside margin for the fancy table
}

function CloseTable3() 
{
  global $ThemeSel;

  echo "</td>\n";
  echo "<td width=\"31\" height=\"31\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve_Right.png\"></td>\n";
  echo "</tr>\n";
  
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-BL.png\" alt=\"\" width=\"31\" height=\"31\"></td>\n";
  echo "<td width=\"31\" height=\"31\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-Bottom.png\"></td>\n";
  echo "<td width=\"31\" height=\"31\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-BR.png\" width=\"31\" height=\"31\"></td>\n";
  echo "</tr>\n";

  echo "</td>\n";
  echo "</tr>\n";
  echo "</table>\n";

  // custom page spacer 7 pixels high
  echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
  echo "<tr>";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>";
  echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>";
  echo "</tr>";
  echo "</table>";
}

function OpenFancyTable() 
{
  global $ThemeSel;
  
  echo "<table class=\"fancytable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n";
    
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\" style=\"background-repeat:repeat-y\" background=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/left2.png\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/Curve-TL.png\" alt=\"\" width=\"31\" height=\"31\">\n";
  echo "</td>\n";
  
  echo "<td style=\"background-repeat:repeat-x\" width=\"100%\" height=\"31\" nowrap background=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/up2.png\" align=\"center\" width=\"100%\" height=\"31\">\n";
  echo "</td>\n";
  
  echo "<td style=\"background-repeat:repeat-y\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve_Right.png\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/OpenTable3/Curve-TR.png\" alt=\"\" width=\"31\" height=\"31\">\n";
  echo "</td>\n";
  echo "</tr>\n";
    
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\" style=\"background-repeat:repeat-y\" background=\"".HTTPS,"themes/".$ThemeSel."/tables/OpenTable3/left2.png\">\n";
  echo "</td>\n";
  echo "<td style=\"padding: 5px;\" width=\"100%\">\n"; //inside margin for the fancy table
}

function CloseFancyTable() 
{
  global $ThemeSel;

  echo "</td>\n";
  echo "<td width=\"31\" height=\"31\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve_Right.png\"></td>\n";
  echo "</tr>\n";
  
  echo "<tr>\n";
  echo "<td width=\"31\" height=\"31\">\n";
  echo "<img src=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-BL.png\" alt=\"\" width=\"31\" height=\"31\"></td>\n";
  echo "<td width=\"31\" height=\"31\" background=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-Bottom.png\"></td>\n";
  echo "<td width=\"31\" height=\"31\"><img src=\"".HTTPS."themes/".$ThemeSel."/tables/CloseTable3/Curve-BR.png\" width=\"31\" height=\"31\"></td>\n";
  echo "</tr>\n";

  echo "</td>\n";
  echo "</tr>\n";
  echo "</table>\n";

  // custom page spacer 7 pixels high
  echo "<table class=\"spacer\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
  echo "<tr>";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>";
  echo "<td class=\"spacer\" width=\"100%\" height=\"7px\"></td>";
  echo "<td class=\"spacer\" width=\"9px\" height=\"7px\"></td>";
  echo "</tr>";
  echo "</table>";
}
?>