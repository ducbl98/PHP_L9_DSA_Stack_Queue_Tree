<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5a18319a497d62d5c26daacc26a1421
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Queue\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Queue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Queue',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5a18319a497d62d5c26daacc26a1421::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5a18319a497d62d5c26daacc26a1421::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
