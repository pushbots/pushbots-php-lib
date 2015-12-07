<?php
	

// Push The notification with parameters
require_once('PushBots.class.php');
$pb = new PushBots();
// Application ID
$appID = '518d187xx';
// Application Secret
$appSecret = '25e8507956b62d81xxx';
$pb->App($appID, $appSecret);
 

// Notification Settings
$pb->Alert("test Mesage");
$pb->Platform(array("0","1"));
$pb->Badge("+2");

// Update Alias 
/**
 * set Alias Data
 * @param	integer	$platform 0=> iOS or 1=> Android.
 * @param	String	$token Device Registration ID.
 * @param	String	$alias New Alias.
 */
 
$pb->AliasData(1, "APA91bFpQyCCczXC6hz4RTxxxxx", "test");
// set Alias on the server
$pb->setAlias();

// Push it !
$pb->Push();

// Push to Single Device
// Notification Settings
$pb->AlertOne("test Mesage");
$pb->PlatformOne("0");
$pb->TokenOne("3dfc8119fedeb90d1b8a9xxxxxx");

//Push to Single Device
$pb->PushOne();

//Remove device by Alias
$pb->removeByAlias("myalias");


?>



