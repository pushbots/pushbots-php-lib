<?php
	
// Push The notification with parameters
require_once('PushBots.class.php');
$pb = new PushBots();
// Application ID
$appID = '5563139317795965798b4567';
// Application Secret
$appSecret = '65466c59a0c532030d7cc990fb9a4421';
$pb->App($appID, $appSecret);
 
//$pb->AliasData(1, "APA91bGRwYKzq7TEV4qyNITFKt8JEQkW8Fd-j9ERBKNEAm3YrfFsb4jO_50fwVhc8mMhrmcsSdqlR2XAFitxFFMjPAE1ENTDBoy45gYmi9ASpZAvPdlirHvj9xr8Uu4lZ5SogMgYxr5t", "myalias");
// set Alias on the server
//$pb->setAlias();
$pb->removeByAlias("myalias");

?>