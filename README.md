pushbots-php-lib
[![All Contributors](https://img.shields.io/badge/all_contributors-3-orange.svg?style=flat-square)](#contributors)
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
$pb->Platform(array(0,1,2,3,4,5);
// Notification Settings
$pb->Alert($msg);
$pb->Push();

```

Send to one device 
-----


```php
require_once('PushBots.class.php');
$pb = new PushBots();
$appID = 'XXXXXXXX';
$appSecret = 'XXXXXXXX';
$pb->App($appID, $appSecret);
$pb->Platform(array(0,1,2,3,4,5);
$pb->AlertOne($msg);
$$pb->TokenOne("3dfc8119fedeb90d1b8a9xxxxxx");
$pb->PushOne();

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

## Contributors

Thanks goes to these wonderful people ([emoji key](https://github.com/kentcdodds/all-contributors#emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
| [<img src="https://avatars0.githubusercontent.com/u/6784122?v=4" width="50px;"/><br /><sub><b>amrsobhy</b></sub>](http://amrsobhy.com)<br />[💻](https://github.com/PushBots/pushbots-php-lib/commits?author=amrsobhy "Code") | [<img src="https://avatars2.githubusercontent.com/u/733794?v=4" width="50px;"/><br /><sub><b>Abdullah Diaa</b></sub>](https://abdullahdiaa.com)<br />[💻](https://github.com/PushBots/pushbots-php-lib/commits?author=AbdullahDiaa "Code") | [<img src="https://avatars0.githubusercontent.com/u/3517286?v=4" width="50px;"/><br /><sub><b>Theunis De Klerk</b></sub>](http://www.pier29.co.za)<br />[💻](https://github.com/PushBots/pushbots-php-lib/commits?author=theunisdk "Code") |
| :---: | :---: | :---: |
<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/kentcdodds/all-contributors) specification. Contributions of any kind welcome!