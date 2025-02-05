# PHP Telegram Bot Api

Extended native php wrapper for [Telegram Bot API](https://core.telegram.org/bots/api) without requirements.

## Bots: An introduction for developers

> You control your bots using HTTPS requests to [bot API](https://core.telegram.org/bots/api).
>
> The Bot API is an HTTP-based interface created for developers keen on building bots for Telegram.
> To learn how to create and set up a bot, please consult [Introduction to Bots](https://core.telegram.org/bots)
> and [Bot FAQ](https://core.telegram.org/bots/faq).

## Installation

### Requirements
- PHP 8.1 and higher
- Telegram Bot Token - Talk to [@BotFather](https://t.me/BotFather) and generate one.

### Installation
Via Composer

``` bash
$ composer require slavasamsonow/telegram-bot-api
```

## Usage

### The Basics

#### Before Initialize SDK
```php
require __DIR__.'/vendor/autoload.php';

use \Slavasamsonow\TelegramBotApi\TelegramBotApi;

$bot = new TelegramBotApi($botToken);
$botInfo = $bot->getMe();
```

#### Send message

```php
// Create bot
$bot = new TelegramBotApi($botToken);

// Create send message request
$request = new \Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendMessageRequest($chatId, $text);

// Send request
$bot->sendMessage($request);
```

#### Send photo with InputFile

```php
// Create bot
$bot = new TelegramBotApi($botToken);

// Create Input file
$file = file_get_contents($url);
$inputFile = new \Slavasamsonow\TelegramBotApi\InputFile($file);

// Create Send photo request
$request = new \Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendPhotoRequest($id, $inputFile)

// Send request
$bot->sendPhoto($chatId, $document);
```

#### Send message with inline keyboard

```php
// Create bot
$bot = new TelegramBotApi($botToken);

// Create inline button 
$inlineButton = \Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardButton::createUrlButton($buttonName, $url);

// Create inline keyboard row
$inlineKeyboardRow = new \Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardRow([$inlineButton]);

// create inline keyboard
$inlineKeyboard = new \Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboard([$inlineKeyboardRow]);

// Create reply markup
$replyMarkup = new \Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup($inlineKeyboard);

// Create send message request
$request = new \Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendMessageRequest($chatId, $text, replyMarkup: $replyMarkup);

// Send request
$bot->sendMessage($request);
```

#### Send media group

```php
// Create bot
$bot = new TelegramBotApi($botToken);

// Create Media
$media = new \Slavasamsonow\TelegramBotApi\RequestObjects\Media\Media();

// Add 1 photo
$media->addPhoto(
    new \Slavasamsonow\TelegramBotApi\RequestObjects\Media\InputMediaPhoto(
        $url1,
        $caption
    )
);

// Add 2 photo
$media->addPhoto(
    new \Slavasamsonow\TelegramBotApi\RequestObjects\Media\InputMediaPhoto(
        $url2
    )
);

// Create send media group request
$request = new \Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendMediaGroupRequest($id, $media);

// send request
$res = $bot->sendMediaGroup($request);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.