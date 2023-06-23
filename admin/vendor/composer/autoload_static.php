<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde7187593bcd74af635767ad9c72a4ae
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Allankayz\\Intwoafrica\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Allankayz\\Intwoafrica\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitde7187593bcd74af635767ad9c72a4ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde7187593bcd74af635767ad9c72a4ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde7187593bcd74af635767ad9c72a4ae::$classMap;

        }, null, ClassLoader::class);
    }
}
