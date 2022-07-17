# ICQ Bot Message Sender

[![logo](https://icq.com/botapi/res/logo_icq_new.png)](https://icq.com/)
## features

- Fast sending message

## Installation

```sh
composer require csnntrt/icq-bot
```

## Usage

Require the autoload:

```php
require 'vendor/autoload.php';
```

Use the namespace

```php
use Csnntrt\IcqBot\Bot;
```

Sending with the Sender

```php
$bot = new Icq('Icq Token', 'https://api.icq.net/bot/v1');

$bot->sendText('ChatId', 'Example Message');
```

### Message Response
```
Message was sent successfully
```

## License

MIT

**Happy Sending!**
