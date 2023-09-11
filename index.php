<?php
require 'vendor/autoload.php';

$parser = new \cebe\markdown\MarkdownExtra();
echo $parser->parse(file_get_contents(__DIR__ . '/markdown-files/index.md'));
