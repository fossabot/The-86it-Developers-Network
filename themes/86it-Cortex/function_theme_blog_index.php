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
function theme_blog_index($aid, 
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
    $name="Blogs";
	
	if(!empty($topicimage)) 
	{ 
	  if (file_exists("themes/$ThemeSel/images/topics/$topicimage")){ $t_image = "themes/$ThemeSel/images/topics/$topicimage";
    }
	else 
	{
	  $t_image = "$tipath$topicimage";}
	  $topic_img = "<a href=\"modules.php?name=".$name."&amp;new_topic=".$topic."\"><img src=\"".$t_image."\" border=\"0\" alt=\"$topictext\"></a>";
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
	  $suspect = "<center><img src=\"upload/upu/files/none.gif\" width=0 height=0></center>\n";
	}
    else
	{
	    if($fixwidth == 0)
		{
	    $suspect = "<center><a href=\"upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"upload/upu/files/".$suspect."\" width=".$facebook_plugin_width."></a></center><hr>\n";
		}
	    else
	    $suspect = "<center><NO RESIZE><a href=\"upload/upu/files/".$suspect."\" rel=\"lytebox\"><img itemprop=\"image\" src=\"upload/upu/files/".$suspect."\"></a></NO RESIZE></center><hr>\n";
	
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
				if(is_array($informant)){$content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant[0]\">$informant[1]</a> ";
			}
			else
				{
					$content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
				}
	    }
	    else
	    {
	        $content = "$anonymous ";
	    }   
			  
			 
	         $content .= _WRITES." \"$thetext\"$notes\n";
	    }
	    else
	    {
	
	       $content .= "$thetext$notes\n";}}
           $posted = _POSTEDBY." ";

	       $posted .= "<span itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\"><strong itemprop=\"name\">";
           $posted .= get_author($aid);
	       $posted .= "</strong></span>";

           $posted .= " "._ON." $time  ";
           $datetime = substr($morelink, 0, strpos($morelink, "|") - strlen($morelink));
           $morelink = substr($morelink, strlen($datetime) + 2);

    global $sitename, $pagetitle;
	$pagetitle = $sitename." » ".$name;

############################################################################################
    if (@file_exists(NUKE_THEMES_DIR.$theme_name.'/includes/javascript_body_facebook.php'))#
	{                                                                                      #     Added by Ernest Buffington
       echo "\n\n<!-- START javascript_body_facebook.php check BLOG INDEX. -->\n";         #
       require_once(NUKE_THEMES_DIR.$theme_name.'/includes/javascript_body_facebook.php'); ##### facebook Mod v1.0
	   echo "<!-- END javascript_body_facebook.php LOADED.. -->\n\n";                      #
    }                                                                                      #     Oct 10th 2012
############################################################################################	

    if(isset($op)) // No tables in admin edit mode!
	{}else
    OpenTableModule();
    OpenTable4(); 
    echo "<!-- Start Of Article -->";
    function_itemscope_article_open();
	echo "<meta itemprop=\"datePublished\" content=\"$time\">";

# SWF NONE START
	  if($swf == "none.swf")
      {
         /* Titles */   
	    echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=5><br>\n";
		if($center_topic_and_title == 0) // 0 = yes
		{ 
echo "<center><b>[ Topic</b> &raquo; <a href=\"modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&amp;file=article&amp;sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b> ]</b></center>";
		}
		else
		{		
echo "<b>[ Topic</b> &raquo; <a href=\"modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&amp;file=article&amp;sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b>  ]</b>";
		}
		
        echo '<hr>';
		if($center_topic_and_title == 0) // 0 = yes
		{
          echo "<center>".$suspect."</center>";
          echo "<center><span itemprop=\"articleBody\">".$content."</span></center>";
          echo "<hr>";
          echo "<center>".$posted."</center>";
          //echo "<hr>";
		}
		else
		{
          echo $suspect;
          echo "<span itemprop=\"articleBody\">".$content."</span>";
          echo "<hr>";
		  echo $posted;
          //echo "<hr>";
		}
        
			if($center_topic_and_title == 0) // 0 = yes
			{
                if(isset($op)) // No tabled in admin edit mode!
                {}else
                {
			  #Removed For CarbonFiber Theme 
			  //echo '<hr>';
			       echo "<br />";
				   echo "<div align=\"center\">";
                   echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
		           echo "\n\n<!-- START plugin_facebook_likes check BLOG INDEX. -->\n";
		           echo "<br />";
				   echo "<div class=\"fb-like\" data-width=357 data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-layout=standard data-action=like data-size=small data-show-faces=true data-colorscheme=dark data-share=true font=verdana></div>";
		           echo "<!-- END plugin_facebook_likes check BLOG INDEX. -->\n\n";
				   echo "</div>";
		         }
                 /* */   
                 if(isset($op)) // No tabled in admin edit mode!
                 {}else
		         {
                   echo "<!-- START plugin_facebook_comments check BLOG INDEX. -->\n\n";
				   echo "<div data-colorscheme=dark class=fb-comments data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-num-posts=10 data-width=100%></div>";
		           echo "<!-- END javascript_body_facebook.php check BLOG INDEX. -->\n\n";
		         }

		           //echo "<span style=\"float: right\" align=\"right\"></span>";
		   	       echo "<div align=\"right\"><em><font size=\"1\">The 86it Developer Network</font></em><div>";
				   echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
			}
			else
			{
                if(isset($op)) // No tabled in admin edit mode!
                {}else
                {
			  #Removed For CarbonFiber Theme 
			  //echo '<hr>';
			       echo "<br />";
                   echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
		           echo "\n\n<!-- START plugin_facebook_likes check BLOG INDEX. -->\n";
		           echo "<br />";
				   echo "<div align=left class=\"fb-like\" data-width=$facebook_plugin_width data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-layout=standard data-action=like data-size=small data-show-faces=true data-colorscheme=dark data-share=true font=verdana></div>";
		           echo "<!-- END plugin_facebook_likes check BLOG INDEX. -->\n\n";
		         }
                 /* */   
                 if(isset($op)) // No tabled in admin edit mode!
                 {}else
		         {
                   echo "<!-- START plugin_facebook_comments check BLOG INDEX. -->\n\n";
				   echo "<div data-colorscheme=dark class=fb-comments data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-num-posts=10 data-width=100%></div>";
		           echo "<!-- END javascript_body_facebook.php check BLOG INDEX. -->\n\n";
		         }

		           //echo "<span style=\"float: right\" align=\"right\"></span>";
		   	       echo "<div align=\"right\"><em><font size=\"1\">The 86it Developer Network</font></em><div>";
				   echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		  
			}
	}
# SWF NONE END
   else
   {
        /* */   
	    echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=5><br>\n";
		
		if($center_topic_and_title == 0) // 0 = yes
		{ 
echo "<center><b>[ Topic</b> &raquo; <a href=\"modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&amp;file=article&amp;sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b> ]</b></center>";
		}
		else
		{		
echo "<b>[ Topic</b> &raquo; <a href=\"modules.php?name=$name&amp;new_topic=".$topic."\"><font class\"subject\"><span itemprop=\"articleSection\">$topictext</span><font></a> <b>] [ Subject</b> &raquo; <font class=\"subject\"><a itemprop=\"url\" href=\"https://$domain/modules.php?name=$name&amp;file=article&amp;sid=$sid\"><span itemprop=\"name\">$title</span></a></font><b>  ]</b>";
		}
		
             # NO GIF START		
			 if ($check_filename != 'none.gif')
			 {
                if($center_topic_and_title == 0) // 0 = yes
		        {
					
			       echo "<hr />";
                   echo "<center>".$suspect."</center>";
					
				}
             # NO GIF END 
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

             /* */   
             //echo "</center>";
            
			if($center_topic_and_title == 0) // 0 = yes
			{
                if(isset($op)) // No tabled in admin edit mode!
                {}else
                {
			  #Removed For CarbonFiber Theme 
			  //echo '<hr>';
			       echo "<br />";
				   echo "<div align=\"center\">";
                   echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
		           echo "\n\n<!-- START plugin_facebook_likes check BLOG INDEX. -->\n";
		           echo "<br />";
				   echo "<div class=\"fb-like\" data-width=357 data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-layout=standard data-action=like data-size=small data-show-faces=true data-colorscheme=dark data-share=true font=verdana></div>";
		           echo "<!-- END plugin_facebook_likes check BLOG INDEX. -->\n\n";
				   echo "</div>";
		         }
                 /* */   
                 if(isset($op)) // No tabled in admin edit mode!
                 {}else
		         {
                   echo "<!-- START plugin_facebook_comments check BLOG INDEX. -->\n\n";
				   echo "<div data-colorscheme=dark class=fb-comments data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-num-posts=10 data-width=100%></div>";
		           echo "<!-- END javascript_body_facebook.php check BLOG INDEX. -->\n\n";
		         }

		           //echo "<span style=\"float: right\" align=\"right\"></span>";
		   	       echo "<div align=\"right\"><em><font size=\"1\">The 86it Developer Network</font></em><div>";
				   echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
			}
			else
			{
                if(isset($op)) // No tabled in admin edit mode!
                {}else
                {
			  #Removed For CarbonFiber Theme 
			  //echo '<hr>';
			       echo "<br />";
                   echo "$datetime <font itemprop=\"name\" class\"subject\">$title</font> | $morelink<br>";
		           echo "\n\n<!-- START plugin_facebook_likes check BLOG INDEX. -->\n";
		           echo "<br />";
				   echo "<div align=left class=\"fb-like\" data-width=$facebook_plugin_width data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-layout=standard data-action=like data-size=small data-show-faces=true data-colorscheme=dark data-share=true font=verdana></div>";
		           echo "<!-- END plugin_facebook_likes check BLOG INDEX. -->\n\n";
		         }
                 /* */   
                 if(isset($op)) // No tabled in admin edit mode!
                 {}else
		         {
                   echo "<!-- START plugin_facebook_comments check BLOG INDEX. -->\n\n";
				   echo "<div data-colorscheme=dark class=fb-comments data-href=modules.php?name=$name&amp;file=article&amp;sid=$sid data-num-posts=10 data-width=100%></div>";
		           echo "<!-- END javascript_body_facebook.php check BLOG INDEX. -->\n\n";
		         }

		           //echo "<span style=\"float: right\" align=\"right\"></span>";
		   	       echo "<div align=\"right\"><em><font size=\"1\">The 86it Developer Network</font></em><div>";
				   echo "<div align=\"right\"><font color=\"$textcolor2\"><b>$counter</b></font> Reads<div>";
		  
			}
 
          }

  if(isset($op)) // No tabled in admin edit mode!
  {}
  else
  {
  echo "<span itemprop=\"author\" itemscope itemtype=\"https://schema.org/Person\">";
  echo "<meta itemprop=\"name\" content=\"Ernest Allen Buffington\"></span>";
  echo "<!-- End Of Article -->";
  function_itemscope_article_close();
  CloseTable4(); 
  CloseTable();

  }
  
  global $ThemeSel;  
  echo "<img src=\"themes/".$ThemeSel."/header/spacer.png\" height=1><br>\n";}
?>