<form action="{S_PROFILE_ACTION}" {s_form_enctype} method="post">

{ERROR_BOX}

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
    <tr>
        <td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
    </tr>
</table>

<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
    <tr>
        <th class="thHead" colspan="2" height="25" valign="middle">{L_REGISTRATION_INFO}</th>
    </tr>
    <tr>
        <td class="row1" width="38%"><span class="gen"><b>Full Real Name: </b><font color="#CC0000"><b>(required) *</b></font></span></td>
        <td class="row2"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></td>
    </tr>
    <tr>
        <td class="row1" width="38%"><span class="gen"><b>Nick Name: </b></span></td>
        <td class="row2"><input type="text" class="post" style="width:200px" name="rname" size="25" maxlength="25" value="{RNAME}" /></td>
    </tr>
    <tr>
        <td class="row1"><span class="gen"><b>{L_EMAIL_ADDRESS}: </b><font color="#CC0000"><b>(required) *</b></font></span></td>
        <td class="row2"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
    </tr>
    <!-- Start add - Gender MOD -->
    <tr> 
        <td class="row1"><span class="gen"><b>{L_GENDER}:</b></span></td> 
        <td class="row2"> 
        <input name="gender" type="radio" value="0" {LOCK_GENDER} {gender_no_specify_checked}/> 
        <span class="gen">{L_GENDER_NOT_SPECIFY}</span>&nbsp;&nbsp; 
        <input type="radio" name="gender" value="1" {GENDER_MALE_CHECKED}/> 
        <span class="gen">{L_GENDER_MALE}</span>&nbsp;&nbsp; 
        <input type="radio" name="gender" value="2" {GENDER_FEMALE_CHECKED}/> 
      <span class="gen">{L_GENDER_FEMALE}</span></td> 
    </tr>
    <!-- End add - Gender MOD -->
	<!-- BEGIN birthday_required -->
	<tr>
	  <td class="row1"><span class="gen">{L_BIRTHDAY}: *</span></td>
	  <td class="row2">{BIRTHDAY_INTERFACE}</td>
	</tr>
	<!-- END birthday_required -->
    <!-- BEGIN switch_edit_profile -->
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td colspan="2"><b><center>Skip This Section If You Are Not Changing Your Password</center></b></td></tr>
    <tr><td></td></tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_CURRENT_PASSWORD}:</b> <font color="#CC0000"><b>(required) *</b></font></span><br />
        <span class="gensmall"><font color="#CC0000">{L_CONFIRM_PASSWORD_EXPLAIN}</font></span></td>
      <td class="row2">
        <input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="100" value="{CUR_PASSWORD}" />
      </td>
    </tr>
    <!-- END switch_edit_profile -->
    <!-- BEGIN switch_ya_merge -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_NEW_PASSWORD}:</b> <font color="#CC0000"><b>(required) *</b></font></span><br />
        <span class="gensmall"><font color="#CC0000">{L_PASSWORD_IF_CHANGED}</font></span></td>
      <td class="row2" nowrap="nowrap"> 
		<script language="JavaScript" type="text/javascript">
		<!--
		// Password security
		function check_pw(pw_to_check) 
		{
			var counter_to_check = 0;
			var minlength_to_check = 6;
		
			if (pw_to_check.length >= minlength_to_check)
			{
				counter_to_check = counter_to_check + 1;
			}
			if (pw_to_check.match(/[A-Z\�\�\�]/))
			{
				counter_to_check = counter_to_check + 2;
			}
			if (pw_to_check.match(/[a-z\�\�\�\�]/))
			{
				counter_to_check = counter_to_check + 1;
			}
			if (pw_to_check.match(/[0-9]/))
			{
				counter_to_check = counter_to_check + 2;
			}
            if (pw_to_check.match(/[\.\,\?\!\%\*\_\#\:\;\~\\&\$\�\�\@\/\=\+\-\(\)\[\]\|\<\>]/)) 
            { 
               counter_to_check = counter_to_check + 2; 
            } 
			if (pw_to_check == document.getElementsByName('username').username.value)
			{
				counter_to_check = 0;
			}
			if (pw_to_check == document.getElementsByName('email').email.value)
			{
				counter_to_check = 0;
			}

			if (counter_to_check <= 2)
			{
				document.getElementsByName('holder_pw')[0].style.backgroundColor = 'red';
				document.getElementsByName('holder_pw')[0].style.color = 'black';
				document.getElementsByName('holder_pw')[0].style.border = '1px solid black';
				document.getElementsByName('holder_pw')[0].value = '{L_PASSWORD_SECURITY_LEVEL1}';
			}
			else if (counter_to_check <= 4)
			{
				document.getElementsByName('holder_pw')[0].style.backgroundColor = 'yellow';
				document.getElementsByName('holder_pw')[0].style.color = 'black';
				document.getElementsByName('holder_pw')[0].style.border = '1px solid black';
				document.getElementsByName('holder_pw')[0].value = '{L_PASSWORD_SECURITY_LEVEL2}';
			}
			else if (counter_to_check <= 5)
			{
				document.getElementsByName('holder_pw')[0].style.backgroundColor = 'green';
				document.getElementsByName('holder_pw')[0].style.color = 'white';
				document.getElementsByName('holder_pw')[0].style.border = '1px solid black';
				document.getElementsByName('holder_pw')[0].value = '{L_PASSWORD_SECURITY_LEVEL3}';
			}
			else if (counter_to_check <= 7)
			{
				document.getElementsByName('holder_pw')[0].style.backgroundColor = 'green';
				document.getElementsByName('holder_pw')[0].style.color = 'white';
				document.getElementsByName('holder_pw')[0].style.border = '1px solid black';
				document.getElementsByName('holder_pw')[0].value = '{L_PASSWORD_SECURITY_LEVEL4}';
			}
			else if (counter_to_check == 8)
			{
				document.getElementsByName('holder_pw')[0].style.backgroundColor = 'green';
				document.getElementsByName('holder_pw')[0].style.color = 'white';
				document.getElementsByName('holder_pw')[0].style.border = '1px solid black';
				document.getElementsByName('holder_pw')[0].value = '{L_PASSWORD_SECURITY_LEVEL5}';
			}
		}
		//-->
		</script>
	<input onkeyup="check_pw(this.value);" onfocus="check_pw(this.value);" type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" />
		<span class="gensmall"><a href="{U_FAQ}#39" tabindex="98" target="_phpbbfaq"></a></span> 

      </td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_CONFIRM_PASSWORD}:</b> <font color="#CC0000"><b>(required) *</b></font> </span><br />
        <span class="gensmall"><font color="#CC0000">{L_PASSWORD_CONFIRM_IF_CHANGED}</font></span></td>
      <td class="row2">
        <input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="100" value="{PASSWORD_CONFIRM}" />
      </td>
    </tr>
    <!-- END switch_ya_merge -->
    <!-- BEGIN switch_silent_password -->
    <input type="hidden" name="new_password" value="{NEW_PASSWORD}" />
    <input type="hidden" name="password_confirm" value="{PASSWORD_CONFIRM}" />
    <!-- END switch_silent_password -->
    <tr>
      <td class="catSides" colspan="2" height="28">&nbsp;</td>
    </tr>
    <tr>
      <th class="thSides" colspan="2" height="25" valign="middle">{L_PROFILE_INFO}</th>
    </tr>
    <tr>
      <td class="row2" colspan="2"><span class="gensmall"><center><font color="#CC0000"><b>{L_PROFILE_INFO_NOTICE}</b></font></center></span></td>
    </tr>
	<tr>
	  <td class="row1"><span class="gen"><b>Enter Your MySpace Address:</b></span></td>
	  <td class="row2">
		<input type="text" class="post"style="width: 300px"  name="myspace" size="25" maxlength="255" value="{MYSPACE}" /> <br /><font color="#CC0000">i.e. https://www.myspace.com/john.nobody.doe</font>
	  </td>
	</tr>  
	<tr>
	  <td class="row1"><span class="gen"><b>Enter Your Facebook Address:</b> </span></td>
	  <td class="row2">
		<input type="text" class="post"style="width: 300px"  name="userfacebook" size="25" maxlength="255" value="{FACEBOOK}" />  <br /><font color="#CC0000">i.e. http://www.facebook.com/john.nobody.doe</font>
	  </td>
	</tr>      
<!-- BEGIN xdata -->
<!-- BEGIN switch_is_icq -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_ICQ_NUMBER}:</b></span></td>
      <td class="row2">
        <input type="text" name="icq" class="post" style="width: 100px"  size="10" maxlength="15" value="{ICQ}" />
      </td>
    </tr>
<!-- END switch_is_icq -->
<!-- BEGIN switch_is_aim -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_AIM}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 150px"  name="aim" size="20" maxlength="255" value="{AIM}" />
      </td>
    </tr>
<!-- END switch_is_aim -->
<!-- BEGIN switch_is_msn -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_MESSENGER}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 150px"  name="msn" size="20" maxlength="255" value="{MSN}" />
      </td>
    </tr>
<!-- END switch_is_msn -->
<!-- BEGIN switch_is_yim -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_YAHOO}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 150px"  name="yim" size="20" maxlength="255" value="{YIM}" />
      </td>
    </tr>
<!-- END switch_is_yim -->
<!-- BEGIN switch_is_website -->
    <tr>
      <td class="row1"><span class="gen"><b>86it Website Portal:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 300px"  name="website" size="25" maxlength="255" value="{WEBSITE}" /> <br /><font color="#CC0000">i.e. http://yourname.86it.us</font>
      </td>
    </tr>
<!-- END switch_is_website -->
<!-- BEGIN switch_is_location -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_LOCATION}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 200px"  name="location" size="25" maxlength="100" value="{LOCATION}" />
      </td>
    </tr>
<!-- FLAGHACK-start -->
	<tr>
	  <td class="row1"><span class="gen"><b>{L_FLAG}:</b></span></td>
	  <td class="row2">
	  <span class="gensmall">
		<table>
		  <tr>
		    <td>{FLAG_SELECT}&nbsp;</td>
	  	    <td><img src="images/flags/{FLAG_START}" width="16" height="11" name="user_flag" /></td>
		  </tr>
		</table>
	  </span>
	  </td>
	</tr>
<!-- FLAGHACK-end -->
<!-- END switch_is_location -->
<!-- BEGIN switch_is_occupation -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_OCCUPATION}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 200px"  name="occupation" size="25" maxlength="100" value="{OCCUPATION}" />
      </td>
    </tr>
<!-- END switch_is_occupation -->
<!-- BEGIN switch_is_interests -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_INTERESTS}:</b></span></td>
      <td class="row2">
        <input type="text" class="post" style="width: 200px"  name="interests" size="35" maxlength="150" value="{INTERESTS}" />
      </td>
    </tr>
<!-- END switch_is_interests -->
<!-- BEGIN switch_is_signature -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_EXTRA_INFO}</b></span></td>
      <td class="row2">
        <textarea wrap='virtual' class="post" cols='50' rows='5' name='extra_info' />{EXTRA_INFO}</textarea>
      </td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{SIG_DESC}:</b></span></td>
      <td class="row2">
        <input type="button" value="{SIG_BUTTON_DESC}" onclick="window.location.href='{SIG_EDIT_LINK}'" />
      </td>
    </tr>
<!-- END switch_is_signature -->
    <!-- BEGIN switch_type_date -->
    <tr>
      <td class="row1">
        <span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
      </td>
      <td class="row2">
        <input type="text" class="post"style="width: 200px" name="{xdata.CODE_NAME}" size="35" maxlength="{xdata.MAX_LENGTH}" value="{xdata.VALUE}" />
      </td>
    </tr>
    <!-- END switch_type_date -->
    <!-- BEGIN switch_type_text -->
    <tr>
      <td class="row1">
        <span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
      </td>
      <td class="row2">
        <input type="text" class="post" style="width: 200px" name="{xdata.CODE_NAME}" size="35" maxlength="{xdata.MAX_LENGTH}" value="{xdata.VALUE}" />
      </td>
    </tr>
    <!-- END switch_type_text -->
    <!-- BEGIN switch_type_textarea -->
    <tr>
      <td class="row1">
        <span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
      </td>
      <td class="row2">
        <textarea name="{xdata.CODE_NAME}" style="width: 300px"  rows="6" cols="30" class="post">{xdata.VALUE}</textarea>
      </td>
    </tr>
    <!-- END switch_type_textarea -->
    <!-- BEGIN switch_type_checkbox -->
      	<td class="row1">
        	<span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
	</td>
	<td class="row2">
		<input type="checkbox" name="{xdata.CODE_NAME}" {xdata.switch_type_checkbox.checked} />		<br>
	</td>
	<!-- END switch_type_checkbox -->
    <!-- BEGIN switch_type_select -->
    <tr>
      <td class="row1">
        <span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
      </td>
      <td class="row2">
         <select name="{xdata.CODE_NAME}">
           <!-- BEGIN options -->
           <option value="{xdata.switch_type_select.options.OPTION}" {xdata.switch_type_select.options.selected}>{xdata.switch_type_select.options.OPTION}</option>
           <!-- END options -->
         </select>
      </td>
    </tr>
    <!-- END switch_type_select -->
    <!-- BEGIN switch_type_radio -->
    <tr>
      <td class="row1">
        <span class="gen">{xdata.NAME}</span><br /><span class="gensmall">{xdata.DESCRIPTION}</span>
      </td>
      <td class="row2">
         <!-- BEGIN options -->
         <input type="radio" name="{xdata.CODE_NAME}" value="{xdata.switch_type_radio.options.OPTION}" {xdata.switch_type_radio.options.checked} />
         <span class="gen">{xdata.switch_type_radio.options.OPTION}</span><br />
         <!-- END options -->
      </td>
    </tr>
    <!-- END switch_type_radio -->
<!-- END xdata -->
    <tr>
      <td class="catSides" colspan="2" height="28">&nbsp;</td>
    </tr>
    <tr>
      <th class="thSides" colspan="2" height="25" valign="middle">{L_PREFERENCES}</th>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>Show At A Glance: (Recent Topics)</b></span></td>
      <td class="row2">{GLANCE_SHOW}</td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>Hide Images In Forums:</b></span></td>
      <td class="row2">
        <input type="radio" name="hide_images" value="1" {HIDE_IMAGES_YES} />
        <span class="gen">{L_YES}</span>
        <input type="radio" name="hide_images" value="0" {HIDE_IMAGES_NO} />
        <span class="gen">{L_NO}</span>
      </td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_PUBLIC_VIEW_EMAIL}:</b></span></td>
      <td class="row2">
        <input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_HIDE_USER}:</b></span></td>
      <td class="row2">
        <input type="radio" name="hideonline" value="1" {HIDE_USER_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="hideonline" value="0" {HIDE_USER_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
	<tr>
	  <td class="row1"><span class="gen"><b>{L_BIRTHDAY_DISPLAY}:</b></span></td>
	  <td class="row2"><span class="gen">
	    <select name="birthday_display">
	      <option value="{BIRTHDAY_ALL}"{birthday_all_selected}>{L_BIRTHDAY_ALL}</option>
	      <option value="{BIRTHDAY_DATE}"{birthday_date_selected}>{L_BIRTHDAY_YEAR}</option>
	      <option value="{BIRTHDAY_AGE}"{birthday_age_selected}>{L_BIRTHDAY_AGE}</option>
	      <option value="{BIRTHDAY_NONE}"{birthday_none_selected}>{L_BIRTHDAY_NONE}</option>
	    </select>
	  </td>
	</tr>
	<!-- BEGIN birthdays_greeting -->
	<tr>
	  <td class="row1"><span class="gen">{L_BDAY_SEND_GREETING}:</span><br /><span class="gensmall">{L_BDAY_SEND_GREETING_EXPLAIN}</span></td>
	  <td class="row2"><span class="gen">
		  <input type="radio" name="bday_greeting" value="0" {BDAY_NONE_ENABLED} /> {L_NONE}&nbsp;&nbsp;
		  <!-- BEGIN birthdays_email -->
		  <input type="radio" name="bday_greeting" value="{BDAY_EMAIL}" {BDAY_EMAIL_ENABLED} /> {L_EMAIL}&nbsp;&nbsp;
		  <!-- END birthdays_email -->
		  <!-- BEGIN birthdays_pm -->
		  <input type="radio" name="bday_greeting" value="{BDAY_PM}" {BDAY_PM_ENABLED} /> {L_PM}&nbsp;&nbsp;
		  <!-- END birthdays_pm -->
		  <!-- BEGIN birthdays_popup -->
		  <input type="radio" name="bday_greeting" value="{BDAY_POPUP}" {BDAY_POPUP_ENABLED} /> {L_POPUP}&nbsp;&nbsp;
		  <!-- END birthdays_popup -->
	  </span></td>
	</tr>
	<!-- END birthdays_greeting -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_NOTIFY_ON_REPLY}:</b></span><br />
        <span class="gensmall"><font color="#CC0000">{L_NOTIFY_ON_REPLY_EXPLAIN}</font></span></td>
      <td class="row2">
        <input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_NOTIFY_ON_PRIVMSG}:</b></span></td>
      <td class="row2">
        <input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <!-- Start add - Custom mass PM MOD -->
    <!-- BEGIN switch_can_disable_mass_pm -->
    <tr>
        <td class="row1"><span class="gen"><b>{L_ENABLE_MASS_PM}:</b></span><br />
        <span class="gensmall"><font color="#CC0000">{L_ENABLE_MASS_PM_EXPLAIN}</font></span></td>
        <td class="row2">
        <input type="radio" name="allow_mass_pm" value="4" {ALLOW_MASS_PM_NOTIFY_CHECKED}/>
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="allow_mass_pm" value="2" {ALLOW_MASS_PM_CHECKED}/>
        <span class="gen">{L_NO}</span>&nbsp;&nbsp;
        <input type="radio" name="allow_mass_pm" value="0" {DISABLE_MASS_PM_CHECKED}/>
        <span class="gen">{L_NO_MASS_PM}</span></td>
    </tr>
    <!-- END switch_can_disable_mass_pm -->

    <!-- BEGIN switch_can_not_disable_mass_pm -->
    <tr>
        <td class="row1"><span class="gen"><b>{L_ENABLE_MASS_PM}:</b></span><br />
        <span class="gensmall"><font color="#CC0000">{L_ENABLE_MASS_PM_EXPLAIN}</font></span></td>
        <td class="row2">
        <input type="radio" name="allow_mass_pm" value="4" {ALLOW_MASS_PM_NOTIFY_CHECKED}/>
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="allow_mass_pm" value="2" {ALLOW_MASS_PM_CHECKED}/>
        <span class="gen">{L_NO}</span></td>
    </tr>
    <!-- END switch_can_not_disable_mass_pm -->
    <!-- End add - Custom mass PM MOD -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_POPUP_ON_PRIVMSG}:</b></span><br /><span class="gensmall"><font color="#CC0000">{L_POPUP_ON_PRIVMSG_EXPLAIN}</font></span></td>
      <td class="row2">
        <input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} /> 
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_ALWAYS_ADD_SIGNATURE}:</b></span></td>
      <td class="row2">
        <input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_ALWAYS_ALLOW_BBCODE}:</b></span></td>
      <td class="row2">
        <input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_ALWAYS_ALLOW_HTML}:</b></span></td>
      <td class="row2">
        <input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
	<!-- BEGIN birthday_optional -->
	<tr>
	  <td class="row1"><span class="gen"><b>{L_BIRTHDAY}:</b></span></td>
	  <td class="row2">{BIRTHDAY_INTERFACE}</td>
	</tr>
	<!-- END birthday_optional -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_ALWAYS_ALLOW_SMILIES}:</b></span></td>
      <td class="row2">
        <input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_SHOW_AVATARS}:</b></span></td>
      <td class="row2">
        <input type="radio" name="showavatars" value="1" {SHOW_AVATARS_YES} />
        <span class="gen">{L_YES}</span>
        <input type="radio" name="showavatars" value="0" {SHOW_AVATARS_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_SHOW_SIGNATURES}:</b></span></td>
      <td class="row2">
        <input type="radio" name="showsignatures" value="1" {SHOW_SIGNATURES_YES} />
        <span class="gen">{L_YES}</span>
        <input type="radio" name="showsignatures" value="0" {SHOW_SIGNATURES_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_NEWSLETTER}:</b></span></td>
      <td class="row2">
        <input type="radio" name="newsletter" value="1" {NEWSLETTER_YES} />
        <span class="gen">{L_YES}</span>&nbsp;&nbsp;
        <input type="radio" name="newsletter" value="0" {NEWSLETTER_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
    <!-- BEGIN force_word_wrapping -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_WORD_WRAP}:</b></span><br /><span class="gensmall"><font color="#CC0000">{L_WORD_WRAP_EXPLAIN}</font></span></td>
      <td class="row2"><span class="gensmall"><input type="text" name="user_wordwrap" value="{WRAP_ROW}" size="2" maxlength="2" class="post" /> <font color="#CC0000">{L_WORD_WRAP_EXTRA}</font></span></td>
    </tr>
    <!-- END force_word_wrapping -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_BOARD_LANGUAGE}:</b></span></td>
      <td class="row2"><span class="gensmall">{LANGUAGE_SELECT}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_BOARD_STYLE}:</b></span></td>
      <td class="row2"><span class="gensmall">{STYLE_SELECT}</span></td>
    </tr>
        <!-- Start replacement - Advanced time management MOD -->
    <tr>
        <td class="row1"><span class="gen"><b>{L_TIME_MODE}:</b></span><br />
            <span class="gensmall"><font color="#CC0000">{L_TIME_MODE_TEXT}</font></span></td>
        <td class="row2">
            <span class="gen">{L_TIME_MODE_AUTO}</span><br />
            <input type="radio" name="time_mode" value="6" {TIME_MODE_FULL_PC_CHECKED}/>
        <span class="gen">{L_TIME_MODE_FULL_PC}</span>&nbsp;&nbsp;<br />
            <input type="radio" name="time_mode" value="4" {TIME_MODE_SERVER_PC_CHECKED}/>
        <span class="gen">{L_TIME_MODE_SERVER_PC}</span>&nbsp;&nbsp;<br />
            <input type="radio" name="time_mode" value="3" {TIME_MODE_FULL_SERVER_CHECKED}/>
            <span class="gen">{L_TIME_MODE_FULL_SERVER}</span>
            <br /><br />
            <span class="gen">{L_TIME_MODE_MANUAL}</span><br />
        <span class="gen">&nbsp;&nbsp;{L_TIME_MODE_DST}:</span><input type="radio" name="time_mode" value="1" {TIME_MODE_MANUAL_DST_CHECKED}/><span class="gen">{L_YES}{L_TIME_MODE_DST_ON}</span>&nbsp;<input type="radio" name="time_mode" value="0" {TIME_MODE_MANUAL_CHECKED}/><span class="gen">{L_NO}{L_TIME_MODE_DST_OFF}</span>&nbsp;<input type="radio" name="time_mode" value="2" {TIME_MODE_SERVER_SWITCH_CHECKED}/><span class="gen">{L_TIME_MODE_DST_SERVER}</span><br />
        <span class="gen">&nbsp;&nbsp;{L_TIME_MODE_DST_TIME_LAG}: </span><input type="text" name="dst_time_lag" value="{DST_TIME_LAG}" maxlength="3" size="3" class="post" /><span class="gen">{L_TIME_MODE_DST_MN}</span><br />
        <span class="gen">&nbsp;&nbsp;{L_TIME_MODE_TIMEZONE}: </span><span class="gensmall">{TIMEZONE_SELECT}</span></td>
    </tr>
        <!-- End replacement - Advanced time management MOD -->
    <tr>
      <td class="row1"><span class="gen"><b>{L_DATE_FORMAT}:</b></span><br />
        <span class="gensmall"><font color="#CC0000">{L_DATE_FORMAT_EXPLAIN}</font></span></td>
      <td class="row2">
        <input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="14" class="post" />
      </td>
    </tr>
    <tr>
      <td class="catSides" colspan="2"><span class="cattitle">&nbsp;</span></td>
    </tr>
    <tr>
      <th class="thSides" colspan="2" height="12" valign="middle"><b>{L_QUICK_REPLY_PANEL}</b></th>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_SHOW_QUICK_REPLY}:</b></span></td>
      <td class="row2">{QUICK_REPLY_SELECT}</td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_QUICK_REPLY_MODE}:</b></span></td>
      <td class="row2">
        <input type="radio" name="quickreply_mode" value="0" {QUICK_REPLY_MODE_BASIC} />
        <span class="gen">{L_QUICK_REPLY_MODE_BASIC}</span>&nbsp;&nbsp;
        <input type="radio" name="quickreply_mode" value="1" {QUICK_REPLY_MODE_ADVANCED} />
        <span class="gen">{L_QUICK_REPLY_MODE_ADVANCED}</span></td>
    </tr>
    <tr>
      <td class="row1"><span class="gen"><b>{L_OPEN_QUICK_REPLY}:</b></span></td>
      <td class="row2">
        <input type="radio" name="open_quickreply" value="1" {OPEN_QUICK_REPLY_YES} />
        <span class="gen">{L_YES}</span>
        <input type="radio" name="open_quickreply" value="0" {OPEN_QUICK_REPLY_NO} />
        <span class="gen">{L_NO}</span></td>
    </tr>
        <tr>
        <td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></td>
    </tr>
</table>

</form>