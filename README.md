# World Clock
A Laravel Nova card to display world clocks

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

<img src="https://raw.githubusercontent.com/naifalshaye/worldclock/master/screenshots/screenshot.png" width="500">

## Credits
[Abdullah Algethami](https://twitter.com/3bdo3tb)

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
