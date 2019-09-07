<?php
/*=======================================================================================
 PHP-Nuke Titanium : Enhanced PHP-Nuke Web Portal System : Using the Nuke-Evolution Core
 ========================================================================================*/
/*****************************************************************************************/
/* 86it-Cortex v.3.0 theme designed by Ernest "TheGhost" Buffington                       */
/* This theme was designed to fit the new generation wide screen monitors                */
/*                                                                                       */
/* 86it-Cortex v.3.0 is a free public theme package designed for PHP-Nuke Titanium        */
/* Copyright (c) 2009 by TheGhost All Rights Reserved                                    */
/*****************************************************************************************/
/* For more commercial and public themes, custom graphics and photoshop tutorials        */
/* visit www.mynetworkspace.in                                                           */
/*****************************************************************************************/
/* For support of this great CMS visit MyNetworkSpace http://www.mynetworkspace.in       */
/*****************************************************************************************/
/* PHP-Nuke Copyright (c) 2005 by Francisco Burzi http://phpnuke.org                     */
/*****************************************************************************************/
/*****[CHANGES]*****************************************************************************************************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/29/2005
      Theme Management                         v1.0.2       12/14/2005       
	  MyNetworkSpace Patched                   v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  SWF Header Class                         v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  Resolution Checker                       v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  Detect Browser Type                      v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  Page Loading Animation                   v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  Safari Browser Support                   v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  FireFox Browser Support                  v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  Internet Explorer Support                v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
	  File Extension Support                   v1.0.0       10/09/2009       Modified for the MyNetworkSpace Network
 ********************************************************************************************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) 
{
    exit('Access Denied');
}

$theme_name = basename(dirname(__FILE__));

/*****[BEGIN]******************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/
include_once(NUKE_THEMES_DIR.$theme_name.'/theme_info.php');
/*****[END]********************************************
 [ Base:    Theme Management                   v1.0.2 ]
 ******************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/
global $ThemeInfo;

$bgcolor1 = $ThemeInfo['bgcolor1'];
$bgcolor2 = $ThemeInfo['bgcolor2'];
$bgcolor3 = $ThemeInfo['bgcolor3'];
$bgcolor4 = $ThemeInfo['bgcolor4'];
$textcolor1 = $ThemeInfo['textcolor1'];
$textcolor2 = $ThemeInfo['textcolor2'];

/************************************************************/
/* OpenTable Functions                                      */
/************************************************************/
include_once(NUKE_THEMES_DIR.$theme_name.'/tables.php');
/************************************************************/
/* OpenTable Functions                                      */
/************************************************************/


/************************************************************/
/* Function FormatStory()                                   */
/************************************************************/
/************************************************************
 [ Function FormatStory()                                   ]
 ************************************************************/
function FormatStory($thetext, $notes, $aid, $informant){
    global $anonymous;

	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> <em>'.$notes.'</em>' : '';
    if ($aid == $informant){
        echo '<span class="content" color="#505050">'.$thetext.$notes.'</span>';
    } else {
        if (defined('WRITES')){
            if (!empty($informant)){
				$boxstuff = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
            } else {
                $boxstuff = $anonymous.' ';
            }
            $boxstuff .= _WRITES.' <em>'.$thetext.'</em>'.$notes;
        } else {
            $boxstuff .= $thetext.$notes;
        }
        echo '<span class="content" color="#505050">'.$boxstuff.'</span>';
    }
}
/************************************************************/
/* Function FormatStory()                                   */
/************************************************************/








/************************************************************/
/* Function themeheader()                                   */
/************************************************************/
function themeheader(){
    global $user, $cookie, $prefix, $sitekey, $db, $name, $banners, $user_prefix, $admin_file, $module_name, $ThemeSel, $ThemeInfo;
	
    // Store Screen Resolution - Some Assholes Still have piece os shit computers!!!!!
    if(!isset($_COOKIE["theme_resolution"]))
	{
     ?>
      <script language="javascript"><!--
      writeCookie();
      
	  function writeCookie() 
      {
        var today = new Date();
        var the_date = new Date("June 16, 2023");
        var the_cookie_date = the_date.toGMTString();
        var the_cookie = "theme_resolution="+ screen.width +"x"+ screen.height +"x"+ screen.colorDepth;
        var the_cookie = the_cookie + ";expires=" + the_cookie_date;
        document.cookie=the_cookie;
      }
      
	  //--></script>
     <?php
    } 
	else 
	{ 
	  $theme[theme_res] = $_COOKIE["theme_resolution"]; 
	}
############################################################################################
    if (@file_exists(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript_body_facebook.php'))  #
	{                                                                                      #     Added by Ernest Buffington
       require_once(NUKE_THEMES_DIR.$ThemeSel.'/includes/javascript_body_facebook.php');   ##### facebook Mod v1.0
    }                                                                                      #     Oct 10th 2012
############################################################################################		
	
/************************************************************/
/* SWF Header Class                                         */
/************************************************************/
require_once(NUKE_CLASSES_DIR.'class.swfheader.php');
/************************************************************/
/* SWF Header Class                                         */
/************************************************************/
    echo "<body topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n";

?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/hmm.png">
  <tr>
    <td width="117" height="247" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="117" height="247" valign="top"><img src="themes/<?=$ThemeSel?>/images/hl.png" width="117" height="247"></td>
        </tr>
        </table></td>
    <td width="100%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" height="247" align="center" valign="top">
        
        
        
        
        
        
        
        </td>
        <td width="117" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="117" height="247" valign="top"><img src="themes/<?=$ThemeSel?>/images/hr.png" width="117" height="247"></td>
          </tr>
        </table></td>
  </tr>
    </table></td>
  </tr>
</table>
<?

/*   
   $ads = ads(0);
   
   if(empty($ads)) 
   {
   
   echo "<a href=\"index.php\" target=\"_self\">\n";
   echo "<img src=\"themes/".$theme_name."/header/nukestyle-hd_banner.png\" border=\"0\" alt='' title='' width=\"472\" height=\"74\"></a>";
   
   }
   else
   {
   echo "$ads";
   }
*/   
   
//LEFT SIDE BACKGROUND
echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
		."<tr valign=\"top\">\n"
        ."<td width=\"20\" valign=\"top\" background=\"themes/".$ThemeSel."/images/left.png\"><img src=\"themes/".$ThemeSel."/images/left.png\" width=\"20\" height=\"2\" border=\"0\"></td>\n"
		."<td width=\"165\" valign=\"top\">\n";

    
	if(blocks_visible('left')) 
	{
        blocks('left');
    } 
	else 
	{

    }
   
   //this controls the gap between the left block and the left side of the center table!!! 
	echo "</td>\n"
    	."<td width=\"0\" valign=\"top\" background=\"themes/".$ThemeSel."/images/spacer.gif\"><img src=\"themes/86it-Cortex/".$ThemeSel."/spacer.gif\" width=\"9\" height=\"1\" border=\"0\"></td>\n"
    	."<td width=\"100%\">\n";
}



/************************************************************/
/* Function themefooter()                                   */
/************************************************************/
function themefooter() 
{
    global $ThemeSel, $index, $user, $banners, $cookie, $prefix, $dbi, $db, $admin, $adminmail, $total_time, $start_time, $foot1, $foot2, $foot3, $foot4, $nukeurl, $ip, $theme_name, $ThemeInfo;

$showsub = "<FORM action=modules.php?op=modload&amp;name=Newsletter&amp;file=index&amp;func=action method=post><font class=copyright>&nbsp;<b>Email</b><br>&nbsp;<INPUT maxLength=100 size=20 class=\"sub\" name=new_email value=\"Your Email\" onFocus=\"if(this.value=='Your Email')this.value='';\" value style=\"width:150;height:18;FONT-SIZE: 9px;\"><BR><BR>&nbsp;<SELECT name=new_sub><OPTION value=sub selected>Subscribe<OPTION value=unsub>Unsubscribe</OPTION></SELECT><BR><BR>&nbsp;<SELECT name=new_type><OPTION value=0 selected>Text<OPTION value=1>HTML</OPTION></SELECT><br><br>&nbsp;<INPUT type=image class=\"liteoption1\" value=Submit src=\"themes/".$theme_name."/images/submit.gif\" border=\"0\"></font></FORM>";	
	
$maxshow = 10;	// Number of downloads to dispaly in the block.
$a = 1;
$result = $db->sql_query("select lid, title, hits from ".$prefix."_links_links order by date DESC limit 0,$maxshow");

while(list($lid, $title, $hits) = $db->sql_fetchrow($result)) 
{
    $title2 = ereg_replace("_", " ", "$title");
    $show .= "&nbsp;&nbsp;&nbsp;$a: <a href=\"modules.php?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=$lid&amp;ttitle=$title\">$title2</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class=\"content\">$hits<font class=\"copyright\"> times<br>";
     $showlinks = " <A name= \"scrollingCode\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" width=\"127\" height=\"109\" scrollamount= \"2\" scrolldelay= \"30\" onmouseover='this.stop()' onmouseout='this.start()'>$show";

$a++; 
}
$db->sql_freeresult($result);

global $prefix, $db;

$a = 1;
$sql = "SELECT lid, title FROM ".$prefix."_nsngd_downloads ORDER BY hits DESC LIMIT 0,20";
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result)) 
{
    $title2 = ereg_replace("_", " ", $row[title]);
	$content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\"><img src=\"themes/".$theme_name."/images/hole.gif\" border=0></a> $a: <a href=\"modules.php?name=Downloads&amp;d_op=viewdownloaddetails&amp;lid=$row[lid]&amp;title=$row[title]\">$title2</a></span><br>";
	 $showdl = " <font class=copyright>&nbsp;</b><br>&nbsp;<A name= \"scrollingCode\"></A><MARQUEE behavior= \"scroll\" align= \"left\" direction= \"up\" width=\"126\" height=\"105\" scrollamount= \"2\" scrolldelay= \"30\" onmouseover='this.stop()' onmouseout='this.start()'>$content";
	 
    $a++; 
}

$db->sql_freeresult($result);

	//this is where i control the gap between the right block and the right side of the center block   
	echo "</td>\n"
	    ."<td><img src=\"themes/".$ThemeSel."/images/spacer.png\" width=\"7\" height=\"15\" border=\"0\" alt=\"\"></td>\n"
	    ."<td valign=\"top\" background=\"themes/".$ThemeSel."/sides/rightbbg.png\" width=\"21\">\n";
	
    if(blocks_visible('right')) 
    {
		
       echo"</td>"
         . "<td width=\"170\" valign=\"top\">";
		 
       blocks('right');
    }
	

      echo"</td>"
        . "<td width=\"20\" valign=\"top\" background=\"themes/".$ThemeSel."/images/right.png\"><img src=\"themes/".$ThemeSel."/images/right.png\" width=\"20\" height=\"2\"></td>"
        . "</tr>"
        . "</table>";

      ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="322" height="193" valign="top"><table width="322" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/fl.png">
          <tr>
            <td width="84" height="47"></td>
            <td width="127">&nbsp;</td>
            <td width="111">&nbsp;</td>
          </tr>
          <tr>
            <td height="112">&nbsp;</td>
            <td valign="top"><?=$showlinks?></td>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="34">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td width="100%" align="center" background="themes/<?=$ThemeSel?>/images/fmm.png">
      <IMG SRC="themes/<?=$ThemeSel?>/header/spacer.png" WIDTH="1" HEIGHT="17"><br />      
	  <?
   
      echo "<center>";
      footmsg();
      echo "</center>";
      
	  
   ?>
      </td>
      <td width="321" valign="top"><table width="321" border="0" cellpadding="0" cellspacing="0" background="themes/<?=$ThemeSel?>/images/fr.png">
          <tr>
            <td width="109" height="37">&nbsp;</td>
            <td width="126">&nbsp;</td>
            <td width="86">&nbsp;</td>
          </tr>
          <tr>
            <td height="124">&nbsp;</td>
            <td valign="top"><?=$showdl?></td>
          <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="32">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <?
}
/************************************************************/
/* Function themefooter()                                   */
/************************************************************/





/************************************************************/
/* Function themeindex()                                    */
/* This function format the stories on the Homepage         */
/************************************************************/
function themeindex($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext){
    global $anonymous, $tipath, $theme_name, $sid, $ThemeSel, $nukeurl;
	
    if (!empty($topicimage)){
		$t_image = (file_exists('themes/'.$ThemeSel.'/images/topics/'.$topicimage)) ? 'themes/'.$ThemeSel.'/images/topics/'.$topicimage : $tipath.$topicimage;
        $topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=Blog&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
    } else {
        $topic_img = '';
    }
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
    $content = '';
    if ($aid == $informant){
        $content = $thetext.$notes;
    } else {
        if (defined('WRITES')){
            if (!empty($informant)){
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
            } else {
                $content = $anonymous.' ';
            }
            $content .= _WRITES.' '.$thetext.$notes;
        } else {
            $content .= $thetext.$notes;
        }
    }
    $posted = _POSTEDBY.' ';
    $posted .= get_author($aid);
    $posted .= ' '._ON.' '.$time.' ';
    $datetime = substr($morelink, 0, strpos($morelink, '|')-strlen($morelink));
    $morelink = substr($morelink, strlen($datetime)+2);
	
    ?>  
    <table class="otthree"border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="left" width="39" colspan="2">
    <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftcorner.png" width="39" height="50"></td>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="center" width="100%"><font color="#FFFFFF"><strong><?=$topictext?></strong></font></td>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="right" width="39" colspan="2">
    <img src="themes/<?=$ThemeSel?>/tables/OpenTable/rightcorner.png" width="39" height="50"></td>
    </tr>
    <tr>
    <td width="15" background="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png"></td>
    <td width="24"></td>
    <td width="100%">
    
    <?
    echo '			<!-- News Start -->'."\n";
	echo '			<div class="news-wrap">'."\n";
	echo '			    <div class="news-hd">'."\n";
	echo '			        <span class="news-hd-left"></span>'."\n";
	echo '			        <span class="news-hd-right"></span>'."\n";
	echo '			        <div class="news-hd-title">'.$title.'</div>'."\n";
	echo '			    </div>'."\n";
	echo '			    <div class="news-body">'."\n";
	echo '			        <span class="news-body-left"></span>'."\n";
	echo '			        <span class="news-body-right"></span>'."\n";
	echo '			        <div class="news-body-content">'."\n";
	echo                        $thetext.'<hr />'.$posted.' '.$datetime.' | '.$morelink;
	echo '			        </div>'."\n";
	echo '			    </div>'."\n";
	echo '			    <div class="news-ft">'."\n";
	echo '			        <span class="news-ft-left"></span>'."\n";
	echo '			        <span class="news-ft-right"></span>'."\n";
	echo '			    </div>'."\n";
	echo '			</div>'."\n";
	echo '			<!-- News End -->'."\n";
    ?>
    
    </td>

    <td width="25"></td>

    <td width="15" background="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png"></td>
    </tr>
    <tr>
    <td align="left" width="39" colspan="2"><img src="themes/<?=$ThemeSel?>/tables/CloseTable/leftbottomcorner.png"></td>
    <td background="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png" width="1357">&nbsp;</td>
	<td align="right" width="39" colspan="2"><img src="themes/<?=$ThemeSel?>/tables/CloseTable/bottomrightcorner.png"></td>
	</tr>
    </table>
    <br />
<?

}
/************************************************************/
/* Function themearticle()                                  */
/************************************************************/
function themearticle($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext){
    global $admin, $sid, $tipath, $ThemeSel;

	if (!empty($topicimage)){
		$t_image = (file_exists('themes/'.$ThemeSel.'/images/topics/'.$topicimage)) ? 'themes/'.$ThemeSel.'/images/topics/'.$topicimage : $tipath.$topicimage;
        $topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=Blog&new_topic='.$topic.'"><img src="'.$t_image.'" border="0" alt="'.$topictext.'" title="'.$topictext.'"></a></td>';
    } else {
        $topic_img = '';
    }
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : '';
    $content = '';
    if ($aid == $informant){
        $content = $thetext.$notes;
    } else {
        if (defined('WRITES')){
            if (!empty($informant)){
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> ';
            } else {
                $content = $anonymous.' ';
            }
            $content .= _WRITES.' '.$thetext.$notes;
        } else {
            $content .= $thetext.$notes;
        }
    }
	$posted = _POSTEDON.' '.$datetime.' '._BY.' ';
    $posted .= get_author($aid);
	

    ?>  
    <table class="otthree"border="0" width="100%" cellspacing="0" cellpadding="0"> 
    <tr>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="left" width="39" colspan="2">
    <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftcorner.png" width="39" height="50"></td>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="center" width="100%"><font color="#FFFFFF"><strong><?=$topictext?></strong></font></td>
    <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" align="right" width="39" colspan="2">
    <img src="themes/<?=$ThemeSel?>/tables/OpenTable/rightcorner.png" width="39" height="50"></td>
    </tr>
    <tr>
    <td width="15" background="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png"></td>
    <td width="24"></td>
    <td width="100%">
    <?
	
	echo '			<!-- News Start -->'."\n";
	echo '			<div class="news-wrap">'."\n";
	echo '			    <div class="news-hd">'."\n";
	echo '			        <span class="news-hd-left"></span>'."\n";
	echo '			        <span class="news-hd-right"></span>'."\n";
	echo '			        <div class="news-hd-title">'.$title.'</div>'."\n";
	echo '			    </div>'."\n";
	echo '			    <div class="news-body">'."\n";
	echo '			        <span class="news-body-left"></span>'."\n";
	echo '			        <span class="news-body-right"></span>'."\n";
	echo '			        <div class="news-body-content">'."\n";
	echo                        $thetext.'<hr />'.$posted.' '.$datetime;
	echo '			        </div>'."\n";
	echo '			    </div>'."\n";
	echo '			    <div class="news-ft">'."\n";
	echo '			        <span class="news-ft-left"></span>'."\n";
	echo '			        <span class="news-ft-right"></span>'."\n";
	echo '			    </div>'."\n";
	echo '			</div>'."\n";
	echo '			<!-- News End -->'."\n";
    ?>	
    
    </td>

    <td width="25"></td>

    <td width="15" background="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png"></td>
    </tr>
    <tr>
    <td align="left" width="39" colspan="2"><img src="themes/<?=$ThemeSel?>/tables/CloseTable/leftbottomcorner.png"></td>
    <td background="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png" width="1357">&nbsp;</td>
	<td align="right" width="39" colspan="2"><img src="themes/<?=$ThemeSel?>/tables/CloseTable/bottomrightcorner.png"></td>
	</tr>
    </table>
    <br />
<?
}


/**********************************************************
 [ Centerbox Section                                      ]
 **********************************************************/
function themecenterbox($title, $content){
    OpenTable();
    echo '<center><span class="option"><strong>'.$title.'</strong></span></center><br />'.$content;
    CloseTable();
}

/**********************************************************
 [ Preview Section                                        ]
 **********************************************************/
function themepreview($title, $hometext, $bodytext='', $notes=''){
    echo '<strong>'.$title.'</strong><br /><br />'.$hometext;
    echo (!empty($bodytext)) ? '<br /><br />'.$bodytext : '';
    echo (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> <em>'.$notes.'</em>' : '';
}


/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/
function themesidebox($title, $content, $bid=0) 
{
   global $HTTP_GET_VARS, $module_name, $ThemeSel;

   ?> 
   <table class=block cellSpacing="0" cellPadding="0" border="0" width="249">
   <tr>
   <td background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png">
   <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftcorner.png" border="0" width="39" height="50"></td>
   <td width="195" align="center" background="themes/<?=$ThemeSel?>/tables/OpenTable/topmiddle.png" valign="top"><IMG SRC="themes/<?=$ThemeSel?>/images/spacer.png" WIDTH="1" HEIGHT="11"><br />
   <div class="block-title"><?=$title?></div></td>
   <td>
   <img src="themes/<?=$ThemeSel?>/tables/OpenTable/rightcorner.png" border="0" width="39" height="50"></td>
   </tr>
   <tr>
   <td colSpan="3">
   <table cellSpacing="0" cellPadding="0" width="100%" border="0">
   <tr>
   <td width="15" background="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png">
   <img src="themes/<?=$ThemeSel?>/tables/OpenTable/leftside.png" border="0" width="15" height="4"></td>
   <td width="100%" >
   <table cellSpacing="0" cellPadding="8" width="100%" border="0" style="border-collapse: collapse" bordercolor="#111111">
   <tr>
   <td width="195">
   <div class="blocks-body"><?=$content?></div>         
   </td>
   </tr>
   </table>
   </td>
   <td width="15" background="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png">
   <img src="themes/<?=$ThemeSel?>/tables/CloseTable/rightside.png" border="0" width="15" height="4"></td>
   </tr>
   </table>
   </td>
   </tr>
   <tr>
   <td width="39" height="52">
   <img src="themes/<?=$ThemeSel?>/tables/CloseTable/leftbottomcorner.png" border="0" width="39" height="52"></td>
   <td width="195" height="27" background="themes/<?=$ThemeSel?>/tables/CloseTable/bottommiddle.png">        </td>
   <td width="39" height="27">
   <img src="themes/<?=$ThemeSel?>/tables/CloseTable/bottomrightcorner.png" border="0" width="39" height="52"></td>
   </tr>
   </table>
   <br>
   <?
}
?>