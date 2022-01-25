<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb860d9d883427b4a64a19dcae66a6ab9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb860d9d883427b4a64a19dcae66a6ab9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb860d9d883427b4a64a19dcae66a6ab9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb860d9d883427b4a64a19dcae66a6ab9::$classMap;

        }, null, ClassLoader::class);
    }
}