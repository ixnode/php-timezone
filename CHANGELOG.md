# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## Releases

### [0.1.17] - 2023-08-26

* Add language constants

### [0.1.16] - 2023-08-01

* Add Åland Islands country
* Add Europe/Mariehamn timezone

### [0.1.15] - 2023-07-30

* Add country builder
* Add all timezones and countries
* Add languages cz, de, en, es, fr, hr, it, pl, se
* Add iso3 and tld
* Refactoring

### [0.1.14] - 2023-07-29

* Add some american and asian timezones

### [0.1.13] - 2023-07-29

* Add United States and Canada

### [0.1.12] - 2023-07-29

* Add Language constants
* Add locale and language builder

### [0.1.11] - 2023-07-29

* Add more timezones

### [0.1.10] - 2023-07-13

* Add README.md updates

### [0.1.9] - 2023-07-13

* Add README.md updates

### [0.1.8] - 2023-07-10

* Add Europe/Kyiv and Europe/Kiev

### [0.1.7] - 2023-07-01

* Add more pacific codes

### [0.1.6] - 2023-07-01

* Add more european codes

### [0.1.5] - 2023-07-01

* Add countryCode length checker

### [0.1.4] - 2023-07-01

* Add Country::getCode functionality

### [0.1.3] - 2023-07-01

* Add Country::getName functionality

### [0.1.2] - 2023-07-01

* Add more european codes
* Refactoring

### [0.1.1] - 2023-07-01

* Add unknown and invalid codes

### [0.1.0] - 2023-06-30

* Initial release
* Add src
* Add tests
  * PHP Coding Standards Fixer
  * PHPMND - PHP Magic Number Detector
  * PHPStan - PHP Static Analysis Tool
  * PHPUnit - The PHP Testing Framework
  * Rector - Instant Upgrades and Automated Refactoring
* Add README.md
* Add LICENSE.md

## Add new version

```bash
# Checkout master branch
$ git checkout main && git pull

# Check current version
$ vendor/bin/version-manager --current

# Increase patch version
$ vendor/bin/version-manager --patch

# Change changelog
$ vi CHANGELOG.md

# Push new version
$ git add CHANGELOG.md VERSION && git commit -m "Add version $(cat VERSION)" && git push

# Tag and push new version
$ git tag -a "$(cat VERSION)" -m "Version $(cat VERSION)" && git push origin "$(cat VERSION)"
```
