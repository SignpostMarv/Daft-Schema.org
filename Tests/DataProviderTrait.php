<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\Tests;

use Generator;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use RegexIterator;
use SignpostMarv\DaftObject\DaftObject;

trait DataProviderTrait
{
    /**
    * @psalm-return Generator<int, array{0:class-string<DaftObject>}, mixed, void>
    */
    public function dataProviderImplementations_class_or_interface() : Generator
    {
        $root_dir = __DIR__ . '/../src/';
        $root_ns = 'SignpostMarv\\DaftObject\\SchemaOrg\\';

        $iterator = new RegexIterator(
            new RecursiveIteratorIterator(new RecursiveDirectoryIterator(
                $root_dir,
                (
                    RecursiveDirectoryIterator::CURRENT_AS_PATHNAME |
                    RecursiveDirectoryIterator::SKIP_DOTS |
                    RecursiveDirectoryIterator::UNIX_PATHS
                )
            )),
            ('/^' . preg_quote($root_dir, '/') . '(.+)\.php$/'),
            RegexIterator::REPLACE
        );
        $iterator->replacement = '$1';

        /**
        * @var iterable<string>
        */
        $iterator = $iterator;

        foreach ($iterator as $current) {
            $current = $root_ns . str_replace('/', '\\', $current);


            if (is_a($current, DaftObject::class, true)) {
                yield [$current];
            }
        }
    }
}
