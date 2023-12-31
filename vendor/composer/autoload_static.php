<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfed9b76f3ccfc66fffebaa7230844386
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mamie\\MyCalculatorLibrary\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mamie\\MyCalculatorLibrary\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfed9b76f3ccfc66fffebaa7230844386::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfed9b76f3ccfc66fffebaa7230844386::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfed9b76f3ccfc66fffebaa7230844386::$classMap;

        }, null, ClassLoader::class);
    }
}
