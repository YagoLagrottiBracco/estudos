<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1962587f731491b1a7d5a73bc60eb71
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1962587f731491b1a7d5a73bc60eb71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1962587f731491b1a7d5a73bc60eb71::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}