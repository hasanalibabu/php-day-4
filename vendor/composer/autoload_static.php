<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited2d4556d326a8fcc9658f37acd5a2aa
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
            $loader->prefixLengthsPsr4 = ComposerStaticInited2d4556d326a8fcc9658f37acd5a2aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited2d4556d326a8fcc9658f37acd5a2aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited2d4556d326a8fcc9658f37acd5a2aa::$classMap;

        }, null, ClassLoader::class);
    }
}
