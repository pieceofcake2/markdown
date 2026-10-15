# Markdown ドキュメント

[PHP Markdown](https://github.com/michelf/php-markdown/) (Markdown Extra 記法) を使って
Markdown を HTML に変換するヘルパーを、プラグインとしてまとめたものです。

- [インストール](#installation)
- [使い方](#usage)
- [セキュリティ](#security)

<a id="installation"></a>

## インストール

[Composer](https://getcomposer.org/) でプラグインをインストールします。

```bash
composer require pieceofcake2/markdown
```

依存パッケージとして PHP Markdown (`michelf/php-markdown`) もインストールされます。

プラグインのタイプは `cakephp-plugin` なので、`composer/installers` によってプラグインディレクトリに
(`Markdown` として) インストールされます。正しい場所にインストールされるように、アプリケーションの
`composer.json` で `installer-paths` を設定してください。

| レイアウト | `installer-paths` |
| --- | --- |
| モダン (`config/`、`src/`、`templates/`、`plugins/`) | `"plugins/{$name}/": ["type:cakephp-plugin"]` |
| レガシー (`app/Config/`、`app/Plugin/`) | `"app/Plugin/{$name}/": ["type:cakephp-plugin"]` |

`config/bootstrap.php` (レガシーレイアウトでは `app/Config/bootstrap.php`) でプラグインを読み込みます。
すでに `CakePlugin::loadAll()` を使っている場合は不要です。

```php
CakePlugin::load('Markdown');
```

<a id="usage"></a>

## 使い方

コントローラーで次のように指定します。

```php
public $helpers = ['Markdown.Markdown'];
```

ビューでは次のように使います。

```php
echo $this->Markdown->md($markdown);
```

`md()` は Markdown のテキストを `Michelf\MarkdownExtra` で変換して HTML を返します。そのため、
テーブル、フェンスで囲まれたコードブロック、脚注などの
[Markdown Extra](https://michelf.ca/projects/php-markdown/extra/) の機能を使えます。

<a id="security"></a>

## セキュリティ

Markdown では生の HTML を書くことができ、`md()` はその HTML をそのまま返します。信頼できない入力
(ユーザーのコメントなど) を、結果をサニタイズせずに `md()` に渡さないでください。サイトが
クロスサイトスクリプティングに対して無防備になります。

<a id="origin"></a>

## 由来

このパッケージは
[chronon/CakePHP-Markdown-Plugin](https://github.com/chronon/CakePHP-Markdown-Plugin)
(Packagist では `chronon/markdown`、アップストリームの最終バージョンは 2.1.0) のメンテナンスされたフォークで、
元の作者は Gregory Gaskill です。[pieceofcake2](https://github.com/pieceofcake2) が、モダンな PHP で
動く CakePHP 2 向けにメンテナンスしています。オリジナルからの変更点は
[フォーク以降のコミット履歴](https://github.com/pieceofcake2/markdown/compare/3788e3e...2.x)
で確認できます。
