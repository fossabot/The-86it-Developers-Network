<?php
/*================================================================================================
 FILE: function_theme_blog_index.php 8/17/2017
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

/* Function theme_blog_index() */
function theme_music_index($aid, 
                     $informant, 
					      $time, 
						 $title, 
					   $counter, 
					     $topic, 
					   $thetext, 
					     $notes, 
						   $swf, 
					   $suspect, 
					  $fixwidth, 
	    $center_topic_and_title, 
	                  $morelink, 
					 $topicname, 
				    $topicimage, 
				     $topictext) 
{
            global $anonymous, 
			          $tipath, 
				  $theme_name, 
				         $sid, 
					  $domain, 
					  $rating, 
					    $name, 
	   $facebook_plugin_width,
	              $textcolor1, 
				  $textcolor2;


    $ThemeSel = get_theme();
    $name="Music";
	
	if(!empty($topicimage)) 
	{ 
	  if (file_exists("themes/$ThemeSel/images/topics/$topicimage")){ $t_image = "themes/$ThemeSel/images/topics/$topicimage";
    }
	else 
	{
	  $t_image = "$tipath$topicimage";}
	  $topic_img = "<a href=\"".HTTPS."modules.php?name=".$name."&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\"></a>";
	} 
	else 
	{
		$topic_img = "";
	}
	
	
	if (!empty($notes))
	{
		$notes = "<br /><br /><strong>"._NOTE."</strong> $notes\n";
	}
	else
	{
		$notes = "";
	}
    
	$check_filename = $suspect;
	
	if ($check_filename == 'none.gif')
	{
	  $suspect = "<center><img src=\"".HTTPS."upload/upu/files/none.gif\" width=0 height=0></center>\n";
	}
    else
	{
	    if($fixwidth == 0)
		{
	    $suspect = "<center><a href=\"".HTTPS."upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"".HTTPS."upload/upu/files/".$suspect."\" width=".$facebook_plugin_width."></a></center><hr>\n";
		}
	    else
	    $suspect = "<center><NO RESIZE><a href=\"".HTTPS."upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"".HTTPS."upload/upu/files/".$suspect."\"></a></NO RESIZE></center><hr>\n";
	
	} 	

	$content = '';
    
	if ($aid == $informant)
	{
		$content = "$thetext$notes\n";
	}
	else
	{
		if(defined('WRITES'))
		{
			if(!empty($informant))
			{
				if(is_array($informant)){$content = "<a href=\"".HTTPS."modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
			}
			else
				{
					$content = "<a href=\"".HTTPS."modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
				}
	}
	else
	{
	  $content = "$anonymous ";
	}   
			  
			 
	$content .= _WRITES." \"$thetext\"$notes\n";}else{$content .= "$thetext$notes\n";}}
    $posted = _POSTEDBY." ";

	$posted .= "<span itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\"><strong itemprop=\"name\">";
    $posted .= get_author($aid);
	$posted .= "</strong></span>";

    $posted .= " "._ON." $time  ";
    $datetime = substr($morelink, 0, strpos($morelink, "|") - strlen($morelink));
    $morelink = substr($morelink, strlen($datetime) + 2);

    // added by Ernest Allen Buffington 10/05/2017 Thursday @ 1:16am
	// FILTER ALL POSTS SO THAT EVERYTHING ID FORCED TO SSL
	$content = str_replace( 'http://', 'https://', $content);

    global $sitename, $pagetitle;
	$pagetitle = $sitename." » ".$name;

    if(isset($op)) // No tables in admin edit mode!
	{}else
    OpenTableModule();
  
    echo "<!-- Start Of Article -->";
    function_itemscope_article_open();
	echo "<meta itemprop=\"datePublished\" content=\"$time\">";

	  if($swf == "none.swf")
      {
         /* Titles */   
	    echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=5><br>\n";
		if($center_topic_and_title == 0) // 0 = yes
		{ 
echo "<center><b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&file=article&sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b> ]</b></center>";
		}
		else
		{		
echo "<b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&file=article&sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b>  ]</b>";
		}
		
        echo '<hr>';
	
		if($center_topic_and_title == 0) // 0 = yes
		{
          echo "<center>".$suspect."</center>";
          echo "<center><span itemprop=\"articleBody\">".$content."</span></center>";
          echo "<hr>";
          echo "<center>".$posted."</center>";
          echo "<hr>";
		}
		else
		{
          echo $suspect;
          echo "<span itemprop=\"articleBody\">".$content."</span>";
          echo "<hr>";
		  echo $posted;
          echo "<hr>";
		}
        
		/* */   
        if(isset($op)) // No tabled in admin edit mode!
        {}else
        include(NUKE_THEMES_DIR.$theme_name.'/includes/plugin_facebook_music_likes.php'); 
        /* */   
        if(isset($op)) // No tabled in admin edit mode!
        {}else
        include(NUKE_THEMES_DIR.$theme_name.'/includes/plugin_facebook_music_comments.php');
		/* */
        /* */   
        echo '<hr>';
		if($center_topic_and_title == 0) // 0 = yes
		{
              echo "<center>";
			  echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
			  echo "</center>";
			  echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		      echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";
		}
		else
		{
              echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
			  echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		      echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";
		}
       /* */   
   }
   else
   {
        /* */   
	    echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=5><br>\n";
		
		if($center_topic_and_title == 0) // 0 = yes
		{ 
echo "<center><b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&file=article&sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b> ]</b></center>";
		}
		else
		{		
echo "<b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&file=article&sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b>  ]</b>";
		}
			 if ($check_filename != 'none.gif')
			 {
                if($center_topic_and_title == 0) // 0 = yes
		        {
					
			       echo "<hr />";
                   echo "<center>".$suspect."</center>";
					
				}
				else
				{
                   echo $suspect;
				}

			 }

                if($center_topic_and_title == 0) // 0 = yes
		        {
				  echo "<center>";
                  $newswf = new swfheader(false) ;
                  $newswf->loadswf("upload/upu/files/$swf") ;
                  $newswf->display($trans);  
				  echo "</center>";
				}
				else
				{
                  $newswf = new swfheader(false) ;
                  $newswf->loadswf("upload/upu/files/$swf") ;
                  $newswf->display($trans);  
				}
             
			 echo "<hr>";

            if($center_topic_and_title == 0) // 0 = yes
		    {
               echo "<center><span itemprop=\"articleBody\">".$content."</span></center>";
			}
			else
			{
             echo "<span itemprop=\"articleBody\">";
             echo $content;
      	     echo "</span>";
			}

			 echo "<hr>";
			 if($center_topic_and_title == 0) // 0 = yes
             echo "<center>";
             echo $posted;
             echo "<hr>";
			 if($center_topic_and_title == 0) // 0 = yes
             echo "</center>";
			 
             echo '<br />';
             echo '<br />';
            /* */   
            if(isset($op)) // No tabled in admin edit mode!
            {}else
            include(NUKE_THEMES_DIR.$theme_name.'/includes/plugin_facebook_music_likes.php'); 
            /* */   
            if(isset($op)) // No tabled in admin edit mode!
            {}else
            include(NUKE_THEMES_DIR.$theme_name.'/includes/plugin_facebook_music_comments.php');
            /* */   
            echo "</center>";
            
			if($center_topic_and_title == 0) // 0 = yes
			{
			  echo '<hr><center>';
              echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
		      echo '</center>';
			  echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		      echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";
			}
			else
			{
			  echo '<hr>';
              echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
			  echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		      echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";
			}
      /* */   
      }

  if(isset($op)) // No tabled in admin edit mode!
  {}
  else
  {
  echo "<span itemprop=\"author\" itemscope itemtype=\"https://schema.org/Person\">";
  echo "<meta itemprop=\"name\" content=\"Ernest Allen Buffington\"></span>";
  echo "<!-- End Of Article -->";
  function_itemscope_article_close();
  CloseTable();

  }
  
  global $ThemeSel;  
  echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=1><br>\n";}
?>