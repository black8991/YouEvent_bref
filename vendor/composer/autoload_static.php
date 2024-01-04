<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7479bf6fc310d6df1b9722c241ccd494
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youcode\\Youevent\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youcode\\Youevent\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7479bf6fc310d6df1b9722c241ccd494::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7479bf6fc310d6df1b9722c241ccd494::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7479bf6fc310d6df1b9722c241ccd494::$classMap;

        }, null, ClassLoader::class);
    }
}
