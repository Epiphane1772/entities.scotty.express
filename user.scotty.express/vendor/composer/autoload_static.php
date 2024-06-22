<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cd9ac973e3ab901356c43e68e652ebd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stephanelefebvre\\UserScottyExpress\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stephanelefebvre\\UserScottyExpress\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cd9ac973e3ab901356c43e68e652ebd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cd9ac973e3ab901356c43e68e652ebd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4cd9ac973e3ab901356c43e68e652ebd::$classMap;

        }, null, ClassLoader::class);
    }
}