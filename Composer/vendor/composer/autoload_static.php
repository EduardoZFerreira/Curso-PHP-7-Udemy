<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03d7dbd1c8ce1ff8d66cb1a8ae733b3c
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit03d7dbd1c8ce1ff8d66cb1a8ae733b3c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}