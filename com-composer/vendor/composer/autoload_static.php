<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd42e0b11ee2584854a00f997de1f1c13
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd42e0b11ee2584854a00f997de1f1c13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd42e0b11ee2584854a00f997de1f1c13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd42e0b11ee2584854a00f997de1f1c13::$classMap;

        }, null, ClassLoader::class);
    }
}
