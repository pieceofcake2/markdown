# CakePHP 2 Markdown Helper Plugin

[![GitHub License](https://img.shields.io/github/license/pieceofcake2/markdown?label=License)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/pieceofcake2/markdown?label=Packagist)](https://packagist.org/packages/pieceofcake2/markdown)
![PHP](https://img.shields.io/packagist/dependency-v/pieceofcake2/markdown/php?logo=php&logoColor=%23FFFFFF&label=PHP&labelColor=%23777BB4&color=%23FFFFFF)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen?label=PHPStan)](https://github.com/pieceofcake2//Users/tsuyoshi/dev/pieceofcake2/markdown/actions/workflows/CI.yml)
![CakePHP](https://img.shields.io/packagist/dependency-v/pieceofcake2/markdown/pieceofcake2/cakephp?logo=cakephp&logoColor=%23FFFFFF&label=CakePHP&labelColor=%23D33C43&color=%23FFFFFF)
[![CI](https://img.shields.io/github/actions/workflow/status/pieceofcake2/markdown/CI.yml?label=CI)](https://github.com/pieceofcake2/markdown/actions/workflows/CI.yml)
[![Codecov](https://img.shields.io/codecov/c/gh/pieceofcake2/markdown?label=Coverage)](https://codecov.io/gh/pieceofcake2/markdown)

A helper that converts Markdown to HTML with [PHP Markdown](https://github.com/michelf/php-markdown/)
(Markdown Extra syntax), packaged as a plugin. This is a fork of
[chronon/CakePHP-Markdown-Plugin](https://github.com/chronon/CakePHP-Markdown-Plugin) for
[pieceofcake2/cakephp](https://github.com/pieceofcake2/cakephp).

## Documentation

- Website: https://pieceofcake2.github.io/markdown/
- Markdown: [docs/README.md](docs/README.md) (for AI tools and offline reading)

The Markdown documentation is also included in the Composer package, in the plugin's directory: `plugins/Markdown/docs/README.md` (the location depends on your `installer-paths`). Install the package with `--dev` if you only need it for development.

## Requirements

* PHP 8.0+
* pieceofcake2/cakephp 2.12+

## Installation

```bash
composer require pieceofcake2/markdown
```

## Contributing

See the [contribution guidelines](https://github.com/pieceofcake2/.github/blob/master/CONTRIBUTING.md).

## Origin

This package is a maintained fork of
[chronon/CakePHP-Markdown-Plugin](https://github.com/chronon/CakePHP-Markdown-Plugin)
(`chronon/markdown` on Packagist, last upstream version 2.1.0), originally by Gregory Gaskill. It is
maintained for CakePHP 2 on modern PHP by [pieceofcake2](https://github.com/pieceofcake2). Changes
from the original are listed in the
[commit history since the fork](https://github.com/pieceofcake2/markdown/compare/3788e3e...2.x).

## License

The MIT License. See [LICENSE](LICENSE).
