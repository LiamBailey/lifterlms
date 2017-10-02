<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6000b7ce5b2358bb105d83d4e857e697
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6000b7ce5b2358bb105d83d4e857e697::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6000b7ce5b2358bb105d83d4e857e697::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
