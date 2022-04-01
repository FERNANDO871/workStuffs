<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f679cb391771aa49ed5e2ecb7177cac
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f679cb391771aa49ed5e2ecb7177cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f679cb391771aa49ed5e2ecb7177cac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f679cb391771aa49ed5e2ecb7177cac::$classMap;

        }, null, ClassLoader::class);
    }
}