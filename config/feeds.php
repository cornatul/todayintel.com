<?php
return [

    'news-api-key' => env('NEWS_API_KEY', 'c29a123962034057aac547e7321be062'),

    'nlp-api-url' => env('NLP_API_URL', 'http://172.16.238.245:8000/'),

    'article-formatting' => [
        'header_style' => 'setext', // Set to 'atx' to output H1 and H2 headers as # Header1 and ## Header2
        'suppress_errors' => true, // Set too false to show warnings when loading malformed HTML
        'strip_tags' => true, // Set to true to strip tags that don't have markdown equivalents. N.B. Strips tags, not their content. Useful to clean MS Word HTML output.
        'strip_placeholder_links' => true, // Set to true to remove <a> that doesn't have href.
        'bold_style' => '**', // DEPRECATED: Set to '__' if you prefer the underlined style
        'italic_style' => '*', // DEPRECATED: Set to '_' if you prefer the underlined style
        'remove_nodes' => 'meta style script', // space-separated list of dom nodes that should be removed. example: 'meta style script'
        'hard_break' => true, // Set to true to turn <br> into `\n` instead of `  \n`
        'list_item_style' => '-', // Set the default character for each <li> in a <ul>. Can be '-', '*', or '+'
        'preserve_comments' => false, // Set to true to preserve comments, or set to an array of strings to preserve specific comments
        'use_autolinks' => false, // Set to true to use simple link syntax if possible. Will always use []() if set to false
        'table_pipe_escape' => '\|', // Replacement string for pipe characters inside markdown table cells
        'table_caption_side' => 'top', // Set to 'top' or 'bottom' to show <caption> content before or after table, null to suppress
    ],
];
