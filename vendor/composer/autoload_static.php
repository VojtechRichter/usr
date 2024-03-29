<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1c57aab3b75134b35917618e24b0945
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Usr\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Usr\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1c57aab3b75134b35917618e24b0945::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1c57aab3b75134b35917618e24b0945::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1c57aab3b75134b35917618e24b0945::$classMap;

        }, null, ClassLoader::class);
    }
}
