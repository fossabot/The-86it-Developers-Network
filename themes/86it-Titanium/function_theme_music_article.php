<?php
/*================================================================================================
 FILE: function_theme_music_article.php 8/17/2017
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

/* Function theme_music_article() */
function theme_music_article($aid, 
                      $informant, 
					   $datetime, 
					      $title, 
						$thetext, 
						  $topic, 
					  $topicname, 
				     $topicimage, 
					  $topictext, 
					        $swf, 
					    $suspect, 
					   $fixwidth, 
		 $center_topic_and_title,
		                $counter) 
{
       
	   global $sitename, 
	         $pagetitle, 
		            $op, 
		      $fb_title, 
		         $admin, 
		     $anonymous, 
		        $tipath, 
		    $theme_name, 
		           $sid, 
			    $domain, 
			    $rating, 
			      $name,
	        $textcolor1, 
		    $textcolor2,
 $facebook_plugin_width;
    
	
    $ThemeSel = get_theme();

	$posted = _POSTEDON." $datetime "._BY." ";
    
	/* fixed added itemtype=\"http://schema.org/Organization and itemprop=\"name\" on 8/30/2017 */
	$posted .= "<span itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\"><strong itemprop=\"name\">";
    $posted .= get_author($aid);
	$posted .= "</strong></span>";
	/* fixed added itemtype=\"http://schema.org/Organization and itemprop=\"name\" on 8/30/2017 */

    $name="Music";

    /* fixed on 8/30/2017 */
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
    /* fixed on 8/30/2017 */


	
    /* fixed on 8/30/2017 */
	if (!empty($notes))
	{
		$notes = "<br /><br /><strong>"._NOTE."</strong> $notes\n";
	}
	else
	{
		$notes = "";
	}
    /* fixed on 8/30/2017 */



###########################################################################################	
    /* This is not in music index */                                                      #
    if ( isset($_POST['file1']['filename']) && !empty($_POST['file1']['filename']) )      #                                    # This was added for header images
    {                                                                                     ###################################### just add the file name in the field and
       $suspect = $_POST['file1']['filename'];                                            #                                    # it will auto display the image on your portal! 
    }                                                                                     #                                    # 2/04/2013
    /* This is not in music index */                                                      #
###########################################################################################	

	$check_filename = $suspect;
	 
	if ($check_filename == 'none.gif')
	{
	  $suspect = "<center><img src=\"".HTTPS."upload/upu/files/none.gif\" width=0 height=0></center>\n";
	}
    else
	{
	    if($fixwidth == 0)
		{
	    /* fixed - added itemprop=\"image\" on 8/30/2017 */
	    $suspect = "<center><a href=\"".HTTPS."upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"".HTTPS."upload/upu/files/".$suspect."\" width=".$facebook_plugin_width."></a></center><hr>\n";
		/* fixed - added itemprop=\"image\" on 8/30/2017 */
		}
	    else
		{
    	/* fixed - added itemprop=\"image\" on 8/30/2017 */
		$suspect = "<center><NO RESIZE><a href=\"".HTTPS."upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"".HTTPS."upload/upu/files/".$suspect."\"></a></NO RESIZE></center><hr>\n";
		/* fixed - added itemprop=\"image\" on 8/30/2017 */
		}
	
	} 	
	
    $content = '';


###########################################################################################
    /* This is not in music index */   	                                                  #
    if ( isset($_POST['file2']['filename']) && !empty($_POST['file2']['filename']) )      #
	{                                                                                     #
      $swf = $_POST['file2']['filename'];                                                 #                                    # This was added by Ernest Buffington for
	}                                                                                     ###################################### the SWF auto display! This uses a SWF 
    else                                                                                  #                                    # class file 2/04/2013
	{                                                                                     #
      $swf = Fix_Quotes($swf);                                                            #
	}                                                                                     #
    /* This is not in music index */   	                                                  #
###########################################################################################



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
                if(is_array($informant)) 
				{
                    $content = "<a href=\"".HTTPS."modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a>";
                } 
				else 
				{
                    $content = "<a href=\"".HTTPS."modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a>";
                }
            } 
			else
			{
               $content = "$anonymous ";
			   $content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
			}
        } 
		else 
        $content .= "$thetext$notes\n";
    }

    // added by Ernest Allen Buffington 10/05/2017 Thursday @ 1:16am
	// FILTER ALL POSTS SO THAT EVERYTHING ID FORCED TO SSL
	$content = str_replace( 'http://', 'https://', $content);

    $pagetitle = $sitename." » ".$name;     

    /* */ 
    if(isset($op)) // No tabled in admin edit mode!
	{
	  AdminTableOpen(); 
	}
	else
    OpenTableModule();
  
    /* fixed - added on 8/30/2017 */
    echo "<!-- Start Of Article -->";
    function_itemscope_article_open();
	/* fixed - added on 8/30/2017 */

	/* fixed - added on 8/30/2017 */
	echo "<meta itemprop=\"datePublished\" content=\"$datetime\">";
	/* fixed - added on 8/30/2017 */

      if($swf == "none.swf")
      {
        /* Titles */   
	    if($center_topic_and_title == 0) // 0 = yes
		{
		 /* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */
echo "<center><b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font \"#CC0000\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Selection</b> &raquo; <font color=\"#CC0000\"><b><span itemprop=\"name\">$title</span></font> <b>]</b></center>";
	     /* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */
		}
		else
		{
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */	 	
        echo "<b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font \"#CC0000\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Selection</b> &raquo; <font color=\"#CC0000\"><span itemprop=\"name\">$title</span></font> <b>]</b>";
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */
		}
		
        echo '<hr>';
		
		if($center_topic_and_title == 0) // 0 = yes
		{
          echo "<center>".$suspect."</center>";
		  /* fixed - added itemprop=\"articleBody\ on 8/30/2017 */
          echo "<center><span itemprop=\"articleBody\">".$content."</span></center>";
		  /* fixed - added itemprop=\"articleBody\ on 8/30/2017 */
          echo "<hr>";
          echo "<center>".$posted."</center>";
          echo "<hr>";
		
		}
		else
		{
          echo $suspect;
		  /* fixed - added itemprop=\"articleBody\ on 8/30/2017 */
          echo "<span itemprop=\"articleBody\">".$content."</span>";
		  /* fixed - added itemprop=\"articleBody\ on 8/30/2017 */
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
	    
		echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
        echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";
      }
      else
      {
         /* */   
	    if($center_topic_and_title == 0) // 0 = yes
		{
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */	 	
echo "<center><b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font \"#CC0000\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Selection</b> &raquo; <font color=\"#CC0000\"><b><span itemprop=\"name\">$title</span></font> <b>]</b></center>";
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */	 	
		}
		else
		{	 	
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */	 	
        echo "<b>[ Topic</b> &raquo; <a href=\"".HTTPS."modules.php?name=$name&amp;new_topic=".$topic."\"><font \"#CC0000\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Selection</b> &raquo; <font color=\"#CC0000\"><span itemprop=\"name\">$title</span></font> <b>]</b>";
		/* fixed - added itemprop=\"articleSection\" and itemprop=\"name\" on 8/30/2017 */	 	
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
          /* fixed added itemprop=\"articleBody\ on 8/30/2017 */
          echo "<center><span itemprop=\"articleBody\">".$content."</span></center>";
          /* fixed added itemprop=\"articleBody\ on 8/30/2017 */
		}
		else
		{
          /* fixed added itemprop=\"articleBody\ on 8/30/2017 */
          echo "<span itemprop=\"articleBody\">";
          echo $content;
      	  echo "</span>";
          /* fixed added itemprop=\"articleBody\ on 8/30/2017 */		
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
		
	    echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
        echo "</center>";
        echo "<span style=\"float: right\" align=\"right\"><em><font size=\"1\">The 86it Social Network</font></em></span>";

  }
   
   /* */
   if(isset($op)) // No tabled in admin edit mode!
   {
	 /* fixed added on 8/30/2017 */
     echo "<span itemprop=\"author\" itemscope itemtype=\"https://schema.org/Person\">";
     echo "<meta itemprop=\"name\" content=\"Ernest Allen Buffington\"></span>";
     echo "<!-- End Of Article -->";
     function_itemscope_article_close();
	 /* fixed added on 8/30/2017 */
     AdminTableClose();
   }
   else
   {
	 /* fixed added on 8/30/2017 */
     echo "<span itemprop=\"author\" itemscope itemtype=\"https://schema.org/Person\">";
     echo "<meta itemprop=\"name\" content=\"Ernest Allen Buffington\"></span>";
     echo "<!-- End Of Article -->";
     function_itemscope_article_close();
	 /* fixed added on 8/30/2017 */
     CloseTable();
  }
}
?>