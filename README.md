# ICQ Bot Message Sender
Author : John Michael Aracosts
<img src="https://icq.com/botapi/res/logo_icq_new.png" width="40%"><img src="https://myteam.mail.ru/botapi/res/logo_myteam.png" width="40%">\

## Install (Composer)
```
composer require csnntrt/icq-bot
```
## Usage
```php
<?php

require 'vendor/autoload.php';

use Csnntrt\IcqBot\Bot;

$bot = new Icq('Icq Token', 'https://api.icq.net/bot/v1');

$bot->sendText('ChatId', 'Example Message');


```
## message response
```
Message was sent successfully
```