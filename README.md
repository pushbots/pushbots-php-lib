pushbots-php-lib
================

The [PushBots PHP Client] (http://www.pushbots.com/) is a PHP client for PushBots API sending functionality.

Usage
-----
The minimal you'll need to have is:
```php
// Push The notification with parameters
require_once('PushBots.class.php');
$pb = new PushBots();
// Application ID
$appID = 'XXXXXXXX';
// Application Secret
$appSecret = 'XXXXXXXX';
$pb->App($appID, $appSecret);
$pb->Platform(array("0","1","2","3","4","5"));
// Notification Settings
$pb->Alert($msg);
$pb->Push();

```


Check other functions below:

```php
// Push The notification with parameters
require_once('PushBots.class.php');
$pb = new PushBots();
// Application ID
$appID = '';
// Application Secret
$appSecret = '';
$pb->App($appID, $appSecret);
 
// Notification Settings
$pb->Alert($msg);
$pb->Sound($sound);
$pb->Badge($badge);
$pb->Platform($platforms);
 
// Tags Array
$pb->Tags($tags);

// The time to send the notification, in UTC e.g. 2015-04-02T11:33:00.
$pb->Schedule('2015-04-02T11:33:00');

// Custom fields
$pb->Payload($customfields);
 
// Push it !
$pb->Push();
 
// Update Alias
/**
 * set Alias Data
 * @param   integer $platform 0=> iOS or 1=> Android.
 * @param   String  $token Device Registration ID.
 * @param   String  $alias New Alias.
 */
  
$pb->AliasData(1, "APA91bFpQyCCczXC6hz4RTxxxxx", "test");
// set Alias on the server
$pb->setAlias();
 
// Push to Single Device
// Notification Settings
$pb->AlertOne("test Mesage");

//Remove device by Alias
$pb->removeByAlias("myalias");


));
```
