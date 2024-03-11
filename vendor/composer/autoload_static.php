<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea4fb6dbbc3bf32fb0381da9977d80f5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BeycanPress\\CryptoPay\\Integrator\\' => 33,
            'BeycanPress\\CryptoPay\\GiveWP\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BeycanPress\\CryptoPay\\Integrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/beycanpress/cryptopay-integrator/src',
        ),
        'BeycanPress\\CryptoPay\\GiveWP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea4fb6dbbc3bf32fb0381da9977d80f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea4fb6dbbc3bf32fb0381da9977d80f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea4fb6dbbc3bf32fb0381da9977d80f5::$classMap;

        }, null, ClassLoader::class);
    }
}