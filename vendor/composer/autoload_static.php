<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfce4e687cbc11dab700d887d51829d89
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfce4e687cbc11dab700d887d51829d89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfce4e687cbc11dab700d887d51829d89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfce4e687cbc11dab700d887d51829d89::$classMap;

        }, null, ClassLoader::class);
    }
}