<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaf0909a831ca32d4e3e1d843a26d523
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaf0909a831ca32d4e3e1d843a26d523::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaf0909a831ca32d4e3e1d843a26d523::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
