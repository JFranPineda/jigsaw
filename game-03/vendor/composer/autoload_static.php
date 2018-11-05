<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c0650e17179867f74e945842b67803b
{
    public static $files = array (
        '578d079de5cdba2b05d0af0a658c50d4' => __DIR__ . '/..' . '/crysalead/kahlan/src/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kahlan\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kahlan\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/kahlan/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c0650e17179867f74e945842b67803b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c0650e17179867f74e945842b67803b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
