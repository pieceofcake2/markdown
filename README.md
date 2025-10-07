# CakePHP 2 Markdown Helper Plugin

[![GitHub License](https://img.shields.io/github/license/pieceofcake2/markdown?label=License)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/pieceofcake2/markdown?label=Packagist)](https://packagist.org/packages/pieceofcake2/markdown)
![PHP](https://img.shields.io/packagist/dependency-v/pieceofcake2/markdown/php?logo=php&logoColor=%23FFFFFF&label=PHP&labelColor=%23777BB4&color=%23FFFFFF)
![CakePHP](https://img.shields.io/packagist/dependency-v/pieceofcake2/markdown/pieceofcake2/cakephp?logo=cakephp&logoColor=%23FFFFFF&label=CakePHP&labelColor=%23D33C43&color=%23FFFFFF)
[![CI](https://img.shields.io/github/actions/workflow/status/pieceofcake2/markdown/CI.yml?label=CI)](https://github.com/pieceofcake2/markdown/actions/workflows/CI.yml)
[![Codecov](https://img.shields.io/codecov/c/gh/pieceofcake2/markdown?label=Coverage)](https://codecov.io/gh/pieceofcake2/markdown)

__This is forked for CakePHP2.__

A [PHP Markdown](https://github.com/michelf/php-markdown/) helper packaged as a plugin.

## Installation

```bash
composer require pieceofcake2/markdown
```

## Usage

In your controller:

```php
<?php
public $helpers = array('Markdown.Markdown');
```

In your view:

```php
<?php
echo $this->Markdown->md(markdown_to_be_converted_to_html);
```
