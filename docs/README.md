# Markdown Documentation

A helper that converts Markdown to HTML with
[PHP Markdown](https://github.com/michelf/php-markdown/) (Markdown Extra syntax), packaged as a
plugin.

- [Installation](#installation)
- [Usage](#usage)
- [Security](#security)

## Installation

Install the plugin with [Composer](https://getcomposer.org/):

```bash
composer require pieceofcake2/markdown
```

This also installs PHP Markdown (`michelf/php-markdown`) as a dependency.

The plugin has the `cakephp-plugin` type, so it is installed into your plugins directory
(as `Markdown`) by `composer/installers`. Set `installer-paths` in your application's
`composer.json` so it is installed into the right place:

| Layout | `installer-paths` |
| --- | --- |
| Modern (`config/`, `src/`, `templates/`, `plugins/`) | `"plugins/{$name}/": ["type:cakephp-plugin"]` |
| Legacy (`app/Config/`, `app/Plugin/`) | `"app/Plugin/{$name}/": ["type:cakephp-plugin"]` |

Load the plugin in `config/bootstrap.php` (legacy layout: `app/Config/bootstrap.php`).
If you already use `CakePlugin::loadAll()`, this is not necessary:

```php
CakePlugin::load('Markdown');
```

## Usage

In your controller:

```php
public $helpers = ['Markdown.Markdown'];
```

In your view:

```php
echo $this->Markdown->md($markdown);
```

`md()` converts the Markdown text with `Michelf\MarkdownExtra` and returns the HTML, so
[Markdown Extra](https://michelf.ca/projects/php-markdown/extra/) features such as tables,
fenced code blocks and footnotes are available.

## Security

Markdown allows raw HTML, and `md()` returns the HTML as is. Do not pass untrusted input (e.g.
user comments) to `md()` without sanitizing the result, or you open your site to cross-site
scripting.

## Origin

This package is a maintained fork of
[chronon/CakePHP-Markdown-Plugin](https://github.com/chronon/CakePHP-Markdown-Plugin)
(`chronon/markdown` on Packagist, last upstream version 2.1.0), originally by Gregory Gaskill. It is
maintained for CakePHP 2 on modern PHP by [pieceofcake2](https://github.com/pieceofcake2). Changes
from the original are listed in the
[commit history since the fork](https://github.com/pieceofcake2/markdown/compare/3788e3e...2.x).
