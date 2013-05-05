PushBots PHP Library
```
// PushBots Application ID
$appID = "";
// PushBots Application Secret
$appSecret = "";
// Platforms Array [0=> iOS , 1=>Android]
$patforms = array(0,1);
$pb = new PushBots();
$pb->App($appID, $appSecret);
$pb->Alert("Notificaiton Message");
$pb->Platform($patforms);
$pb->Tags($tags_array);
$pb->Payload($customfields);
$pb->Geo($country , $gov);
$pb->Push();
```
