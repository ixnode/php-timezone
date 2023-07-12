# PHP Timezone

This library converts different timezone strings.

## Installation

```bash
composer require ixnode/php-timezone
```

```bash
vendor/bin/php-timezone -V
```

```bash
php-timezone 0.1.0 (12-19-2022 01:17:26) - Björn Hempel <bjoern@hempel.li>
```

## Usage

```php
use Ixnode\PhpTimezone\Timezone;
```

```php
$countryCode = (new Timezone('Europe/Berlin'))->getCountryCode();
// DE
```

```php
$countryName = (new Timezone('Europe/Berlin'))->getCountryName();
// Germany
```

```php
use Ixnode\PhpTimezone\Constants\Language

$countryName = (new Timezone('Europe/Berlin'))->getCountryName(Language::DE_DE);
// Deutschland
```

## Development

```bash
git clone git@github.com:ixnode/php-timezone.git && cd php-timezone
```

```bash
composer install
```

```bash
composer test
```

## License

This tool is licensed under the MIT License - see the [LICENSE](/LICENSE) file for details