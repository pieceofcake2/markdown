<?php
App::uses('MarkdownHelper', 'Markdown.View/Helper');
App::uses('View', 'View');
App::import('Vendor', ['file' => 'autoload']);

/**
 * MarkdownHelper Test Case
 */
class MarkdownHelperTest extends CakeTestCase
{
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $View = new View();
        $this->Markdown = new MarkdownHelper($View);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Markdown);

        parent::tearDown();
    }

    /**
     * testMd method
     *
     * @return void
     */
    public function testMd(): void
    {
        $input = <<<EOT
            ## Hello

            Here is something and it's really fun.

            It's so fun, I'll **make a list**:

            * This
            * That
            * More!

            Checkout [Technokracy](http://technokracy.net) for free beer.
            EOT;

        $expected = <<<EOT
            <h2>Hello</h2>

            <p>Here is something and it's really fun.</p>

            <p>It's so fun, I'll <strong>make a list</strong>:</p>

            <ul>
            <li>This</li>
            <li>That</li>
            <li>More!</li>
            </ul>

            <p>Checkout <a href="http://technokracy.net">Technokracy</a> for free beer.</p>
            EOT . "\n";
        $result = $this->Markdown->md($input);

        $this->assertEquals($expected, $result);
    }
}
