<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b15da2e6b2688303c8ee502bee30654
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Binary\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Binary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b15da2e6b2688303c8ee502bee30654::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b15da2e6b2688303c8ee502bee30654::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}