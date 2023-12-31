<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit738912cab18ec3a9d04f133909ba46c0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thingengineer\\MysqliDatabaseClass\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thingengineer\\MysqliDatabaseClass\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit738912cab18ec3a9d04f133909ba46c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit738912cab18ec3a9d04f133909ba46c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit738912cab18ec3a9d04f133909ba46c0::$classMap;

        }, null, ClassLoader::class);
    }
}
