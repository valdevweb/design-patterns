<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd53b21474195bac8903d96b89e103238
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vmo\\PatternStrategy\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vmo\\PatternStrategy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd53b21474195bac8903d96b89e103238::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd53b21474195bac8903d96b89e103238::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd53b21474195bac8903d96b89e103238::$classMap;

        }, null, ClassLoader::class);
    }
}
