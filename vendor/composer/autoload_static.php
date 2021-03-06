<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita42f72c8c114e20a51d31281953e16c5
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'org\\ebq\\api\\' => 12,
        ),
        'c' => 
        array (
            'com\\jzq\\api\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'org\\ebq\\api\\' => 
        array (
            0 => __DIR__ . '/..' . '/ebq/rop_client/src/org/ebq/api',
        ),
        'com\\jzq\\api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/com/jzq/api',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita42f72c8c114e20a51d31281953e16c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita42f72c8c114e20a51d31281953e16c5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
