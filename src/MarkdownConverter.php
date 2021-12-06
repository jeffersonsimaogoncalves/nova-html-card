<?php declare(strict_types=1);

namespace IDF\HtmlCard;

interface MarkdownConverter
{
    /**
     * Parse the given Markdown text into HTML.
     * @param string $text
     * @return \Illuminate\Support\HtmlString
     */
    public static function parse($text);
}
