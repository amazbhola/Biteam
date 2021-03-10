<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc47a1de787ad6de4f9b3f5f5db841c74
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc47a1de787ad6de4f9b3f5f5db841c74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc47a1de787ad6de4f9b3f5f5db841c74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc47a1de787ad6de4f9b3f5f5db841c74::$classMap;

        }, null, ClassLoader::class);
    }
}
