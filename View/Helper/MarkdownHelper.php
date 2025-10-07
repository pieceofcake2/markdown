<?php

use Michelf\MarkdownExtra;

App::uses('AppHelper', 'View/Helper');

/**
 * MarkdownHelper - a CakePHP helper to output Markdown
 *
 * @package MarkdownHelper
 * @version Release: 2.1.0
 * @author Gregory Gaskill <gregory@chronon.com>
 * @link https://github.com/chronon/CakePHP-Markdown-Plugin
 */
class MarkdownHelper extends AppHelper
{
    /**
     * Converts markdown formatted plain text to HTML
     *
     * @param string $input The markdown formatted text.
     * @return string The converted HTML.
     * @throws CakeException if Markdown lib or Markdown function (vendor file) can't be found/loaded.
     */
    public function md($input)
    {
        if (!class_exists(MarkdownExtra::class)) {
            throw new CakeException('The Markdown vendor file was not loaded.');
        }

        $Markdown = new MarkdownExtra();

        return $Markdown->defaultTransform($input);
    }
}
