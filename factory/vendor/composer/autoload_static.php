<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28a74bdcc84dcdb4c9e44a910fa2adb2
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28a74bdcc84dcdb4c9e44a910fa2adb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28a74bdcc84dcdb4c9e44a910fa2adb2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}