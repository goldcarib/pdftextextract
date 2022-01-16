<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit719c53dab9c53a235e42d46baf0ebc62
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smalot\\PdfParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/smalot/pdfparser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit719c53dab9c53a235e42d46baf0ebc62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit719c53dab9c53a235e42d46baf0ebc62::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit719c53dab9c53a235e42d46baf0ebc62::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit719c53dab9c53a235e42d46baf0ebc62::$classMap;

        }, null, ClassLoader::class);
    }
}
