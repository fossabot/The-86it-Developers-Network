<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}
/*****[BEGIN]******************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
global $domain, $facebookappid, $facebookappsecret;
#################################################
echo "\n<div id=\"fb-root\"></div>\n";        #
echo "<script type=\"text/javascript\">\n";     #
echo "<!--\n";                                  #
#################################################
echo "window.fbAsyncInit = function() {\n";
echo "FB.init({\n";
echo "appId            : '$facebookappid',\n";
echo "autoLogAppEvents : true,\n"; 
echo "channelUrl       : 'https://$domain/channel.html',\n"; 
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
echo "(function(d, s, id){\n";
echo "var js, fjs = d.getElementsByTagName(s)[0];\n";
echo "if (d.getElementById(id)) {return;}\n";
echo "js = d.createElement(s); js.id = id;\n";
echo "js.src = \"//connect.facebook.net/en_US/sdk.js\";\n";
echo "fjs.parentNode.insertBefore(js, fjs);\n";
echo "}(document, 'script', 'facebook-jssdk'));\n";
#################################################
echo "//-->\n";                                 #
echo "</script>\n";                             #
#################################################
/*****[END]********************************************
 [ Mod:     facebook id                        v1.0.0 ]
 ******************************************************/
?>