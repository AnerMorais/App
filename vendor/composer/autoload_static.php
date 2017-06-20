<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc65f0858c5a75195f5da0ce52f7cc09a
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Interfaces\\' => 15,
            'App\\Classes\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Interfaces',
        ),
        'App\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc65f0858c5a75195f5da0ce52f7cc09a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc65f0858c5a75195f5da0ce52f7cc09a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}