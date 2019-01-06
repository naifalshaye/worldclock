# World Clock
A Laravel Nova card to display world clock

## Installation:

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require naif/world-clock
```

## Usage:
Add the below to app/Providers/NovaServiceProvder.php

```php
  public function card()
  {
      return [
         (new WorldClock())
            ->timezones([
                'Asia/Tokyo',
                'Asia/Dubai',
                'America/new_york',
                'America/los_angeles',
            ]),
      ];
  }
```

<img src="https://raw.githubusercontent.com/naifalshaye/worldclock/master/screenshots/screenshot.png" width="350">

## Format Time ( optional )

Add a different format to the constructor, see http://php.net/manual/en/function.date.php for available formatting options.

For example: 24-hour formatting:
```php
  public function card()
  {
      return [
         (new WorldClock('H:i'))
            ->timezones([
                'Asia/Tokyo',
                'Asia/Dubai',
                'America/new_york',
                'America/los_angeles',
            ]),
      ];
  }
```


## Credits
[Abdullah Algethami](https://twitter.com/3bdo3tb)

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
