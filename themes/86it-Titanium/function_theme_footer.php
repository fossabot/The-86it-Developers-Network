<?php // TIDY
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){ exit('Access Denied'); }

$theme_name = basename(dirname(__FILE__));

function themefooter() 
{
    global $ThemeSel, $banners, $op;

	//echo "</td>\n";                                                                                                                 
#####################################################################################################################################
	//this is where i control the gap between the left side of the right block and the right side of the center block!              #
#####################################################################################################################################
    if(blocks_visible('right')) 
    {
	    if ( ($op =="info") or ($op =="newsletter") or ($op =="messages") )
        {
###############################################################################################################################################
			//with no right blocks this sets the space between the right bolcks and the right margin of the page                              #
	      echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/images/spacer.png\" width=\"1\" height=\"15\" border=\"0\" alt=\"\"></td><td>\n";#
###############################################################################################################################################
		}
		else
		{
###############################################################################################################################################
		  //with right blocks this sets the space between the center block and the right block of the right side of the page                  #
	      echo "<td><img src=\"".HTTPS."themes/".$ThemeSel."/images/spacer.png\" width=\"7\" height=\"15\" border=\"0\" alt=\"\"></td><td>\n";#
###############################################################################################################################################
		  blocks('right');
		}
    }
	
    echo "</td>\n"
	
        ."<td width=\"21\" valign=\"top\" background=\"".HTTPS."themes/".$ThemeSel."/sides/rightbg.png\">\n" 
		."<img src=\"".HTTPS."themes/".$ThemeSel."/sides/rightbg.png\" width=\"21\" height=\"15\" border=\"0\">\n" 
		."</td>\n"
	
	    ."</tr>\n"
	    ."</table>\n\n\n";

    //firefox pointed out that these are extra tags and not needed by hiughlighting them in RED in source view
    //echo"<tr>\n";
    //echo"<td height=\"42\"></td>\n";
    //echo"</tr>\n";
    //echo"</table></td>\n";
    //echo"</tr>\n";
    //echo"</table></td>\n";
    //echo"</tr>\n";
    //echo"</table>\n";
    //echo"</td>\n";
    //echo"</tr>\n";
    //echo"</table>\n";
    //firefox pointed out that these are extra tags and not needed by hiughlighting them in RED in source view

    echo"<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" width=\"100%\">";
    echo"<tr>";
    echo"<td width=\"100%\" background=\"".HTTPS."themes/".$ThemeSel."/footer/nukestyle-ft_lt.png\">";
    echo"<img src=\"".HTTPS."themes/".$ThemeSel."/footer/nukestyle-ft_01.png\" width=20 height=173>";
    echo"</td>";
    echo"<td width=\"100%\">";
    echo"<img src=\"".HTTPS."themes/".$ThemeSel."/footer/nukestyle-ft_05.png\" width=20 height=173></td>";
    echo"</tr>";
    echo"</table>";
    	
	echo "<center>";
    footmsg();
    echo "</center>";
}
?>