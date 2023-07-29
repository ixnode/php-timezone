# PHP Timezone

This library converts different timezone strings.

## Usage

```php
use Ixnode\PhpTimezone\Timezone;
```

### Get country code from given timezone.

```php
print (new Timezone('Europe/Berlin'))->getCountryCode();
// (string) "DE"
```

### Get country name in english from given timezone.

```php
print (new Timezone('Europe/Berlin'))->getCountryName();
// (string) "Germany"
```

### Get country name in german from given timezone.

```php
use Ixnode\PhpTimezone\Constants\Locale

print (new Timezone('Europe/Berlin'))->getCountryName(Locale::DE_DE);
// (string) "Deutschland"
```

### Get some language names in different languages

```php
use Ixnode\PhpTimezone\Constants\Locale
use Ixnode\PhpTimezone\Constants\Language

print Language::DE_DE[Locale::DE_DE];
// (string) "Deutsch (Deutschland)"
print Language::DE_DE[Locale::ES_ES];
// (string) "Alemán (Alemania)"
print Language::NN_NO[Locale::IT_IT];
// (string) "Norvegese nynorsk (Norvegia)"
```

etc.

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