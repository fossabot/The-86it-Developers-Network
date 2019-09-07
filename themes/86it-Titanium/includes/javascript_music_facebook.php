<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}
/*****[BEGIN]******************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
global $musicdomain, $music_facebookappid, $facebookappsecret;
$musicdomain = 'music.86it.us';
$music_facebookappid = '423684921023883';
#################################################
echo "\n<div id=\"fb-root\"></div>\n";        #
echo "<script type=\"text/javascript\">\n";     #
echo "<!--\n";                                  #
#################################################
echo "window.fbAsyncInit = function() {\n";
echo "FB.init({\n";
echo "appId            : '$music_facebookappid',\n";
echo "autoLogAppEvents : true,\n"; 
echo "channelUrl       : 'https://$musicdomain/channel.html',\n"; 
echo "status           : true,\n"; 
echo "cookie           : true,\n"; 
echo "xfbml            : true,\n"; 
echo "oauth            : true,\n";   
echo "version          : 'v2.10'\n";   
echo "});\n";
// Additional initialization code here
echo "FB.AppEvents.logPageView();\n";
echo "};\n";

// Load the SDK Asynchronously UPDATED from
// https://stackoverflow.com/questions/5334977/is-there-a-way-to-detect-if-the-facebook-javascript-sdk-loaded-successfully
// Load the SDK Asynchronously
?>
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
 <?  
#################################################
echo "//-->\n";                                 #
echo "</script>\n";                             #
#################################################
/*****[END]********************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
?>