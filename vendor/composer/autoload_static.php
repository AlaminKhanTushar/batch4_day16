<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf06e11ada4022580e8fc7f0c55606d7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf06e11ada4022580e8fc7f0c55606d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf06e11ada4022580e8fc7f0c55606d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf06e11ada4022580e8fc7f0c55606d7::$classMap;

        }, null, ClassLoader::class);
    }
}
