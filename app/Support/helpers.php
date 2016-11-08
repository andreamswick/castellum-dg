<?php

use Illuminate\Support\Debug\HtmlDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

if (!function_exists('markdown')) {
    /**
     * Convert some text to Markdown...
     *
     * @param $text
     *
     * @return mixed|string
     */
    function markdown($text)
    {
        return (new ParsedownExtra)->text($text);
    }
}

if (!function_exists('ddd')) {

    /**
     * Modified dd() method
     *
     * @param     $variable
     * @param int $depth
     * @param int $stringLength
     */
    function ddd($variable, $depth = -1, $stringLength = 20)
    {
        $cloner = new VarCloner();
        $cloner->setMaxString($stringLength);

        $dumper = 'cli' === PHP_SAPI ? new CliDumper() : new HtmlDumper();
        $dumper->dump($cloner->cloneVar($variable)->withMaxDepth($depth));

        die(1);
    }
}

if (!function_exists('pp')) {

    /**
     * Modified dump() method
     *
     * @param     $variable
     * @param int $depth
     * @param int $stringLength
     */
    function pp($variable, $depth = -1, $stringLength = 20)
    {
        $cloner = new VarCloner();
        $cloner->setMaxString($stringLength);

        $dumper = 'cli' === PHP_SAPI ? new CliDumper() : new HtmlDumper();
        $dumper->dump($cloner->cloneVar($variable)->withMaxDepth($depth));

    }
}
