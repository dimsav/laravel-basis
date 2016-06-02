<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('Addapp/Workers/Harvesters')
    ->exclude('tests/codeception/_support/_generated')
    ->in(__DIR__.'/app')
;

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array(
        '-indentation',
        'short_array_syntax',
        'align_double_arrow',
        'align_equals',
        'blankline_after_open_tag',
        'namespace_no_leading_whitespace',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
    ))
    ->finder($finder);