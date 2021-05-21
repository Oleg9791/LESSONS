<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit537f4ed8b13b9427fe02b7d286537fc4
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oleg\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oleg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/OLeg',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit537f4ed8b13b9427fe02b7d286537fc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit537f4ed8b13b9427fe02b7d286537fc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit537f4ed8b13b9427fe02b7d286537fc4::$classMap;

        }, null, ClassLoader::class);
    }
}
