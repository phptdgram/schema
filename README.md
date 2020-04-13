# Schema

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Code Quality][ico-quality]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]

[![Email][ico-email]][link-email]

The PHP TD Gram Schema generated TdLib Schema Classes using [phptdgram/schema-generator][link-generator] from [td_api.tl][link-td-api] file.

#### Based on TdLib `td_api` v1.6.0 schema version 

## Install

Via Composer

```bash
$ composer require phptdgram/schema
```

## Usage

```php
<?php

use PHPTdGram\Schema\TdSchemaRegistry;

$input = [
    '@type' => 'updateOption',
    'name' => 'version',
    'value' => [
        '@type' => 'optionValueString',
        'value' => '1.6.0',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will parse TdLib response to PHP Objects

```php
class PHPTdGram\Schema\UpdateOption#3 (3) {
  protected string $name =>
  string(7) "version"
  protected PHPTdGram\Schema\OptionValue $value =>
  class PHPTdGram\Schema\OptionValueString#2 (2) {
    protected string $value =>
    string(5) "1.6.0"
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  NULL
}
```

Another example:

```php
<?php

use PHPTdGram\Schema\TdSchemaRegistry;

$input = [
    '@extra' => 'foo',
    '@type' => 'updateAuthorizationState',
    'authorization_state' => [
        '@type' => 'authorizationStateWaitTdlibParameters',
    ],
];

TdSchemaRegistry::fromArray($input);
```

Will produce:

```php
class PHPTdGram\Schema\UpdateAuthorizationState#3 (2) {
  protected PHPTdGram\Schema\AuthorizationState $authorizationState =>
  class PHPTdGram\Schema\AuthorizationStateWaitTdlibParameters#2 (1) {
    public ?string $tdExtra =>
    NULL
  }
  public ?string $tdExtra =>
  string(3) "foo"
}
```

## Testing

Run PHP style checker

```bash
$ composer cs-check
```

Run PHP style fixer

```bash
$ composer cs-fix
```

Run all continuous integration tests

```bash
$ composer ci-run
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/phptdgram/schema.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/com/phptdgram/schema/master.svg?style=flat-square
[ico-quality]: https://img.shields.io/scrutinizer/quality/g/phptdgram/schema?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phptdgram/schema.svg?style=flat-square
[ico-email]: https://img.shields.io/badge/email-aurimas@niekis.lt-blue.svg?style=flat-square

[link-travis]: https://travis-ci.com/phptdgram/schema
[link-packagist]: https://packagist.org/packages/phptdgram/schema
[link-scrutinizer]: https://scrutinizer-ci.com/g/phptdgram/schema
[link-downloads]: https://packagist.org/packages/phptdgram/schema/stats
[link-generator]: https://github.com/phptdgram/schema-generator
[link-td-api]: https://github.com/tdlib/td/blob/v1.6.0/td/generate/scheme/td_api.tl
[link-email]: mailto:aurimas@niekis.lt
