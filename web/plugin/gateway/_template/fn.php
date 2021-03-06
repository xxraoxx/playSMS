<?php
if(!(defined('_SECURE_'))){die('Intruder alert');};
// hook_playsmsd
// used by index.php?app=menu&inc=daemon to execute custom command
function template_hook_playsmsd() {
	// nothing
}

// hook_sendsms
// called by main sms sender
// return true for success delivery
// $mobile_sender	: sender mobile number
// $sms_sender		: sender sms footer or sms sender ID
// $sms_to		: destination sms number
// $sms_msg		: sms message tobe delivered
// $uid			: sender User ID
// $gpid		: group phonebook id (optional)
// $smslog_id		: sms ID
// $msg_type		: send flash message when the value is "flash"
// $unicode		: send unicode character (16 bit)
function template_hook_sendsms($mobile_sender,$sms_sender,$sms_to,$sms_msg,$uid='',$gpid=0,$smslog_id=0,$sms_type='text',$unicode=0) {
	// global $tmpl_param;   // global all variables needed, eg: varibles from config.php
	// ...
	// ...
	// return true or false
	// return $ok;
}

// hook_getsmsstatus
// called by index.php?app=menu&inc=daemon (periodic daemon) to set sms status
// no returns needed
// $p_datetime	: first sms delivery datetime
// $p_update	: last status update datetime
function template_hook_getsmsstatus($gpid=0,$uid="",$smslog_id="",$p_datetime="",$p_update="") {
	// global $tmpl_param;
	// p_status :
	// 0 = pending
	// 1 = sent
	// 2 = failed
	// 3 = delivered
	// setsmsdeliverystatus($smslog_id,$uid,$p_status);
}

// hook_getsmsinbox
// called by incoming sms processor
// no returns needed
function template_hook_getsmsinbox() {
	// global $tmpl_param;
	// $sms_datetime	: incoming sms datetime
	// $message		: incoming sms message
	// setsmsincomingaction($sms_datetime,$sms_sender,$message,$sms_receiver)
	// you must retrieve all informations needed by setsmsincomingaction()
	// from incoming sms, have a look gnokii gateway module
}

?>